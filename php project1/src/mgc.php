<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic_Square_Assignmet</title>
</head>
<body>

<?php

$numbers = range(1, 9);


if (count($numbers) != 9) {
    die("Array must contain exactly 9 consecutive numbers.");
}


$magicConstant = array_sum($numbers) / 3;
$median = $numbers[intval(count($numbers) / 2)];


$magicSquare = [

    [0, 0, 0],
    [0, 0, 0],
    [0, 0, 0]
    
];


$magicSquare[1][1] = $median;


$magicSquare[0][0] = $median + 1;
$magicSquare[0][2] = $median + 3;
$magicSquare[2][0] = $median - 3;
$magicSquare[2][2] = $median - 1;


$magicSquare[0][1] = $magicConstant - ($magicSquare[0][0] + $magicSquare[0][2]);
$magicSquare[1][0] = $magicConstant - ($magicSquare[0][0] + $magicSquare[2][0]);
$magicSquare[1][2] = $magicConstant - ($magicSquare[0][2] + $magicSquare[2][2]);
$magicSquare[2][1] = $magicConstant - ($magicSquare[2][0] + $magicSquare[2][2]);


echo "<table border='1'>";
foreach ($magicSquare as $row) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td style='padding:10px; text-align:center;'>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";


echo "<p>Magic Constant: $magicConstant</p>";
echo "<p>Median: $median</p>";
?>

    
</body>
</html>