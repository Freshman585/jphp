# SourceManager

- **class** `SourceManager` (`phpx\parser\SourceManager`)
- **source** [`phpx/parser/SourceManager.php`](./src/main/resources/JPHP-INF/sdk/phpx/parser/SourceManager.php)

**Description**

Class SourceManager

---

#### Methods

- `->`[`find()`](#method-find)
- `->`[`findAll()`](#method-findall)
- `->`[`update()`](#method-update)
- `->`[`write()`](#method-write)
- `->`[`get()`](#method-get)

---
# Methods

<a name="method-find"></a>

### find()
```php
find(callable $filter): mixed
```

---

<a name="method-findall"></a>

### findAll()
```php
findAll(callable $filter): mixed
```

---

<a name="method-update"></a>

### update()
```php
update(SourceFile $any): void
```

---

<a name="method-write"></a>

### write()
```php
write(phpx\parser\SourceFile $file, phpx\parser\SourceWriter $writer): void
```

---

<a name="method-get"></a>

### get()
```php
get(mixed $path, mixed $uniqueId): SourceFile
```