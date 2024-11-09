<?php

$countries = array(
    'somalia' => 'mogadhisho',
    'somaliland' => 'hargeyza',
    'ethopia' => 'adisababa',
    'usa' => 'washigton dc',
    'southkora' => 'beijing',
    'india' => 'new delhi'
);

/**
 * Function to find capital by country name
 * @param string $countryName
 * @return string|null
 */
function findCapital($countryName) {
    global $countries;
    $countryName = strtolower($countryName); 
    
    if(array_key_exists($countryName, $countries)) {
        return ucfirst($countries[$countryName]); 
    }
    return "Country not found";
}

echo "Capital of France is: " . findCapital('france') . "\n </br>";



echo "Countries and their Capitals\n </br> ";


foreach($countries as $country => $capital) {
    echo "</br> ";
    echo "Country: " . ucfirst($country) . "\n </br> ";
    
    echo "Capital: " . ucfirst($capital) . "\n </br> ";
    echo "</br> ";
}

// Adding array sum functionality
// Creating an array of numbers
$numbers = array(10, 20, 30, 40, 50, 60, 70);

/**
 * Function to calculate sum of array elements
 * @param array $arr
 * @return int|float
 */
function calculateSum($arr) {
    $sum = 0;
    foreach($arr as $number) {
        $sum += $number;
    }
    return $sum;
}


echo "Array Sum Calculation\n </br> ";



echo "Array elements: ";
echo implode(", ", $numbers);
echo "\n\n";

$result = calculateSum($numbers);
echo "Sum of all elements: " . $result . "\n";


$studentTranscript = [
    [
        "Semester" => "Semester 1",
        "Course" => "Python",
        "CW1" => 10,
        "Midterm" => 25,
        "CW2" => 10,
        "Final" => 40
    ],
    [
        "Semester" => "Semester 1",
        "Course" => "JavaScript",
        "CW1" => 9,
        "Midterm" => 25,
        "CW2" => 10,
        "Final" => 40
    ],
    [
        "Semester" => "Semester 1",
        "Course" => "Oracle",
        "CW1" => 9,
        "Midterm" => 15,
        "CW2" => 10,
        "Final" => 20
    ],
    [
        "Semester" => "Semester 2",
        "Course" => "Networking",
        "CW1" => 4,
        "Midterm" => 15,
        "CW2" => 6,
        "Final" => 15
    ],
    [
        "Semester" => "Semester 2",
        "Course" => "Flutter",
        "CW1" => 9,
        "Midterm" => 25,
        "CW2" => 10,
        "Final" => 40
    ],
    [
        "Semester" => "Semester 2",
        "Course" => "PHP",
        "CW1" => 9,
        "Midterm" => 25,
        "CW2" => 10,
        "Final" => 40
    ]
];

foreach ($studentTranscript as &$record) {
    $record["Total"] = $record["CW1"] + $record["Midterm"] + $record["CW2"] + $record["Final"];
    $record["Status"] = $record["Total"] >= 50 ? "Pass" : "Fail";
}

echo "<table border='1' cellspacing='0' cellpadding='10'>";
echo "<tr style='font-weight:bold; background-color:black; color:white;'>
        <td>Semester</td><td>Course</td><td>CW1</td><td>Midterm</td><td>CW2</td><td>Final</td><td>Total</td><td>Status</td>
      </tr>";

$semesterCount = ["Semester 1" => 3, "Semester 2" => 3];
$displayedSemester = [];

foreach ($studentTranscript as $record) {
    $rowBgColor = "white"; 
    if ($record["Total"] < 50) {
        $rowBgColor = "red";
    } elseif ($record["Course"] == "Networking") {
        $rowBgColor = "red";
    }
    elseif ($record["Total"] == 50) {
        $rowBgColor = "red";
    } elseif ($record["Course"] == "Oracle") {
        $rowBgColor = "yellow";
    }
    

    $totalBgColor = "";
    if ($record["Total"] < 50) {
        $totalBgColor = "background-color: red;";
    } elseif ($record["Total"] >= 50 && $record["Total"] <= 60) {
        $totalBgColor = "background-color: yellow;";
    }

    echo "<tr style='background-color:$rowBgColor;'>";

    if (!in_array($record["Semester"], $displayedSemester)) {
        echo "<td rowspan='{$semesterCount[$record["Semester"]]}' style='background-color:black; color:white;'>{$record["Semester"]}</td>";
        $displayedSemester[] = $record["Semester"];
    }

    echo "<td>{$record["Course"]}</td>
          <td>{$record["CW1"]}</td>
          <td>{$record["Midterm"]}</td>
          <td>{$record["CW2"]}</td>
          <td>{$record["Final"]}</td>
          <td>{$record["Total"]}</td>
          <td>{$record["Status"]}</td>
          </tr>";
}
echo "</table>";


?>