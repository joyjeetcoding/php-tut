<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="sanitize.php" method="post">
        username: <br>
        <input type="text" name="username"> <br>
        age:
        <input type="text" name="age"> <br>
        <input type="submit" name="login" value="login"><br>
    </form>
</body>

</html>


<?php
if (isset($_POST["login"])) {
    // $username= filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

    if(empty($age)) {
        echo "That number wasn't valid";
    }
    else {
        echo "You are $age years old";
    }
}
