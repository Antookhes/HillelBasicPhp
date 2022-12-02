<?php
// посчитать длину массива
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
var_dump(count($arr));
//переместить первые 4 элемента массива в конец массива
list($arr[0], $arr[5],) = array($arr[5], $arr[0]);
list($arr[1], $arr[6],) = array($arr[6], $arr[1]);
list($arr[2], $arr[7],) = array($arr[7], $arr[2]);
list($arr[3], $arr[8],) = array($arr[8], $arr[3]);
echo '<pre>';
print_r($arr);
echo '</pre>';

//получить сумму 4,5,6 элемента
function get_sum(array $arr2, $n) {
    $sum = 0;
    for ($i = 3; $i <= $n; $i++) {
        $sum = $sum + $arr2[$i];
    }
return $sum;
}
$arr2 = [1, 2, 3, 7, 31, 4, 1, 8, 6]; $n = 5;
 echo get_sum($arr, $n);


$firstArr = ['one' => 1, 'two' => 3, 'three' => 3, 'foure' => 5, 'five' => 12];
$secondArr = ['one' => 1, 'seven' => 22, 'three' => 32, 'foure' => 5, 'five' => 13, 'six' => 37,];
//найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
var_dump(array_diff_key($secondArr, $firstArr));
//найти все элементы которые присутствую в первом и отсутствуют во втором
var_dump(array_diff_key($firstArr, $secondArr));
//найти все элементы значения которых совпадают
$result = array_intersect($firstArr,$secondArr);
echo '<pre>';
print_r($result);
echo '</pre>';
//найти все элементы значения которых отличается
$result2 = array_diff($firstArr,$secondArr);
echo '<pre>';
print_r($result2);
echo '</pre>';

//получить сумму всех значений в массиве
function array_multisum(array $arr): float {
    $sum = array_sum($arr);
    foreach($arr as $child) {
        $sum += is_array($child) ? array_multisum($child) : 0;
    }
    return $sum;
}
$firstArr1 = ['one' => 1, 'two' => ['one' => 1, 'seven' => 22, 'three' => 32,], 'three' => ['one' => 1, 'two' => 2,], 'foure' => 5, 'five' => ['three' => 32, 'foure' => 5, 'five' => 12,],];
echo array_multisum($firstArr1);
//получить общее количество элементов в массиве
echo count($firstArr1,COUNT_RECURSIVE);

//получить все вторые элементы вложенных массивов
foreach($firstArr1 as $key => $massiv){
    foreach($massiv  as  $inner_key => $value)
    {
        echo "[$firstArr1][$inner_key] = $value";
    }
}
]
?>