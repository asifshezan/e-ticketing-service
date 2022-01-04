<?php
  require_once('functions/function.php');
 ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from landing.engotheme.com/html/lotus/demo/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Nov 2021 02:32:11 GMT -->
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Register</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="images/favicon.png"/>

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="css/lib/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/font-lotusicon.css">
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/lib/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/lib/settings.css">
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap-select.min.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->


    <!-- PRELOADER -->
    <div id="preloader">
        <span class="preloader-dot"></span>
    </div>
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <!-- HEADER -->
        <header id="header">

            <!-- HEADER TOP -->
            <div class="header_top">
                <div class="container">
                    <div class="header_left float-left">
                        <span><i class="lotus-icon-cloud"></i> 30 °C</span>
                        <span><i class="lotus-icon-location"></i> Purbanchal Road, Uttar Badda. Dhaka-1212</span>
                        <span><i class="lotus-icon-phone"></i> 0151-6788837</span>
                    </div>
                    <div class="header_right float-right">

                        <span class="login-register">
                            <a href="login.php">Login</a>
                            <a href="register.php" class="active">register</a>
                        </span>

                    </div>
                </div>
            </div>
            <!-- END / HEADER TOP -->

        </header>
        <!-- END / HEADER -->

        <!-- ACCOUNT -->
        <section class="section-account parallax bg-11">
            <div class="awe-overlay"></div>
            <div class="container">
                <div class="login-register">
                    <div class="text text-center">
                        <h2>REGISTER FORM</h2>
                        <p>If you no have account in lotus Hotel! Register and feeling</p>
                        <?php
                        if(!empty($_POST)){
                          $name=$_POST['name'];
                          $phone=$_POST['phone'];
                          $email=$_POST['email'];
                          $user=$_POST['user'];
                          $pass=md5($_POST['pass']);

                          $insert="INSERT INTO ad_user(user_name,user_phone,user_email,user_username,user_password)VALUES('$name','$phone','$email','$user','$pass')";
                          if(mysqli_query($con,$insert)){
                            echo "Successfully Create New User.";
                          }else{
                            echo "Opps! User Registration Failed!";
                          }
                        }

                         ?>
                        <form method="post" action="" enctype="multipart/form-data" class="account_form">
                            <div class="field-form">
                                <input type="text" class="field-text" placeholder="User name*" name="name">
                            </div>
                            <div class="field-form">
                                <input type="text" class="field-text" placeholder="Phone*" name="phone">
                            </div>
                            <div class="field-form">
                                <input type="email" class="field-text" placeholder="Email*" name="email">
                            </div>
                            <div class="field-form">
                                <input type="text" class="field-text" placeholder="Username*" name="user">
                            </div>
                            <div class="field-form">
                                <input type="password" class="field-text" placeholder="Password*" name="pass">
                                <span class="view-pass"><i class="lotus-icon-view"></i></span>
                            </div>
                            <div class="field-form field-submit">
                                <button class="awe-btn awe-btn-13">REGISTER</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / ACCOUNT -->

        <?php
        get_footer();
         ?>
