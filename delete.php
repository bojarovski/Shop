<?php
                        include('functions/init.php');
                        $id=$_GET['id'];

                        $query="DELETE FROM `temporder` WHERE tid=$id";
                        echo $query;
                        $result=mysqli_query($conn,$query);
                                 
                        
                         header("location: cart.php");
                        
                        
?>