
<?php
error_reporting(1);
include("connection.php");


?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Admin View Product</title>

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
                
          
                    <img src="images/TheStarDarling-removebg-preview.png" alt="photo" width="250" height="auto">

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="insert.php">Insert</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="view-menu.php">Product</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="view-order.php">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view-feedback.php">Feeback</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /nav -->

        <!-- main -->
        <main>
        <section>
            <div class="container mt-3 pt-5">
                <div class="row">
                    <div class="col-12   m-auto">
                        <h3 class="text-center mb-5">View Your Products</h3>

                     
                          <form action="" method="post">
                            <table class=" table table-responsive table table-dark mx-auto w-100 mb-5" style="border-color:
                                         black;border-style: groove;
                                         margin-left: -40px;
                                          width:auto;
                                          height: auto;
                                          text-align: center;">
                                <tr>
                                    <th class="p-2">Product image</th>
                                    <th class="p-2">Product name</th>
                                    <th class="p-2">Product price</th>
                                </tr>
                                <?php  
                        $sel=mysql_query("select * from item ");
                        while($row = mysql_fetch_array($sel))
  
							{	 ?>
                                <tr>
                                    <td> 
                                    <img src="../admin/image/<?php echo $row['Product_image']; ?>" width='100'height='100' alt="">

                                    </td>
                                    <td><?php echo $row['Product_name']; ?></td>
                                    <td> $<?php echo $row['Product_price']; ?></td>

                                </tr>
                                <?php }?>
                            </table>
                          </form>      
                    </div>
                </div>
            </div>
        </section>
        </main>
        <!-- /main -->
      

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

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
