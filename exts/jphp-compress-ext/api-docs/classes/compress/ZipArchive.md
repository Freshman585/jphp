# ZipArchive

- **class** `ZipArchive` (`compress\ZipArchive`) **extends** [`Archive`](https://github.com/jphp-compiler/jphp/blob/master/exts/jphp-compress-ext/api-docs/classes/compress/Archive.md)
- **package** `compress`
- **source** [`compress/ZipArchive.php`](./src/main/resources/JPHP-INF/sdk/compress/ZipArchive.php)


---

#### Methods

- `->`[`createInput()`](#method-createinput)
- `->`[`createOutput()`](#method-createoutput)
- `->`[`entries()`](#method-entries)
- `->`[`entry()`](#method-entry)
- `->`[`readAll()`](#method-readall)
- `->`[`read()`](#method-read)

---
# Methods

<a name="method-createinput"></a>

### createInput()
```php
createInput(): ArchiveInput
```

---

<a name="method-createoutput"></a>

### createOutput()
```php
createOutput(): ArchiveOutput
```

---

<a name="method-entries"></a>

### entries()
```php
entries(): ZipArchiveEntry[]
```

---

<a name="method-entry"></a>

### entry()
```php
entry(string $path): ZipArchiveEntry
```

---

<a name="method-readall"></a>

### readAll()
```php
readAll(callable $callback): ZipArchiveEntry[]
```

---

<a name="method-read"></a>

### read()
```php
read(string $path, callable $callback): ZipArchiveEntry
```