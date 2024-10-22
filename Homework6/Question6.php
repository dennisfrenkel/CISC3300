<?php
$array = [
    'apple' => 'A fruit that is red or green',
    'banana' => 'A yellow fruit that is long and curved',
    'carrot' => 'An orange vegetable that is crunchy'
];
foreach ($array as $key => $value) {
    echo "Key: $key, Value: $value <br>";
}
function getFruitDescription(string $fruit, string $color = 'unknown'): string {
    return "The $fruit is $color.";
}
echo getFruitDescription('apple', 'red');
?>
