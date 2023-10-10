
<?php
error_reporting(1);
session_start();
$img = $_REQUEST['mg'];
$_SESSION['sid'] = $_POST['name'];
include('connection.php');
if($_POST['ord'])
{
    $prodno = $_POST['prodno'];
    $price = $_POST['price'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $ordno = rand(1000,5000);
    
   $query =  "INSERT INTO `stardarling`.`orders` (`Id`, `Product_name`, `Price`, `Name`, `Phone`, `Address`, `Order_number`) VALUES (NULL, '$prodno', '$price', '$name', '$phone', '$address', '$ordno')";
    
    
    if(mysql_query($query)){
        $mes = 'success';
        header("location:ordersent.php?order_no=$ordno");
    }else{
        $mes = 'error';
    }
    
    // if(mysql_query($query))
    // {
    //     header("location:ordersent.php?order_no=$ordno");
    // }else{
    //     $mes = "user already exists";
    // }
}
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Order Page </title>

        <!-- CSS FILES -->    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">                    
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/tooplate-crispy-kitchen.css" rel="stylesheet">
        
<!--

Tooplate 2129 Crispy Kitchen

https://www.tooplate.com/view/2129-crispy-kitchen

-->
    </head>
    
    <body>

        <!-- nav -->
        <nav class="navbar navbar-expand-lg bg-white shadow-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <a class="navbar-brand" href="index.php">
                    <img src="images/TheStarDarling-removebg-preview.png" alt="photo" width="250" height="auto">
                </a>

                <div class="d-lg-none">
                    <button type="button" class="custom-btn btn btn-danger" data-bs-toggle="modal" data-bs-target="#BookingModal">Register</button>
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="menu.php">Menu</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="news.php">Our Updates</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="d-none d-lg-block">
                    <button type="button" class="custom-btn btn btn-danger" data-bs-toggle="modal" data-bs-target="#BookingModal">Register</button>
                </div>

            </div>
        </nav>
        <!-- /nav -->

        <!-- main -->
        <main>
        <section>
            <div class="container mt-3 pt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 col-md-6 m-auto">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                            <svg class="mx-auto d-block mb-3" xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-cart-dash" viewBox="0 0 16 16">
                            <path d="M6.5 7a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                            </svg>  
                            <h5 class="text-center mb-3">Order form <?php echo $prodno; ?> </h5>  
                            <?php
                            $sel = mysql_query("select * from item where product_image = '$img' ");

                            $mat = mysql_fetch_array($sel);
                            ?>

                                <form action="" method="post">
                                    <label for="">Product name <?php echo $mes; ?> </label>
                                    <input type="text" name="prodno" id="" class="form-control my-3 py-2" value="<?php echo $mat['Product_name']; ?>">
                                    <label for="">Product Prices</label>
                                    <input type="text" name="price" id="" class="form-control my-3 py-2" value="<?php echo $mat['Product_price']; ?>">
                                    <label for="">Customer name</label>
                                    <input type="text" name="name" id="" class="form-control my-3 py-2">
                                    <label for="">Phone</label>
                                    <input type="text" name="phone" id="" class="form-control my-3 py-2 ">
                                    <label for="">Address</label><br><br>
                                    <textarea class="mb-3" name="address" id="" cols="20" rows="2" placeholder="Address"></textarea><br><br>
                                    <input name="ord" type="submit" class="btn btn-outline-dark w-25 rounded-pill mb-2" value="Send"/>
                                    <button name="cancel" class="btn btn-outline-danger w-25 rounded-pill mb-2">Cancel</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        </main>
        <!-- /main -->
      
        <!-- footer -->
        <footer class="site-footer section-padding mt-5">
            
            <div class="container">
                
                <div class="row">

                    <div class="col-12">
                        <img src="images/TheStarDarling-removebg-preview.png" alt="photo" width="250" height="auto">
                    </div>

                    <div class="col-lg-4 col-md-7 col-xs-12 tooplate-mt30">
                        <h6 class="text-white mb-lg-4 mb-3">Location</h6>

                        <p>Yangon,<br> Insein Township,<br> Taung Thu Gone</p>
                    </div>

                    <div class="col-lg-4 col-md-5 col-xs-12 tooplate-mt30">
                        <h6 class="text-white mb-lg-4 mb-3">Opening Hours</h6>

                        <p class="mb-2">Monday - Friday</p>

                        <p>8:00 AM - 07:00 PM</p>

                        <p>Tel: <a href="tel: 010-02-0340" class="tel-link">09-409-139-659</a></p>
                    </div>

                    <div class="col-lg-4 col-md-6 col-xs-12 tooplate-mt30">
                        <h6 class="text-white mb-lg-4 ">Social</h6>

                        <ul class="social-icon">
                            <li><a href="https://www.facebook.com/profile.php?id=100074424180660" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="https://t.me/sawphaw" target="_blank"
                            	 class="social-icon-link bi-telegram"></a></li>

                            <li><a href="https://www.youtube.com/@sawphawbar3994/channels" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    
                        <p class="copyright-text">Copyright © 2022 The Star Darlings <br> Restaurant., Ltd.
                        <br>Design by <a rel="nofollow" href="https://www.facebook.com/profile.php?id=100074424180660" target="_blank">Saw Phaw Bar</a></p>
                        
                    </div>

                </div><!-- row ending -->
                
             </div><!-- container ending -->
             
        </footer>
        <!-- /footer -->

        <!-- Modal -->
        <!-- Registration_Form -->
        <div class="modal fade" id="BookingModal" tabindex="-1" aria-labelledby="BookingModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="mb-0">Registration Form</h3>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body d-flex flex-column justify-content-center">
                        <div class="booking">

                        <?php
                        error_reporting(1);
                        include('connection.php');
                        if($_POST['send'])
                        {
                            $name=$_POST['name'];
                            $email=$_POST['email'];
                            $phone=$_POST['phone'];
                            $password=$_POST['password'];
                            if(mysql_query("insert into register(Name,Email,Phone,Password) values('$name','$email','$phone','$password')"))
                            {
                                header("location:reg_success.php?name=$name & email=$email");
                            }else{
                                $error="user already exists";
                            }
                        }
                      ?>
                            
                            <form class="booking-form row" role="form" action="#" method="post">
                                <div class="col-lg-6 col-12">
                                    <label for="name" class="form-label">Full Name</label>

                                    <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="email" class="form-label">Email Address</label>

                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="your@email.com" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="phone" class="form-label">Phone Number</label>

                                    <input type="number" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="+95">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="people" class="form-label">Password</label>

                                    <input type="password" name="people" id="people" class="form-control" placeholder="password">
                                </div>

                                <div class="col-lg-4 col-12 ms-auto">
                                    <input type="submit" name="send" value="Send" class="form-control">
                                </div>
                                <label><?php echo "<font color='red'>$error</font>"; ?></label>

                            </form>
                        </div>
                    </div>

                    <div class="modal-footer"></div>
                    
                </div>
                
            </div>
        </div>
        <!-- /Registration_Form -->

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
