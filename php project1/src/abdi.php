<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    

<?php
function binary_to_decimal($binary_str) {
    $decimal = 0;
    $binary_str = strrev($binary_str);
    for ($i = 0; $i < strlen($binary_str); $i++) {
        $decimal += $binary_str[$i] * pow(2, $i);
    }
    return $decimal;
}

function decimal_to_octal($decimal) {
    $octal = "";
    while ($decimal > 0) {
        $octal = ($decimal % 8) . $octal;
        $decimal = intdiv($decimal, 8);
    }
    return $octal;
}

function decimal_to_hexadecimal($decimal) {
    $hex_digits = "0123456789ABCDEF";
    $hexadecimal = "";
    while ($decimal > 0) {
        $hexadecimal = $hex_digits[$decimal % 16] . $hexadecimal;
        $decimal = intdiv($decimal, 16);
    }
    return $hexadecimal;
}

$binary_str = "1011";  // Example binary number
$decimal = binary_to_decimal($binary_str);
$octal = decimal_to_octal($decimal);
$hexadecimal = decimal_to_hexadecimal($decimal);

echo "<span style='font-size: 24px;'>Binary: $binary_str\n <br></span>";
echo "Decimal: $decimal\n <br>";
echo "Octal: $octal\n<br>";
echo "Hexadecimal: $hexadecimal\n<br>";

?>
<?php
$array = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];

// Print all elements
echo "<font size='5'>Array elements: \n</font>";
foreach($array as $value) {
    echo $value . " ";
}
echo "\n";

// Calculate and print total of odd elements
$odd_sum = 0;
$even_sum = 0;
$total_sum = 0;
$min = PHP_INT_MAX;
$max = PHP_INT_MIN;
$min_positions = [];
$max_positions = [];

foreach($array as $key => $value) {
    if ($value % 2 != 0) {
        $odd_sum += $value;
    } else {
        $even_sum += $value;
    }
    $total_sum += $value;
    
    // Minimum element
    if ($value < $min) {
        $min = $value;
        $min_positions = [$key];
    } elseif ($value == $min) {
        $min_positions[] = $key;
    }
    
    // Maximum element
    if ($value > $max) {
        $max = $value;
        $max_positions = [$key];
    } elseif ($value == $max) {
        $max_positions[] = $key;
    }
}

echo "<span style='font-size: 23px;'> <br>Total of odd elements: $odd_sum\n  </span><br>";
echo "Total of even elements: $even_sum\n <br>";
echo "Total of all elements: $total_sum\n <br>";
echo "Minimum element: $min, Positions: " . implode(", ", $min_positions) . "\n <br>";
echo "Maximum element: $max, Positions: " . implode(", ", $max_positions) . "\n <br>";
?>
</body>
</html>