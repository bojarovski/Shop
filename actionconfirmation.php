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
                        echo $ID;
                        if ($firstName >3 && $lastName >3 && $phone>5 && $ad1>5 && $city>3) {
                            $query="INSERT INTO `ordersinfo`(ordersinfoId,`informationId`, `UserId`, `FirstName`, `LastName`, `Country`, `Addres1`, `Addres2`, `City`, `Phone`, `Zip`,`email`,`message`)
                             VALUES (Null,'$ID','$user','$firstName','$lastName','$country','$ad1','$ad2','$city','$phone','$zip','$email','$mess')";
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
                            WHERE username='$user';";
mysqli_query($conn, $query4);
                            $query3="DELETE FROM temporder WHERE username='$user'";           
                            mysqli_query($conn, $query3);
                            ?>
<div class="alert alert-danger" role="alert">Succesfully
</div>
<?php
 header("refresh:5; location: confirmation.php");
                       } 
                    