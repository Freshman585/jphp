# ZipArchiveEntry

- **класс** `ZipArchiveEntry` (`compress\ZipArchiveEntry`) **унаследован от** [`ArchiveEntry`](https://github.com/jphp-compiler/jphp/blob/master/exts/jphp-compress-ext/api-docs/classes/compress/ArchiveEntry.ru.md)
- **пакет** `compress`
- **исходники** [`compress/ZipArchiveEntry.php`](./src/main/resources/JPHP-INF/sdk/compress/ZipArchiveEntry.php)

**Описание**

Class TarArchiveEntry

---

#### Свойства

- `->`[`unixMode`](#prop-unixmode) : `int`
- `->`[`comment`](#prop-comment) : `string`
- `->`[`method`](#prop-method) : `int`
- `->`[`crc`](#prop-crc) : `int`
- `->`[`time`](#prop-time) : `int`

---

#### Статичные Методы

- `ZipArchiveEntry ::`[`ofFile()`](#method-offile)

---

#### Методы

- `->`[`__construct()`](#method-__construct) - _TarArchiveEntry constructor._

---
# Статичные Методы

<a name="method-offile"></a>

### ofFile()
```php
ZipArchiveEntry::ofFile(File|string $file, string $fileName): compress\ZipArchiveEntry
```

---
# Методы

<a name="method-__construct"></a>

### __construct()
```php
__construct(string $name, int $size): void
```
TarArchiveEntry constructor.