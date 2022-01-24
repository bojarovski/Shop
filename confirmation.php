<?php
include("functions/init.php");
?>
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
    <!-- Start Header Area -->
    <?php
include 'Header\Footer/header.php';
?>
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
                    <h1>Confirmation</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Confirmation</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Order Details Area =================-->
    <section class="order_details section_gap">
        <div class="container">
            <h2 class="title_confirmation">
                Thank you. Your order has been received.
            </h2>

            <?php
                $user=$_SESSION['user'];
                $fullprice=$_SESSION['fullprice'];
                        $query = "SELECT * FROM finalorder where username='$user' ORDER BY finalOrderID DESC LIMIT 1";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_object($result)
                    ?>

            <div class="row order_d_inner">
                <div class="col-lg-4">
                    <div class="details_item">
                        <h4>Order Info</h4>
                        <ul class="list">
                            <li>
                                <a href="#"><span>Order number</span> : <?php echo $row->finalOrderID   ; ?></a>
                            </li>
                            <li>
                                <a href="#"><span>Date</span> : <?php echo $row->date   ; ?></a>
                            </li>
                            <li>
                                <a href="#"><span>Total</span> : <?php echo $fullprice  ?> $</a>
                            </li>
                            <li>
                                <a href="#"><span>Payment method</span> : Check payments</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="details_item">
                        <h4>Billing Address</h4>
                        <ul class="list">
                            <?php
                
                        $query = "SELECT * FROM informations where UserId='$user'";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_object($result)
                    ?>
                            <li>
                                <a href="#"><span>Street</span> : <?php echo $row->Addres1   ; ?></a>
                            </li>
                            <li>
                                <a href="#"><span>City</span> : <?php echo $row->City   ; ?></a>
                            </li>
                            <li>
                                <a href="#"><span>Country</span> : <?php echo $row->Country   ; ?></a>
                            </li>
                            <li>
                                <a href="#"><span>Postcode </span> : <?php echo $row->Zip   ; ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="details_item">
                        <h4>Shipping Address</h4>
                        <ul class="list">
                            <?php
                
                $query = "SELECT * FROM ordersinfo where UserId='$user'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_object($result)
            ?>
                            <li>
                                <a href="#"><span>Street</span> : <?php echo $row->Addres1   ; ?></a>
                            </li>
                            <li>
                                <a href="#"><span>City</span> : <?php echo $row->City   ; ?></a>
                            </li>
                            <li>
                                <a href="#"><span>Country</span> : <?php echo $row->Country   ; ?></a>
                            </li>
                            <li>
                                <a href="#"><span>Postcode </span> : <?php echo $row->Zip   ; ?></a>
                            </li>
                            <li>
                                <a href="#"><span>Message </span> : <?php echo $row->message   ; ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="order_details_table">
                <h2>Order Details</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <?php
                                $query10 = "SELECT *
                                FROM finalorder
                                INNER JOIN sneakers ON finalorder.snakersId=sneakers.SneakersId WHERE
                                finalorder.username='$user';";
                                $result10 = mysqli_query($conn, $query10);

                                $total=0;
                                while ($row = mysqli_fetch_object($result10)) {
                                    ?>
                                <td>
                                    <p><?php echo $row->Name?></p>
                                </td>
                                <td>
                                    <h5>x 02</h5>
                                </td>
                                <td>
                                    <p>$<?php echo $row->Price?></p>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                            <tr>
                                <td>
                                    <h5>Total</h5>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <h5><b></b>$<?php echo $fullprice?></b></h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Order Details Area =================-->

    <!-- start footer Area -->
    <?php
include 'Header\Footer/footer.php';
?>
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