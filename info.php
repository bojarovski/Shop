<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png" />
    <!-- Author Meta -->
    <meta name="author" content="CodePixar" />
    <!-- Meta Description -->
    <meta name="description" content="" />
    <!-- Meta Keyword -->
    <meta name="keywords" content="" />
    <!-- meta character set -->
    <meta charset="UTF-8" />
    <!-- Site Title -->
    <title>Karma Shop</title>

    <!--
            CSS
            ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/nice-select.css" />
    <link rel="stylesheet" href="css/nouislider.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>
    <?php include 'Header\Footer/header.php';?>
    <!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="
            breadcrumb-banner
            d-flex
            flex-wrap
            align-items-center
            justify-content-end
          ">
                <div class="col-first">
                    <h1>Personal Informations</h1>
                    <nav class="d-flex align-items-center">

                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">


            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Personal Informations</h3>
                        <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="first" name="name" />
                                <span class="placeholder" data-placeholder="First name"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="last" name="name" />
                                <span class="placeholder" data-placeholder="Last name"></span>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="company" name="company"
                                    placeholder="Company name" />
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="number" name="number" />
                                <span class="placeholder" data-placeholder="Phone number"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="email" name="compemailany" />
                                <span class="placeholder" data-placeholder="Email Address"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="country_select">
                                    <option value="1">Country</option>
                                    <option value="2">Country</option>
                                    <option value="4">Country</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add1" name="add1" />
                                <span class="placeholder" data-placeholder="Address line 01"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add2" name="add2" />
                                <span class="placeholder" data-placeholder="Address line 02"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="city" name="city" />
                                <span class="placeholder" data-placeholder="Town/City"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="country_select">
                                    <option value="1">District</option>
                                    <option value="2">District</option>
                                    <option value="4">District</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="zip" name="zip"
                                    placeholder="Postcode/ZIP" />
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="submit" class="primary-btn form-control" id="subit" name="submit"
                                    placeholder="Submit" />
                            </div>

                        </form>
                        <?php 
                    if (isset($_POST['s'])){
                        $firstName = $_POST['username'];
                        $LastName = $_POST['email'];
                        $password = $_POST['password'];
                        $cpassword = $_POST['confirmPassword'];
                        
                        $query = "select ID from users where username='$username'";
                        $query1 = "select ID from users where email='$email'";
                        
                        $result = mysqli_query($conn, $query);
                        $result1 = mysqli_query($conn, $query1);
                        
                        $nr=mysqli_num_rows($result);
                        $nr1=mysqli_num_rows($result1);
                        if ($password == $cpassword && strlen($password) >= 8) {
                            $epassword = md5($password);
                            if (strlen($username) < 9 || $nr > 0) {
                                echo strlen($username);
                                echo "<div class='alert alert-danger' role='alert'>Username must be longer then 8 characters or this username is already exist</div>";
                            } else {
                                if ($nr1>0 && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    echo "<div class='alert alert-danger' role='alert'>Email is already exist</div>";
                                } else {
                                    $date=date("Y-m-d");
                                    echo $date;
                                    $query = "INSERT INTO `users`(`ID`, `username`, `password`, `email`, `date`) VALUES (null,'$username','$epassword','$email','$date')";
                                    echo "uspesno full";
                                    echo isset($result);
                                    mysqli_query($conn, $query);
                                    header("location: login.php");
                                }
                            }
                        
                        } else {
                            ?>
                        <div class="alert alert-danger" role="alert">Password must be longer then 8 characters or
                            password doesnt match
                        </div>
                        <?php
                        }
                    }
                    
                    ?>



                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Informations</h2>
                            <ul class="list">
                                <li>
                                    <a href="#">Number of orders <span>Total</span></a>
                                </li>
                                <li>
                                    <a href="#">Shipping <span>Total</span></a>
                                </li>
                                <li>
                                    <a href="#">To be shipped <span>Total</span></a>
                                </li>
                                <li>
                                    <a href="#">Recived<span>Total</span></a>
                                </li>
                            </ul>
                            <ul class="list list_2">
                                <li>
                                    <a href="#">Subtotal <span>$2160.00</span></a>
                                </li>
                                <li>
                                    <a href="#">Shipping <span>Flat rate: $50.00</span></a>
                                </li>
                                <li>
                                    <a href="#">Total <span>$2210.00</span></a>
                                </li>
                            </ul>



                            <a class="primary-btn" href="#">View all orders</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->

    <!-- start footer Area -->
    <?php include 'Header\Footer/footer.php';?>
    <!-- End footer Area -->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>