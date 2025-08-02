<!-- anything to do with handling db should be here only -->

<?php
// include('header.html');

$db_server = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'businessdb';
$connectionVariable = '';

try {
    $connectionVariable = mysqli_connect($db_server, $db_user, $db_pass, $db_name); // connectionVariable becomes an object
} catch (mysqli_sql_exception) {
    echo 'failed to connect';
}

if ($connectionVariable) {
    echo 'connected' . '<br>';
}
// include("footer.html");
?>