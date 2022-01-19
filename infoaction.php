<?php
include "functions/init.php";

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$country = $_POST['country'];
$ad1=$_POST['add1'];
$ad2=$_POST['add2'];
$city=$_POST['city'];
$zip=$_POST['zip'];


$query = "select * from users where username='$username' and password='$epassword'";

$result = mysqli_query($conn, $query);

$nr = mysqli_num_rows($result);

if ($nr == 1) {
    echo "You have been logged in";
    $_SESSION['user'] = $username;
    //$_SESSION['role'] = '1';
    header("refresh:2;url=index.php");
    echo "<h1>MARIO</h1>";
} else {
    echo "Go away. Wrong password or username  ";

    echo session_id();
    header("url=login.php");
}