<?php
  require_once('functions/function.php');
 ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from landing.engotheme.com/html/lotus/demo/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Nov 2021 02:32:05 GMT -->
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="images/tr.png"/>

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

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->


    <!-- PRELOADER -->
    <div id="preloader">
        <span class="preloader-dot"></span>
    </div>
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <!-- HEADER -->
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
                            <a href="login.php" class="active">Login</a>
                            <a href="register.php">register</a>
                        </span>

                    </div>
                </div>
            </div>
            <!-- END / HEADER TOP -->

        </header>

                    <!-- MENU BAR -->
                    <span class="menu-bars">
                        <span></span>
                    </span>
                    <!-- END / MENU BAR -->

                </div>
            </div>
            <!-- END / HEADER LOGO & MENU -->

        </header>
        <!-- END / HEADER -->

        <!-- ACCOUNT -->
        <section class="section-account parallax bg-11">
            <div class="awe-overlay"></div>
            <div class="container">
                <div class="login-register">
                    <div class="text text-center">
                        <h2>LOGIN ACCOUNT</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                        <?php
                          if(!empty($_POST)){
                            $username=$_POST['username'];
                            $password=md5($_POST['password']);

                            $sel="SELECT * FROM ad_user WHERE user_username='$username' AND user_password='$password'";
                            $Qr=mysqli_query($con,$sel);
                            $data=mysqli_fetch_assoc($Qr);
                            if($data){
                              $_SESSION['name']=$data['user_name'];
                              $_SESSION['user']=$data['user_username'];
                              header('Location:admin/index.php');
                            }else{
                              echo "Username Or Password didn't match!";
                            }
                          }
                         ?>
                        <form method="post" action="" class="account_form" enctype="multipart/form-data">
                            <div class="field-form">
                                <input type="text" class="field-text" name="username" placeholder="User name">
                            </div>
                            <div class="field-form">
                                <input type="password" class="field-text" name="password" placeholder="Password">
                                <span class="view-pass"><i class="lotus-icon-view"></i></span>
                            </div>
                            <div class="field-form field-submit">
                                <button class="awe-btn awe-btn-13">Login</button>
                            </div>
                            <span class="account-desc">I don’t have an account  -  <a href="#">Forgot Password</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / ACCOUNT -->

          <?php
          get_footer();
           ?>
