<?php

$host="localhost";
$user="root";
$pass="";
$db="shop";

$conn=mysqli_connect($host,$user,$pass,$db);

if(!$conn)
{
    echo "Error connecting with MySQL serever";
}

?>