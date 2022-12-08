<?php
//// посчитать длину массива
//$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
//var_dump(count($arr));
////переместить первые 4 элемента массива в конец массива
//list($arr[0], $arr[5],) = array($arr[5], $arr[0]);
//list($arr[1], $arr[6],) = array($arr[6], $arr[1]);
//list($arr[2], $arr[7],) = array($arr[7], $arr[2]);
//list($arr[3], $arr[8],) = array($arr[8], $arr[3]);
//echo '<pre>';
//print_r($arr);
//echo '</pre>';
//
////получить сумму 4,5,6 элемента
//function get_sum(array $arr2, $n) {
//    $sum = 0;
//    for ($i = 3; $i <= $n; $i++) {
//        $sum = $sum + $arr2[$i];
//    }
//return $sum;
//}
//$arr2 = [1, 2, 3, 7, 31, 4, 1, 8, 6]; $n = 5;
// echo get_sum($arr, $n);
//
//
//$firstArr = ['one' => 1, 'two' => 3, 'three' => 3, 'foure' => 5, 'five' => 12];
//$secondArr = ['one' => 1, 'seven' => 22, 'three' => 32, 'foure' => 5, 'five' => 13, 'six' => 37,];
////найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
//var_dump(array_diff_key($secondArr, $firstArr));
////найти все элементы которые присутствую в первом и отсутствуют во втором
//var_dump(array_diff_key($firstArr, $secondArr));
////найти все элементы значения которых совпадают
//$result = array_intersect($firstArr,$secondArr);
//echo '<pre>';
//print_r($result);
//echo '</pre>';
////найти все элементы значения которых отличается
//$result2 = array_diff($firstArr,$secondArr);
//echo '<pre>';
//print_r($result2);
//echo '</pre>';
//
////получить сумму всех значений в массиве
//function array_multisum(array $arr): float {
//    $sum = array_sum($arr);
//    foreach($arr as $child) {
//        $sum += is_array($child) ? array_multisum($child) : 0;
//    }
//    return $sum;
//}
//$firstArr1 = ['one' => 1, 'two' => ['one' => 1, 'seven' => 22, 'three' => 32,], 'three' => ['one' => 1, 'two' => 2,], 'foure' => 5, 'five' => ['three' => 32, 'foure' => 5, 'five' => 12,],];
//echo array_multisum($firstArr1);
////получить общее количество элементов в массиве
//echo count($firstArr1,COUNT_RECURSIVE);
//
////получить все вторые элементы вложенных массивов
//
////
////?>
<!--Написать HTML форму. Поля должны быть различных типов которые мы разбирали на уроке, но тематика должна быть иная.-->
<!--вывести введенные поля в файле server.php.-->
<!--<html lang="engl">-->
<!--<body>-->
<!--<form action="server.php" method="POST">-->
<!--      <div>-->
<!--        <label>Name and Surname</label>-->
<!--        <input type="text" name="full_name">-->
<!--      </div>-->
<!--    <label> Phone number</label>-->
<!--    <input type="number" name="phone_number"><br>-->
<!--    <label>Email</label>-->
<!--    <input type="email" name="email"><br>-->
<!--    <label>Feedback from call or email</label>-->
<!--    <input type="radio" name="feedback" value="By Call">-->
<!--    <input type="radio" name="feedback" value="By mail"> <br>-->
<!--    <input type="submit" value="Send">-->
<!--</form>-->
<!---->
<?php
//// Написать простой массив список (на 5-10 элементов),  сформировать с него ненумерованный список.
//$arr = [1, 2, 3, 4, 5, 8, 7]; ?>
<!--<ul>-->
<!--    --><?php
//        foreach ($arr as $value) {
//            echo '<li>' . $value . '</li>';
//        }
//    ?>
<!--</ul>-->
<!--</body>-->
<?php
////Делить фразу по проблема
////искать конкретное слово переданное ей в массиве
//function explode_string(string $string): array
//{
//    return explode(' ', $string);
//}
//$test = 'I want to eat meet';
//echo "<pre>";
//var_dump(explode_string($test));
//echo "</pre>";
//
//function finder(array $haystack, string $needle): bool
//{
//    return in_array($needle, $haystack);
//}
//$finder = explode_string($test);
//var_dump(finder(explode_string($test), 'want'));
//Создать функцию принимающую массив произвольной вложенности и определяющий любой элемент номер которого передан параметром во всех вложенных массивах.
function getElement1(array $data1, array $keys)
{
    foreach($keys as $key) {
        if (is_array($data1) && array_key_exists($key, $data1)) {
            $data = $data1[$key];
        } else {
            return null;
        }
    }
    return $data;
}
$get_elem_free = array (1, 2, 3, 4,);
echo getElement1($get_elem_free, [1]);

//Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false

function finder_b(string $haystack_1): bool
{
    return strpos($haystack_1, 'b');
}
$elem_b = "Man with big bag";
echo finder_b($elem_b);

//Создать функцию которая считает сумму значений всех элементов массива произвольной глубины
function array_multisum(array $arr): float
{
    $sum = array_sum($arr);
    foreach ($arr as $elem) {
        $sum += is_array($elem) ? array_multisum($elem) : 0;
    }
    return $sum;
}
$data = array (array (1, 2, 3), array (10, 20, 30));
echo array_multisum($data);

//Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float

$l = $x * $a; // сторона большего квадрата
$l1 = $x; // сторона меньшего квадрата
$n = $s1 / $s2; // количество меньших квадратов
?>

