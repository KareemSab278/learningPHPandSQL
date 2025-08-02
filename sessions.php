<?php
include("header.html");
session_start(); // add this line to start a session on the page!!! to use it elsewhere just copy paste session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Login Page</h1>

<body>
    sessions are a super global var used to store info on user to be used accross many pages (like login creds)
    <a href="sessionRedirect.php">This is the page you're redirected to after log out</a>
    <form action="sessions.php" method="post">
        <input type="text" name='username' placeholder="username?">
        <input type="password" name="password" placeholder="password?">
        <input type="submit" name="login" value="login">
    </form>

</body>

</html>
<?php
// create a name:value pair in session
if (isset($_POST['login'])) {
    $_SESSION['username'] = $_POST['username']; // session username is kareem
    $_SESSION['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT); // same here but password
    echo $_SESSION['username'];
    echo $_SESSION['password'];
    header('location: sessionRedirect.php');
} else {
    echo 'you are not signed in. please sign in';
}

include("footer.html");
?>