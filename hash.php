<?php
$plain_password = "Blue1020";  
$hashed_password = password_hash($plain_password, PASSWORD_DEFAULT);

echo $hashed_password;  // Copy the hashed password from the output
?>