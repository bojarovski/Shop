<?php
include "../../../functions/init.php";

$bid = $_POST['bid'];
$bname = $_POST['bname'];




$query1 = "INSERT INTO `brand`(`BrandId`, `brandName`) VALUES ('$bid','$bname')";






mysqli_query($conn, $query1);

header('Location: add.php');
?>