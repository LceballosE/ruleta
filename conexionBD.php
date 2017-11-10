<?php
$con = mysqli_connect("localhost","root","pablo","ruleta");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

session_start();
?>