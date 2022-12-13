<?php

include 'vendor/autoload.php';
use Core\foo;
use Core\bar_1;
use Core\bar_2;
use Core\bar_1_1;
use Core\bar_1_2;
use Core\bar_2_1;
use Core\bar_2_2;
use Core\bar_3;


$a = new bar_1();
$a->setTest(2);
var_dump($a->getTest());

$nbar_1 = new bar_1();
var_dump($nbar_1->getC());

echo $nbar_1->sumfb1();

$nbar_1_1 = new bar_1_1();
echo "<br>";
echo $nbar_1_1->sumBb11();

$nbar_1_2 = new bar_1_2();
echo "<br>";
echo $nbar_1_2->sumBb12();

$nbar_2_1 = new bar_2_1();
echo "<br>";
var_dump($nbar_2_1->sumBb21());
?>

