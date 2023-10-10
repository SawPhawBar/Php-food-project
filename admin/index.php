
<?php
session_start();
error_reporting(1);
include('connection.php');
if(isset($_POST['log']))
{
    
    if($_POST['name']=="" || $_POST['password']=="")
    {
        $err='fill your name and password first';
    }
    else{
        $query = "select * from user where Name='{$_POST['name']}' ";
       $d = mysql_query($query);
         
        $row=mysql_fetch_object($d); 
        
        $fname=$row->Name;
        $fpassword=$row->Password;
        $n = $_POST['name'];
        $p = $_POST['password'];

        if($fname==$n && $fpassword==$p)
        {
            $_SESSION['sid']=$n;
            header('location:home.php');


        }else{
            $err = 'eror';
        }
        // }else{
        //     $err="Your password is not correct";
        // }
    
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
     <!-- CSS FILES -->    
     <link rel="preconnect" href="https://fonts.googleapis.com">
        
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">                    
     <link href="css/bootstrap.min.css" rel="stylesheet">

     <link href="css/bootstrap-icons.css" rel="stylesheet">

     <link href="css/tooplate-crispy-kitchen.css" rel="stylesheet">
     <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('../images/background.jfif');
            background-size: cover;
            background-position: center;
            animation:animateBg 5s linear infinite;
            }
     </style>
</head>
<body>
        <div class="container mt-3 pt-5">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 m-auto">
                    <div class="card border-0 shadow bg-transparent" style="backdrop-filter: blur(3px);">
                        <div class="card-body ">
                        <svg class=" my-3 mx-auto d-block mb-3" xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                        <h5 class="text-center">Admin Login</h5>
                            <form method='post' action="">
                                <h6>Username</h6>
                                <input type="text" name="name" id="" class="form-control my-3 py-2" placeholder="Username">
                                <h6>Password</h6>
                                <input type="password" name="password" id="" class="form-control my-3 py-2 mb-5" placeholder="Password">
                                <div class="text-center mt-3">
                                    <input type="submit" class="btn btn-outline-dark rounded-pill mb-2" name="log" value="Login">
                                    <img src="images/_-removebg-preview.png" alt="" width="100">
                                    <?php echo $err;   ?>
                                   




                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>