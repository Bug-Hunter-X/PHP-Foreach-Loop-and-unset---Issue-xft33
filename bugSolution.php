```php
$array = [1, 2, 3];
$keysToRemove = [];
foreach ($array as $key => $value) {
if ($value === 2) {
$keysToRemove[] = $key;
}
}
foreach ($keysToRemove as $key) {
unset($array[$key]);
}
print_r($array);
```