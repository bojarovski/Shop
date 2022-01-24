<?php
include "../../../functions/init.php";

$SneakersId = $_POST['SneakersId'];
$Name = $_POST['Name'];
$Price = $_POST['Price'];
$Description = $_POST['Description'];
$Quantity = $_POST['Quantity'];
$Photo = $_POST['Photo'];
$Photo1 = $_POST['Photo1'];
$Photo2 = $_POST['Photo2'];
$BrandId = $_POST['BrandId'];
$CategoryId = $_POST['CategoryId'];


$query1 = "INSERT INTO `sneakers`(`SneakersId`, `Name`, `Price`, `Description`, `Quantity`, `Photo`, `Photo2`, `Photo3`, `CategoryId`, `BrandId`)
VALUES ('$SneakersId','$Name','$Price','$Description','$Quantity','$Photo','$Photo1','$Photo2','$CategoryId','$BrandId')";

mysqli_query($conn, $query1);


header('Location: add.php');
?>