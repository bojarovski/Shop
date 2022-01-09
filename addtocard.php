<?php
include "functions/init.php";
if(isset($_SESSION['user'])){
 $SneakersId=$_GET['SneakersId'];
                        $user=$_SESSION['user'];
                        
                        $date=date("Y-m-d H:i:s");
                        $query="INSERT INTO `temporder`(`tid`, `username`, `sneakerid`, `date`) VALUES (NULL,'$user',$SneakersId,'$date')";
                        mysqli_query($conn,$query);
                        header('Location: ' .$_SERVER['HTTP_REFERER']);
                        }
                        else{
                            header('Location: login.php');
                        }
                        ?>