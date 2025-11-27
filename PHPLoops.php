<!-- Tanhueco, Jean Kyle S. -->
<!-- WD-201 --> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops in PHP</title>
</head>
<body>

<?php
// Function: While Loop, Topic: Countdown
echo "<h3>Countdown (While Loop)</h3>";
$number = 5;

while ($number >= 1) {
    echo $number . "<br>";
    $number--;
}

echo "<br>"; 

// Function: For Loop, Topic: Multiplication table
echo "<h3>Multiplication Table of 5 (For Loop)</h3>";

for ($i = 1; $i <= 10; $i++) {
    echo "5 x $i = " . (5 * $i) . "<br>";
}
?>

</body>
</html>