<?php
$array = [
    'apple' => 'A fruit that is red or green',
    'banana' => 'A yellow fruit that is long and curved',
    'carrot' => 'An orange vegetable that is crunchy'
];

header('Content-Type: application/json');
echo json_encode($array);
?>
