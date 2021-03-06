# Archive

- **класс** `Archive` (`compress\Archive`)
- **исходники** [`compress/Archive.php`](./src/main/resources/JPHP-INF/sdk/compress/Archive.php)

**Описание**

Class Archive

---

#### Свойства

- `->`[`source`](#prop-source) : `string|Stream|File`

---

#### Методы

- `->`[`__construct()`](#method-__construct) - _Archive constructor._
- `->`[`createInput()`](#method-createinput)
- `->`[`createOutput()`](#method-createoutput)
- `->`[`open()`](#method-open) - _Open archive for writing._
- `->`[`close()`](#method-close) - _Finish writing archive._
- `->`[`entries()`](#method-entries)
- `->`[`entry()`](#method-entry)
- `->`[`readAll()`](#method-readall)
- `->`[`read()`](#method-read)
- `->`[`addFile()`](#method-addfile)
- `->`[`addFromString()`](#method-addfromstring)
- `->`[`addEntry()`](#method-addentry)
- `->`[`addEmptyEntry()`](#method-addemptyentry)

---
# Методы

<a name="method-__construct"></a>

### __construct()
```php
__construct(File|Stream|string $source): void
```
Archive constructor.

---

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

<a name="method-open"></a>

### open()
```php
open(): void
```
Open archive for writing.

---

<a name="method-close"></a>

### close()
```php
close(): void
```
Finish writing archive.

---

<a name="method-entries"></a>

### entries()
```php
entries(): ArchiveEntry[]
```

---

<a name="method-entry"></a>

### entry()
```php
entry(string $path): ArchiveEntry
```

---

<a name="method-readall"></a>

### readAll()
```php
readAll(callable $callback): ArchiveEntry[]
```

---

<a name="method-read"></a>

### read()
```php
read(string $path, callable $callback): ArchiveEntry
```

---

<a name="method-addfile"></a>

### addFile()
```php
addFile(File|string $path, string|null $localName, callable $progressHandler, int $bufferSize): void
```

---

<a name="method-addfromstring"></a>

### addFromString()
```php
addFromString(compress\ArchiveEntry $entry, string $contents): void
```

---

<a name="method-addentry"></a>

### addEntry()
```php
addEntry(compress\ArchiveEntry $entry, string|Stream|File|null $source, callable $progressHandler, int $bufferSize): void
```

---

<a name="method-addemptyentry"></a>

### addEmptyEntry()
```php
addEmptyEntry(compress\ArchiveEntry $entry): void
```