# flat-array

Flat nested arrays of numbers into an array of integers. It skips non numeric values.

Input sample:

```php
[[1, 2, [3]], 4];
```

Result:

```php
[1,2,3,4];
```

## Installation
From the command line run:

```
composer require ricmin/flat-array
```

## How to use
```php
$input = [[1, 2, [3]], 4, [[[5, [6]]]]];
$flatter = new FlatArray();
$flatter->flatArray($input);
$result = $flatter->getResult(); // returns [1,2,3,4,5,6]
```
