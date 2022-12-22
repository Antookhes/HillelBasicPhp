<?php
$array = [];
$arrayLen = 50;
$arrMin = 0;
$arrMax = 377;
$sum = 0;
$multi = 1;
for($i = 0; $i < $arrayLen; $i ++){
    $array[] = mt_rand($arrMin, $arrMax);
    $sum += $array[$i];
    $multi *= $array[$i];
}
//echo "<pre>";
//var_dump($array);
//echo "</pre>";

echo $sum;

echo "<br>";
$sumFun = array_sum($array);
echo $sumFun;

echo "<br>";
echo $multi;

echo "<br>";
$multiplicationArray = array_product($array);
echo $multiplicationArray;

echo "<br>";
echo min($array);
echo "<br>";
echo max($array);

foreach ($array as $k => $value)
{
    if ($value % 2 == 0)
        $arr1[] = $value;
    else
        $arr2[] = $value;
}

echo "<pre>";
var_dump($arr1);
echo "</pre>";

echo "<pre>";
var_dump($arr2);
echo "</pre>";