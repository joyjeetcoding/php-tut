<?php
    include("database.php");
    $user = "Patrick";
    $password = "rock3";
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "insert into users (user, password) values ('$user', '$hash')";


    try{
        if(mysqli_query($conn, $sql)){
            echo "User is now registered";
        } else {
            throw new Exception("Could not register the user");
        }
    }
    catch(Exception $e){
        echo"". $e->getMessage();
    }

    mysqli_close($conn);