```php
$array = [1, 2, 3];
foreach ($array as $key => $value) {
if ($value === 2) {
unset($array[$key]);
}
}
print_r($array);
```