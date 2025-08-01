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
    <form action="index.php" method="post"> <!-- action should be the file name and the method should be declared recommended: post-->
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="exampleInputEmail1" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="exampleInputPassword1" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>

<?php
// echo $_GET["exampleInputEmail1"]; // this is technically an array and we need to get the username
// echo "<br>";
// echo $_GET["exampleInputPassword1"];
// this data unfortunately is appended to the url tho so it isnt safe.
// get is useful for bookarking with vals, and is better for search pages

// if you change it to post however the info isnt in the url:

echo $_POST["exampleInputEmail1"]; // this is technically an array and we need to get the username
echo "<br>";
echo $_POST["exampleInputPassword1"]; // info in url now hidden
// post is good for submitting sensitive info
?>
<?php
include("footer.html")
?>