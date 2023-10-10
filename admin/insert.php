
<?php
session_start();
if($_SESSION['sid']=="")
{
    header('location:index.php');
}else{

?>
<?php
error_reporting(1);
include("connection.php");
$img=$_FILES['img']['name'];
$prono=$_POST['p_name'];
$price=$_POST['p_price'];
if($_POST['sub'])
{
    $qry="INSERT INTO item(Product_image,Product_name,Product_price)VALUES('$img','$prono','$price')";
    $result=mysql_query($qry) or die ('save items query fail.');
    if($result)
    {mkdir("image/");
        move_uploaded_file($_FILES['img']['tmp_name'],"image/".$_FILES['img']['name']);
        $err="<font size='+2'>Item inserted successfully</font>";
    }else{
        echo "Item is not inserted";
    }
}
mysql_close($con);
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Admin Insert Page</title>

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
                            <a class="nav-link " href="home.php">Home</a>
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
        <section style="
        display: flex;
        justify-content: center;
        align-items: center;
        width:100%;
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url('../images/insert.png');
        ">
            <div class="container mt-3 pt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 col-md-6 m-auto">
                        <div class="card border-0 shadow bg-transparent mb-5">
                            <div class="card-body">
                            <img src="../images/insert-icon-removebg-preview.png" width="100" alt="" class="mx-auto d-block">
                            <h4 class="text-center mb-3">Insert You Products</h4>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <h6>Image</h6>
                                    <input type="file" name="img" id="" class="form-control my-3 py-2">
                                    <h6>Product Name</h6>
                                    <input type="text" name="p_name" id="" class="form-control my-3 py-2">
                                    <h6>Prices</h6>
                                    <input type="text" name="p_price" id="" class="form-control my-3 py-2 mb-5">
                                    <div class="text-center mt-3">
                                        <input type="submit"  class="btn btn-outline-dark rounded-pill mb-2" name="sub" value="Submit">
                                    </div>
                                </form>
                                <h2><?php echo $err; ?></h2>
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
        <?php } ?>

        <!-- Modal -->

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
