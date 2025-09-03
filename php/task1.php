////////////////////////////////////////////////////// 01 /////////////////////////////////////////////////////////////////

<?php
$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Area of Rectangle = $area <br>";
echo "Perimeter of Rectangle = $perimeter";
?>

////////////////////////////////////////////////////// 02 /////////////////////////////////////////////////////////////////

<?php
$amount = 1000;
$vat = $amount * 0.15;
$total = $amount + $vat;

echo "Amount = $amount <br>";
echo "VAT (15%) = $vat <br>";
echo "Total with VAT = $total";
?>

////////////////////////////////////////////////////// 03 /////////////////////////////////////////////////////////////////

<?php
$number = 15;

if ($number % 2 == 0) {
    echo "$number is Even";
} else {
    echo "$number is Odd";
}
?>


////////////////////////////////////////////////////// 04 /////////////////////////////////////////////////////////////////


<?php
$a = 20;
$b = 35;
$c = 15;

if ($a >= $b && $a >= $c) {
    echo "Largest number is $a";
} elseif ($b >= $a && $b >= $c) {
    echo "Largest number is $b";
} else {
    echo "Largest number is $c";
}
?>

////////////////////////////////////////////////////// 05 /////////////////////////////////////////////////////////////////

<?php
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
?>

////////////////////////////////////////////////////// 06 /////////////////////////////////////////////////////////////////

<?php
$numbers = array(10, 20, 30, 40, 50);
$search = 30;
$found = false;

foreach ($numbers as $num) {
    if ($num == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "$search found in array.";
} else {
    echo "$search not found in array.";
}
?>

////////////////////////////////////////////////////// 07 /////////////////////////////////////////////////////////////////

<?php

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";

$count = 1;
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $count . " ";
        $count++;
    }
    echo "<br>";
}

echo "<br>";


$ch = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $ch . " ";
        $ch++;
    }
    echo "<br>";
}
?>