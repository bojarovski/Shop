<link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
<style>
.badge:after {
    content: attr(value);
    font-size: 12px;
    color: #fff;
    background: red;
    border-radius: 50%;
    padding: 0 5px;
    position: relative;
    left: -4px;
    top: -10px;
    opacity: 0.9;
}
</style>
<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link nav-item active " href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="category.php">Shop Category</a></li>

                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <?php
							if(!isset($_SESSION['user'])){
                                echo '<li class="nav-item"><a class="nav-link" href="tracking.php">Tracking</a></li>';
								echo'<li class="nav-item"><a class="nav-link" href="login.php">LOGIN</a></li>';
                               
							}else{?>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Profile</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="info.php">My Profile</a>
                                <li class="nav-item"><a class="nav-link" href="tracking.php">Tracking</a></li>
                        </li>
                        <?php
								if($_SESSION['user']=='admin'){
								echo'<li class="nav-item"><a class="nav-link" href="adminPage/index2.php">Admin
								Page</a>';
								}?>

                        </li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Log Out</a></li>
                    </ul>
                    </li>
                    <?php }
							?>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php 

                        if(isset($_SESSION['user'])){
                        
						$user=$_SESSION['user'];
						$query="select * from temporder where username='$user'";
						$result=mysqli_query($conn,$query);
						$bp=mysqli_num_rows($result);
                        
                      
						?>
                        <li class="nav-item"><a href="cart.php" class="fa badge fa-lg" value=<?php echo $bp; ?>><span
                                    class="ti-bag">&#xf290;</span></a>
                        </li>
                        <?php 
                        }
                         else{
                        ?>
                        <li class="nav-item"><a href="login.php" class="fa badge fa-lg"><span
                                    class="ti-bag">&#xf290;</span></a>
                            <?php
                         }
                        ?>

                        <li class="nav-item">
                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
<!-- End Header Area -->