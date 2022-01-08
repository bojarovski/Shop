<?php
include "functions/init.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['confirmPassword'];

$query = "select ID from users where username='$username'";
$query1 = "select ID from users where email='$email'";

$result = mysqli_query($conn, $query);
$result1 = mysqli_query($conn, $query1);

$nr=mysqli_num_rows($result);
$nr1=mysqli_num_rows($result1);
echo $nr."</br>";
echo $nr1."</br>";
echo "<br/>";
if ($password == $cpassword && strlen($password) >= 8) {
    $epassword = md5($password);
    if (strlen($username) < 9 || $nr > 0) {
        echo strlen($username);
        echo "<h2>Username must be longer then 8 characters or this username is already exist</h2>";
    } else {
        if ($nr1>0) {
            echo "<h2>Email is already exist</h2>";
        } else {
            $date=date("Y-m-d");
            echo $date;
            $query = "INSERT INTO `users`(`ID`, `username`, `password`, `email`, `date`) VALUES (null,'$username','$epassword','$email','$date')";
            echo "uspesno full";
            echo isset($result);
            mysqli_query($conn, $query);
        }
    }

} else {
    echo "<h2>Password must be longer then 8 characters or password doesnt match</h2>";
}

?>