<?php
$array = ["blue", "yellow"];
$arrayTwo = addItemToArray2($array, "black");

function addItemToArray ($array, $item) {
array_push($array, $item);
return $array;
echo "originele array is niet aangepast";
}

function addItemToArray2 (&$array, $item) {
    array_push($array, $item);
    echo "originele array is aangepast";
    }

print_r($array);
print_r($arrayTwo);