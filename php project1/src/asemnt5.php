<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assigment 2</title>
</head>
<body>
<?php
echo "<h1>QUEATION TWO </h1>";
function primeFactors($number) {
    $factors = [];
    
    // Start with the smallest prime factor
    $factor = 2;

    while ($number > 1) {
        // If the number is divisible by the factor
        if ($number % $factor == 0) {
            $factors[] = $factor; // Add the factor to the list
            $number /= $factor; // Divide the number by the factor
        } else {
            // Move to the next possible factor
            $factor++;
        }
    }
    return $factors;
}

// Example usage
$number = 42; // Change this number to test with different values
$factors = primeFactors($number);

echo "The prime factors of $number are: " . implode(", ", $factors);
?>

    
</body>
</html>