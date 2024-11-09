<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assigment 5</title>
</head>
<body>

<?php
echo"<h1>QUEATION FOUR</h1>";
function fibonacciSeries($n) {
    $fibonacci = [];
    
    // First two Fibonacci numbers
    $a = 0;
    $b = 1;

    // Generate Fibonacci series
    $count = 0;
    while ($count < $n) {
        $fibonacci[] = $a; // Add the current number to the series
        $next = $a + $b; // Calculate the next number
        $a = $b; // Update a to the next number
        $b = $next; // Update b to the next number
        $count++; // Increment the count
    }

    return $fibonacci;
}

// Example usage
$n = 10; // Number of Fibonacci numbers to generate
$fibSeries = fibonacciSeries($n);

echo "Fibonacci series up to $n terms: " . implode(", ", $fibSeries);
?>

    
</body>
</html>