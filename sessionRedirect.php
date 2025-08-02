<?php
session_start();
?>

<!-- you should be redirected here from sessions.php on login -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    You were redirected here,
    <form action="sessionRedirect.php" name='logout' method="post">do you want to logout?
        <input type="submit" name='logout' value="logout">
    </form>
</body>

</html>

<?php
// you can see info from sessions to here
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    echo $_SESSION['username'] . '<br>';
    echo $_SESSION['password'];
}
if (isset($_POST['logout'])) {
    session_destroy();
    header('location: sessions.php');
}
?>