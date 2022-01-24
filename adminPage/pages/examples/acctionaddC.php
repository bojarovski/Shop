<?php
include "../../../functions/init.php";

$cid = $_POST['cid'];
$cname = $_POST['cname'];




$query1 = "INSERT INTO `category`(`CategoryId`, `categoryName`) VALUES  ('$cid','$cname')";

mysqli_query($conn, $query1);

header('Location: add.php');
?>