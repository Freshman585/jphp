# Element

- **class** `Element` (`php\jsoup\Element`)
- **source** [`php/jsoup/Element.php`](./src/main/resources/JPHP-INF/sdk/php/jsoup/Element.php)

**Description**

Class Element

---

#### Methods

- `->`[`html()`](#method-html)
- `->`[`outerHtml()`](#method-outerhtml)
- `->`[`text()`](#method-text)
- `->`[`nodeName()`](#method-nodename)
- `->`[`tagName()`](#method-tagname)
- `->`[`isBlock()`](#method-isblock)
- `->`[`id()`](#method-id)
- `->`[`attr()`](#method-attr)
- `->`[`val()`](#method-val)
- `->`[`dataset()`](#method-dataset)
- `->`[`parent()`](#method-parent)
- `->`[`parents()`](#method-parents)
- `->`[`child()`](#method-child)
- `->`[`children()`](#method-children)
- `->`[`select()`](#method-select)
- `->`[`addClass()`](#method-addclass)
- `->`[`removeClass()`](#method-removeclass)
- `->`[`hasClass()`](#method-hasclass)

---
# Methods

<a name="method-html"></a>

### html()
```php
html(string $html): string
```

---

<a name="method-outerhtml"></a>

### outerHtml()
```php
outerHtml(): string
```

---

<a name="method-text"></a>

### text()
```php
text(mixed $text): string
```

---

<a name="method-nodename"></a>

### nodeName()
```php
nodeName(): string
```

---

<a name="method-tagname"></a>

### tagName()
```php
tagName(string $tagName): string
```

---

<a name="method-isblock"></a>

### isBlock()
```php
isBlock(): bool
```

---

<a name="method-id"></a>

### id()
```php
id(): string
```

---

<a name="method-attr"></a>

### attr()
```php
attr(mixed $attributeKey, mixed $attributeValue): $this
```

---

<a name="method-val"></a>

### val()
```php
val(string $value): string
```

---

<a name="method-dataset"></a>

### dataset()
```php
dataset(): array
```

---

<a name="method-parent"></a>

### parent()
```php
parent(): Element
```

---

<a name="method-parents"></a>

### parents()
```php
parents(): Elements
```

---

<a name="method-child"></a>

### child()
```php
child(int $index): Element
```

---

<a name="method-children"></a>

### children()
```php
children(): Elements
```

---

<a name="method-select"></a>

### select()
```php
select(string $cssQuery): Elements
```

---

<a name="method-addclass"></a>

### addClass()
```php
addClass(string $class): void
```

---

<a name="method-removeclass"></a>

### removeClass()
```php
removeClass(string $class): void
```

---

<a name="method-hasclass"></a>

### hasClass()
```php
hasClass(string $class): bool
```