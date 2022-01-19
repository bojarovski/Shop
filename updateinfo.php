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
                        
                        if ($firstName >3 && $lastName >3 && $phone>5 && $ad1>5 && $city>3) {
                            $query="UPDATE `informations` SET `informationId`='$ID',`UserId`='$user',
                            `FirstName`='$firstName',`LastName`='$lastName',`Country`='$country',`Addres1`='$ad1',
                            `Addres2`='$ad2',`City`='$city',`Phone`='$phone',`Zip`='$zip',`email`='$email' WHERE informationId=$ID";
                            echo $query;
                            mysqli_query($conn, $query);
                            ?>
<div class="alert alert-danger" role="alert">Succesfully
</div>
<?php
 header("location: info.php");
                       } 
                    