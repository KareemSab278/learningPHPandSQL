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

<body style="background-color: grey;">
    <form action="index.php" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="text" name="age" placeholder="age">
        <input type="submit" name="login" value="login">
    </form>

</body>

</html>

<?php
if (isset($_POST["login"]) && isset($_POST["username"]) && isset($_POST["age"])) {
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    echo "{$username}<br>";
    echo $age;
}
?>
<?php
include("footer.html")
?>