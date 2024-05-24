<?php
$username = "Joyjeet Mukherjee";
$phone = "123-456-7890";


// $username = strtolower($username);

// str_pas(variable name, max length, string you want to keep variable increasing with)
// $username = str_pad($username, 30,"0");

$phone = str_replace("-", "", $phone);


echo "$username<br>";
echo $phone;