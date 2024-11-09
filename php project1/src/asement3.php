<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assigment 5</title>
</head>
<body>
<?php
  echo"<h1>Question FIVE</h1>";
function isPrime($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

echo "Prime numbers from 10 to 50 using for loop:\n";
for ($num = 10; $num <= 50; $num++) {
    if (isPrime($num)) {
        echo $num . " ";
    }
}
echo "<br>";
echo "\nPrime numbers from 10 to 50 using do...while loop:\n";


$num = 10;
do {
    if (isPrime($num)) {
        echo $num . " ";
    }
    $num++;
} while ($num <= 50);
?>
</body>
</html>