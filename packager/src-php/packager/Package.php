<?php
namespace packager;

use php\io\IOException;
use php\io\Stream;
use php\lang\System;
use php\lib\arr;
use php\lib\str;
use php\util\Regex;

/**
 * Class Package
 * @package packager
 */
class Package
{
    const FILENAME = "package.php.yml";
    const LOCK_FILENAME = "package-lock.php.yml";

    /**
     * @var array
     */
    private $data = [];

    /**
     * @var array
     */
    private $info = [];

    /**
     * Package constructor.
     * @param array $data
     * @param array $info
     */
    public function __construct(array $data, array $info = [])
    {
        $this->data = $data;
        $this->data = $this->prepareData($data);

        $this->info = $info;
    }

    protected function prepareData(array $data): array
    {
        $result = [];

        $pattern = new Regex('\\%([0-9a-z\\-\\_\\.\\:]+)\\%', 'i');

        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $result[$key] = $this->prepareData($value);
            } else {
                $r = $pattern->with($value);

                $result[$key] = $r->replaceWithCallback(function (Regex $r) {
                    [$var, $def] = str::split($r->group(1), ':');

                    if (str::startsWith($var, 'env.')) {
                        return $_ENV[str::sub($var, 4)] ?? $def;
                    }

                    if (str::startsWith($var, 'sys.')) {
                        return System::getProperty(str::sub($var, 4), $def);
                    }

                    return $this->getAny($var, $def);
                });
            }
        }

        return $result;
    }

    public function getSize(): ?int
    {
        return $this->info['size'];
    }

    public function getHash(): ?string
    {
        return $this->info['sha256'];
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->info['type'] ?: 'std';
    }

    public function getInfo(): array
    {
        return $this->info;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->data['name'];
    }

    /**
     * @return string
     */
    public function getNameWithVersion(): string
    {
        return $this->getName() . '@' . $this->getVersion('last');
    }

    /**
     * @param null|string $def
     * @return null|string
     */
    public function getVersion(string $def = null): ?string
    {
        return $this->data['version'] ?: $def;
    }

    /**
     * @return null|string
     */
    public function getRealVersion(): ?string
    {
        return $this->info['realVersion'] ?? $this->getVersion();
    }

    /**
     * @return null|string
     */
    public function getMain(): ?string
    {
        return $this->data['main'];
    }

    /**
     * @return array
     */
    public function getRepos(): array
    {
        return $this->data['repos'] ?: [];
    }

    /**
     * @return array
     */
    public function getJars(): array
    {
        return $this->data['jars'] ?: [];
    }

    /**
     * @return array
     */
    public function getDeps(): array
    {
        return $this->data['deps'] ?: [];
    }

    /**
     * @return array
     */
    public function getDevDeps(): array
    {
        return $this->data['devDeps'] ?: [];
    }

    public function toArray(): array
    {
        return $this->data;
    }

    public function getDescription(): ?string
    {
        return $this->data['description'] ?: null;
    }

    /**
     * @return array
     */
    public function getSources(): array
    {
        return $this->data['sources'] ?: [];
    }

    /**
     * @return array
     */
    public function getIncludes(): array
    {
        return $this->getAny('includes', []);
    }

    /**
     * @return array
     */
    public function getTasks(): array
    {
        return $this->getAny('tasks', []);
    }

    /**
     * @param string $key
     * @param null $def
     * @return mixed|null
     */
    public function getAny(string $key, $def = null)
    {
        $keys = str::split($key, '.');
        $result = $this->data;

        foreach ($keys as $key) {
            if (isset($result[$key])) {
                $result = $result[$key];
            } else {
                return $def;
            }
        }

        return $result;
    }

    public function toString(): string
    {
        return $this->getName() . "@" . $this->getVersion('last');
    }

    /**
     * @return array
     */
    public function getProjects(): array
    {
        return $this->getAny('projects', []);
    }

    /**
     * @param string|Stream $source
     * @param array $info
     * @return Package
     */
    static public function readPackage($source, array $info = []): Package
    {
        $stream = $source instanceof Stream ? $source : Stream::of($source, 'r');

        try {
            $data = $stream->parseAs('yaml');

            return new Package($data, $info);
        } finally {
            $stream->close();
        }
    }

    /**
     * @param Package $package
     * @return bool
     */
    public function isIdentical(Package $package)
    {
        return ($this->info == $package->info);
    }

    /**
     * @return string
     */
    public function getConfigVendorPath(): string
    {
        return $this->getAny('config.vendor-dir', './vendor');
    }

    /**
     * @return string
     */
    public function getConfigBuildPath(): string
    {
        return $this->getAny('config.build-dir', './build');
    }

    /**
     * @return Ignore
     */
    public function fetchIgnore(): Ignore
    {
        $ignore = new Ignore((array) $this->getAny('config.ignore', []));

        $ignore->setBase('/');
        $ignore->addRule("/" . self::LOCK_FILENAME);

        $ignore->addRule($this->getConfigBuildPath() . "/**");
        $ignore->addRule($this->getConfigVendorPath() . "/**");

        return $ignore;
    }
}