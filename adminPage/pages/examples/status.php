<?php
include "../../../functions/init.php";

$id = $_POST['ID'];
$status = $_POST['status'];




$query1 = "UPDATE `finalorder` SET `status`='$status' WHERE orderinfoId=$id";
echo $query1;
mysqli_query($conn, $query1);

header('Location: ../kanban.php');
?>