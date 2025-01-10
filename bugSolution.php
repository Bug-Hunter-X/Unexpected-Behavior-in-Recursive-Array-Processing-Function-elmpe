```php
function processData(array $data): array
{
    $result = [];
    foreach ($data as $item) {
        if (is_array($item)) {
            $result = array_merge($result, $this->processData($item));
        } elseif (is_string($item) && trim($item) !== "") {
            $result[] = $item;
        }
    }
    return $result;
}

$data = [
    "apple",
    ["banana", "cherry"],
    ["date", ["fig", "grape"]],
    "", // Empty string
    123, // Integer
];

$processedData = processData($data);
print_r($processedData);
```