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
    <form action="index.php" method="get">
        <input type="text" name="number" placeholder="type a num">
        <input type="submit">
    </form><br>

    foreach($variableName as $key => $value){<br>
    echo "{$key} : {$value}";<br>
    } <br><br>

</body>

</html>


<?php
//lets try a fizz buzz ltr lol ( divisible by 3 is fizz divisible by 5 is buzz divisible by 3 and 5 is fizzbuzz)

// need to write a function

// write a loop

// write conditions and outputs
$num = $_GET["number"];

// echo "{$num}";
for ($i = 0; $i < $num; $i++) {
    if ($num % 3) {
        echo "fizz<br>";
    } elseif ($num % 5) {
        echo "buzz<br>";
    };
    $num--;
}

$i = 1;
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


$anArray = [1, 2, 3, 4, 5];

foreach ($anArray as $arr) {
    echo $arr;
}

switch ($num) {
    case 2:
        echo "that was number 2<br>";
        break;

    default:
        echo "not number 2<br>";
        break;
}


// associative arr is basically an arr of key val pairs lol
$user = [
    "name" => "Alice",
    "age" => 25,
    "email" => "alice@example.com"
];

foreach ($user as $key => $value) {
    echo "$key: $value<br>";
}

?>

<?php
include("footer.html")
?>