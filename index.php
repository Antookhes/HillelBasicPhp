<?php

include "foo.php";
include "bar_1.php";
include "bar_2.php";
include "bar_3.php";
include "bar_1_1.php";
include "bar_1_2.php";
include "bar_2_1.php";
include "bar_2_2.php";
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

