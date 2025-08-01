<?php
include("header.html");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>

<?php
function happy_borsdae() // func 1
{
    echo "happy borsdae lol";
};

happy_borsdae();

function fizzbuzz($num) // func 2
{
    $i = 0;
    while ($i <= $num) {
        if ($i % 15 == 0) {
            echo "fizzbuzz<br>";
        } elseif ($i % 5 == 0) {
            echo "fizz<br>";
        } elseif ($i % 3 == 0) {
            echo "buzz<br>";
        }
        $i++;
    }
}

fizzbuzz(17)
?>
<?php
include("footer.html")
?>