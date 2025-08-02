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
<form action="cookies.php" method="post">
    <input type="text" name="name" placeholder="input name">
    <input type="button" value="onsubmit">
</form>

<body>

</body>

</html>

<?php



setcookie("name", "kareem", time() + 86400, "/");
// to del a cookie replace the time with time() -0
// this is how you set up a cookie that lasts 1 day from time()

foreach ($_COOKIE as $key => $value) {
    echo "{$key} : {$value} <br>";
}

function getcookie($name, $value, $time)
{
    setcookie($name, $value, time() + $time);
};
?>
<?php
include("footer.html")
?>

<!-- cookies are just info about a user stored in a web browser -->