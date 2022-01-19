<?php
                        include('functions/init.php');
                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        $epass=md5($password);

                        $query="select * from users where username='$username' and password='$epass'";

                        $result=mysqli_query($conn,$query);
                                 
                        if(mysqli_num_rows($result)==1)
                        {
                            echo "Mario";
                        $row=mysqli_fetch_array($result);
                        $_SESSION['user']=$row['username'];
                        header("location: index.php");
                        }
                        else
                        {
                        echo "<div class='alert alert-danger' role='alert'>Wrong username or password</div>";
                         session_destroy();
                         header("location: login.php");
                        }
                        
?>