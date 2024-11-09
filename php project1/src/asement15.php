<?php

echo "<h2>Abdihakim ibrahim isse                           ID: C12106937</h2>";

function createMagicSquare() {
    // Correct 3x3 magic square arrangement
    $magicSquare = [
        [8, 1, 6],
        [3, 5, 7],
        [4, 9, 2]
    ];

    // Create the full 5x5 table with magic constant border
    $magicConstant = 15;
    $fullSquare = [
        [15, 15, 15, 15, 15],
        [15, $magicSquare[0][0], $magicSquare[0][1], $magicSquare[0][2], 15],
        [15, $magicSquare[1][0], $magicSquare[1][1], $magicSquare[1][2], 15],
        [15, $magicSquare[2][0], $magicSquare[2][1], $magicSquare[2][2], 15],
        [15, 15, 15, 15, 15]
    ];

    // Display the magic square as an HTML table
    echo "<h3>Magic Square (Magic Constant = $magicConstant):</h3>";
    echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";
    foreach ($fullSquare as $row) {
        echo "<tr>";
        foreach ($row as $num) {
            $cellStyle = ($num != 15) ? "background-color: lightgrey;" : "";
            echo "<td style='padding: 10px; $cellStyle'>$num</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

// Call function to create the magic square
createMagicSquare();