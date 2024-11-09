<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Abdihakim ibrahim isse  C1210693</h1>
1) Lowest Common Multiplier (LCM)

<?php
function calculateLCM($a = 12, $b = 18) {
    $max = max($a, $b);
    while (true) {
        if ($max % $a == 0 && $max % $b == 0) {
            return $max;
        }
        $max++;
    }
}

echo "LCM of 12 and 18: " . calculateLCM() . "\n";
?>
<br>
<br>
<br>

2) Highest Common Factor (HCF)

<?php
function calculateHCF($a = 18, $b = 24) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

echo "HCF of 18 and 24: " . calculateHCF() . "\n";
?>
<br>
<br>
<br>


3) Prime Numbers in a Range

<?php
function printPrimeNumbers($start = 15, $end = 82) {
    for ($num = $start; $num <= $end; $num++) {
        $isPrime = true;
        if ($num < 2) {
            $isPrime = false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) {
            echo $num . " ";
        }
    }
    echo "\n";
}

printPrimeNumbers();
?>
<br>
<br>
<br>
<br>
<br>
<br>



4) Convert Decimal to Any Base

<?php
function convertToBase($number = 14010, $base = 8) {
    return base_convert($number, 10, $base);
}

echo "14010 in octal: " . convertToBase() . "\n";
?>
<br>
<br>
<br>
<br>
5) Process Array Elements

<?php
function processArray($arr) {
    $total = 0;
    echo "Array elements: ";
    foreach ($arr as $element) {
        echo $element . " ";
        $total += $element;
    }
    echo "\nTotal of elements: " . $total . "\n";
}

$array = [5, 10, 15, 20, 25];
processArray($array);
?>

    
</body>
</html>