<?php

$array = [1, 2, 0, 3, 0, 4];
$arr = [];

for ($i = 0; $i < count($array) - 1; $i++) {
    $value = $array[$i];
    if ($value == 0) {
        $arr[] = $value;
    }
}

for ($i = 0; $i < count($array) - 1; $i++) {
    $value = $array[$i];
    if ($value !== 0) {
        $arr[]=$value;
    }
}

foreach($arr as $v){
    echo $v .",";
}

?>