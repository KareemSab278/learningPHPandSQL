<?php
include("header.html");
include('database.php');

// $sql = "INSERT INTO users(username, password) VALUES ('fakeusername', 'fakepassword')";

// if (!mysqli_query($connectionVariable, $sql)) {
//     die("Query failed: " . mysqli_error($connectionVariable));
// }


//underlined error is fine because it works anyway (just a vs code thing)



function findUser($user) // wrote a func to find users without running sqeal all the time
{
    global $connectionVariable; // apparently in php functions dont get vars declared OUTSIDE its scope like js... tf burh whyyyyyy?
    $sql = "SELECT * FROM users WHERE username = '$user'";
    return mysqli_query($connectionVariable, $sql);
}

$foundKareem = mysqli_fetch_assoc(findUser('kareem'));
$foundFake = mysqli_fetch_assoc(findUser('fakeusername'));
if ($foundFake) {
    echo $foundFake['id'] . '<br>';
    echo $foundFake['username'] . '<br><br>';
} else {
    echo "couldn't find user";
}

function getAllUsers()
{
    global $connectionVariable;
    $sqlQuery = mysqli_query($connectionVariable, "SELECT * FROM users");

    if ($sqlQuery) {
        while ($row = mysqli_fetch_assoc($sqlQuery)) { // this is the standard way of loopign through a table in php.
            echo $row['id'] . '<br>';
            echo $row['username'] . '<br>';
            echo $row['reg_date'] . '<br><br>';
        }
    }
}
getAllUsers();

mysqli_close($connectionVariable);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
</head>

<body>
    <h1>Homepage</h1>

</body>

</html>
<?php
include("footer.html");
setcookie("name", "kareem", time() + 86400, "/");


?>