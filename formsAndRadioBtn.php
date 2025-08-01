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
<h1>radio buttons</h1>

<body>
    <form action="index.php" method="post">
        <input type="radio" name="credit_card" value="visa">
        Visa<br>
        <input type="radio" name="credit_card" value="mastercard"> <!-- all must be the same name if only 1 can be selected otherwise use diff names -->
        MasterCard<br>
        <input type="radio" name="credit_card" value="ax">
        American Express<br>
        <input type="submit" name="confirm" value="confirm">
    </form>

    <!-- a checkboxes form with multi-select -->
    <form action="index.php" method="post">
        <input type="checkbox" name="food[]" value="pizza">pizza<br>
        <input type="checkbox" name="food[]" value="burger">burger<br>
        <!-- adding the array brackets next to the name means it is multi select -->
        <input type="checkbox" name="food[]" value="taco">taco<br>
        <input type="checkbox" name="food[]" value="hotdog">hotdog<br>
        <input type="submit" name="submit">
    </form>
</body>

</html>

<?php
// ============================ isset() and empty()
// $credit_card = $_POST["credit_card"]; // dont need to assign to take more storage (im nitty about this stuff)

if (empty($_POST["credit_card"])) {
    echo "select a credit card";
}
echo $_POST["credit_card"];


// ============================ working with checkboxes in php

if (isset($_POST["submit"]) && isset($_POST["food"])) {
    echo implode(", ", $_POST["food"]);
};

?>
<?php
include("footer.html")
?>