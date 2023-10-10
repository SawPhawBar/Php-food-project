<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Contact Page</title>

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
                            <a class="nav-link" href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="menu.php">Menu</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="news.php">Our Updates</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="d-none d-lg-block">
                    <button type="button" class="custom-btn btn btn-danger" data-bs-toggle="modal" data-bs-target="#BookingModal">Register</button>
                </div>

            </div>
        </nav>
        <!-- /nav -->

        <main>

            <header class="site-header site-contact-header">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 mx-auto">
                            <h1 class="text-white">Say Hello</h1>

                            <strong class="text-white">We are welcome to keep in touch with you</strong>
                        </div>

                    </div>
                </div>
                
                <div class="overlay"></div>
            </header>

            <?php
                error_reporting(1);
                include('connection.php');
                if($_POST['send'])
                {
                    $name=$_POST['contact-name'];
                    $email=$_POST['contact-email'];
                    $phone=$_POST['contact-phone'];
                    $message=$_POST['contact-message'];
                    if(mysql_query("insert into contact(Name,Email,Phone,Message) values('$name','$email','$phone','$message')"))
                    {$er="<font color='blue' size='+1' >Message sent successfully</font>";}
                }
            ?>

            <!-- contact_form -->
            <section class="contact section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-3">Contant information</h2>
                            <h4 class="mb-4">Leave a message</h4>
                        </div>

                        <div class="col-lg-6 col-12">
                            <form class="custom-form contact-form row" action="#" method="post" role="form">
                                <div class="col-lg-6 col-6">
                                    <label for="contact-name" class="form-label">Full Name</label>

                                    <input type="text" name="contact-name" id="contact-name" class="form-control" placeholder="Your Name" required>
                                </div>

                                <div class="col-lg-6 col-6">
                                    <label for="contact-phone" class="form-label">Phone Number</label>

                                    <input type="number" name="contact-phone" id="contact-phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="+95">
                                </div>

                                <div class="col-12">
                                    <label for="contact-email" class="form-label">Email</label>

                                    <input type="email" name="contact-email" id="contact-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Your Email" required="">

                                    <label for="contact-message" class="form-label">Message</label>

                                    <textarea class="form-control" rows="5" id="contact-message" name="contact-message" placeholder="Your Message"></textarea>
                                </div>

                                <div class="col-lg-5 col-12 ms-auto">
                                    <input type="submit" name='send' class="form-control" value='Send'>
                                </div>
                                <h2><?php echo $er; ?></h2>
                            </form>
                            
                        </div>

                        <div class="col-lg-4 col-12 mx-auto mt-lg-5 mt-4">

                            <h5>Weekdays</h5>

                            <div class="d-flex mb-lg-3">
                                <p>Monday to Friday</p>

                                <p class="ms-5">8:00 AM - 7:00 PM</p>
                            </div>

                            <h5>Weekends</h5>

                            <div class="d-flex">
                                <p>Saturday and Sunday</p>

                                <p class="ms-5">10:00 AM - 9:00 PM</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <h4 class="mt-5 mb-4">Myanmar,Yangon, Insien, Taung Thu Gone</h4>

                            <div class="google-map pt-3">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127044.3354527101!2d96.00817383186475!3d16.91792666998707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c195ce696dd4f7%3A0x8e6136e36e0ca442!2z4YCh4YCE4YC64YC44YCF4YCt4YCU4YC6IOGAmeGAvOGAreGAr-GAt-GAlOGAmuGAuiwg4YCb4YCU4YC64YCA4YCv4YCU4YC6!5e0!3m2!1smy!2smm!4v1694091497881!5m2!1smy!2smm" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- /contact_form -->

        </main>

        <!-- footer -->
        <footer class="site-footer section-padding">
            
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

                        <p>8:00 AM - 7:00 PM</p>

                        <p>Tel: <a href="tel: 09-409-139-659" class="tel-link">09-409-139-659</a></p>
                    </div>

                    <div class="col-lg-4 col-md-6 col-xs-12 tooplate-mt30">
                        <h6 class="text-white mb-lg-4">Social</h6>

                        <ul class="social-icon">
                            <li><a href="https://www.facebook.com/profile.php?id=100074424180660" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="https://t.me/sawphaw" class="social-icon-link bi-telegram"></a></li>

                            <li><a href="https://www.youtube.com/@sawphawbar3994/channels" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    
                        <p class="copyright-text">Copyright © 2022 The Star Darlings Restaurant <br> Co., Ltd.
                        <br>Design by <a rel="nofollow" href="https://www.facebook.com/profile.php?id=100074424180660" target="_blank">Saw Phaw Bar</a></p>
                        
                    </div>

                </div><!-- row ending -->
                
             </div><!-- container ending -->
             
        </footer>
        <!-- /footer -->

        <!-- Modal -->
        <!-- registration_form -->
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
                                    <label for="phone" class="form-label">Phone Number</label>

                                    <input type="number" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="+95">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="email" class="form-label">Email Address</label>

                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="your@email.com" required>
                                </div>

                               

                                <div class="col-lg-6 col-12">
                                    <label for="people" class="form-label">Password</label>

                                    <input type="password" name="password" id="people" class="form-control" placeholder="password">
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
        <!-- registration_form -->

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
