<?php

// session = Super Global Variable to store informations on a user to be used across multiple pages. A user is assigned a session-id. e.g. login credentials

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="session.php" method="post">
        username: <br>
        <input type="text" name="username"><br>
        password: <br>
        <input type="password" name="password"> <br>
        <input type="submit" name="login" value="Login">
    </form>
</body>

</html>

<?php
if (isset($_POST["login"])) {
    if (!empty($_POST["username"]) && (!empty($_POST["password"]))) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        echo $_SESSION["username"] . "<br>";
        echo $_SESSION["password"] . "<br>";

        header("Location: home.php");
    }
    else {
        echo "Missing username/password <br>";
    }
}
?>