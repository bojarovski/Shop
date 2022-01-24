<?php
include("functions/init.php");

                        
                        $firstName = $_POST['firstName'];
                        $ID=$_POST['ID'];
                        $lastName = $_POST['lastName'];
                        $phone = $_POST['Phone'];
                        $email = $_POST['email'];
                        $country = $_POST['country'];
                        $ad1=$_POST['add1'];
                        $ad2=$_POST['add2'];
                        $city=$_POST['city'];
                        $zip=$_POST['zip'];
                        $user=$_SESSION['user'];
                        $mess=$_POST['message'];
                        $fullprice=$_SESSION["fullprice"];
                             
          
                        
                        if ($firstName >3 && $lastName >3 && $phone>5 && $ad1>5 && $city>3) {
                            $query="INSERT INTO `ordersinfo`(ordersinfoId,`informationId`, `UserId`, `FirstName`, `LastName`, `Country`, `Addres1`, `Addres2`, `City`, `Phone`, `Zip`,`email`,`message`,`price`)
                             VALUES (Null,'$ID','$user','$firstName','$lastName','$country','$ad1','$ad2','$city','$phone','$zip','$email','$mess','$fullprice')";
                            mysqli_query($conn, $query);

                        
                            $query1="INSERT INTO orders (username, SneakersId, date)
                            SELECT username, sneakerid, date
                            FROM temporder
                            WHERE username='$user'";

                            $query2="SELECT `ordersinfoId` FROM `ordersinfo` WHERE UserId='admin' ORDER BY ordersinfoId DESC
                            LIMIT 1;";
                            
                              
                                  
                            mysqli_query($conn, $query1);
                            $result2 = mysqli_query($conn, $query2);
                            $row2 = mysqli_fetch_object($result2);
                            $idi= $row2->ordersinfoId;
                            
                            $query4="UPDATE orders
                            SET orderinfoId = $idi
                            WHERE username='$user'";
                            $query5="INSERT INTO finalorder (orderinfoId,username, snakersId, date,status)
                            SELECT orderinfoId, username, SneakersId, date, status
                            FROM orders
                            WHERE username='$user';
                            ";
                            mysqli_query($conn, $query4);
                            mysqli_query($conn, $query5);
                            $query3="DELETE FROM temporder WHERE username='$user'";
                            $query6="DELETE FROM orders WHERE username='$user'";           
                            mysqli_query($conn, $query3);
                            mysqli_query($conn, $query6);
                            ?>
<div class="alert alert-danger" role="alert">Succesfully
</div>
<?php
 header("location: confirmation.php");
                       } 
                    