<?php 

function redirect($location)
{
    header("location: {$location}");
    exit();
}

		function last20 (){
				$query="SELECT * FROM sneakers ORDER BY sneakersId DESC LIMIT 10";
                $result=mysqli_query($conn,$query);
                while($row=mysqli_fetch_object($result))
                {
                ?>
<!-- Last single product -->
<div class="col-lg-3 col-md-6">
    <div class="single-product">
        <img class="img-fluid" src="<?php $row->photo; ?>" alt="Photo">
        <div class="product-details">
            <h6><?php $row->Name ?></h6>
            <div class="price">
                <a><?php $row->Price; ?></a>
                <h6 class="l-through">$210.00</h6>
            </div>
            <div class="prd-bottom">

                <a href="" class="social-info">
                    <span class="ti-bag"></span>
                    <p class="hover-text">add to bag</p>
                </a>
                <a href="" class="social-info">
                    <span class="lnr lnr-heart"></span>
                    <p class="hover-text">Wishlist</p>
                </a>

            </div>
        </div>
    </div>
</div>
<?php
             }
         }

		 function register_validation(){
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$cpassword = $_POST['confirmPassword'];
			
			$query = "select ID from users where username='$username'";
			$query1 = "select ID from users where email='$email'";
			
			$result = mysqli_query($conn, $query);
			$result1 = mysqli_query($conn, $query1);
			
			$nr=mysqli_num_rows($result);
			$nr1=mysqli_num_rows($result1);
			echo $nr."</br>";
			echo $nr1."</br>";
			echo "<br/>";
			if ($password == $cpassword && strlen($password) >= 8) {
				$epassword = md5($password);
				if (strlen($username) < 9 || $nr > 0) {
					echo strlen($username);
					echo "<h2>Username must be longer then 8 characters or this username is already exist</h2>";
				} else {
					if ($nr1>0) {
						echo "<h2>Email is already exist</h2>";
					} else {
						$date=date("Y-m-d");
						echo $date;
						$query = "INSERT INTO `users`(`ID`, `username`, `password`, `email`, `date`) VALUES (null,'$username','$epassword','$email','$date')";
						echo "uspesno full";
						echo isset($result);
						mysqli_query($conn, $query);
					}
				}
			
			} else {
				echo "<h2>Password must be longer then 8 characters or password doesnt match</h2>";
			}
		 }
				
?>