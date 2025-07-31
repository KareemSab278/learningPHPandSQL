<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>calculate the circumference of a circle ahh</h1>

<body>
    <form action="index.php" method="get">
        <input type="text" name="radius" placeholder="radius">
        <input type="submit">
    </form>
</body>

</html>

<?php
$circumference = null;

$radius = $_GET["radius"];

$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 1);
$area = pi() * pow($radius, 2);
$area = round($area, 1);
echo "circumference: {$circumference} <br>";
echo "area: {$area}";
?>