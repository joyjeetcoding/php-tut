<?php
// Cookie = Information about a user stored in a user's web-browser targeted advertisements, brosing preferences and other non sensitive data

// (key, value, expression time here for 1 day 86400 scs and if we want for 2 days we have multiplied it by 2, file path)
// setcookie("fav_food", "pizza", time() - 0, "/");
// To delte the cookies we are just subtracting with 0
setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
