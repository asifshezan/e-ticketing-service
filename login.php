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

        <!-- FOOTER -->
        <footer id="footer">

            <!-- FOOTER TOP -->
            <div class="footer_top">
                <div class="container">
                    <div class="row">

                        <!-- WIDGET MAILCHIMP -->
                        <div class="col-lg-9">
                            <div class="mailchimp">
                                <h4>News &amp; Offers</h4>
                                <div class="mailchimp-form">
                                    <form action="#" method="POST">
                                        <input type="text" name="email" placeholder="Your email address" class="input-text">
                                        <button class="awe-btn">SIGN UP</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END / WIDGET MAILCHIMP -->

                        <!-- WIDGET SOCIAL -->
                        <div class="col-lg-3">
                            <div class="social">
                                <div class="social-content">
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- END / WIDGET SOCIAL -->

                    </div>
                </div>
            </div>
            <!-- END / FOOTER TOP -->

            <!-- FOOTER CENTER -->
            <div class="footer_center">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-lg-5">
                            <div class="widget widget_logo">
                                <div class="widget-logo">
                                    <div class="img">
                                        <a href="#"><img src="images/l1.png" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <p><i class="lotus-icon-location"></i> 225 Beach Street, Australian</p>
                                        <p><i class="lotus-icon-phone"></i> 1-548-854-8898</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="mailto:hello@thelotushotel.com">hello@thelotushotel.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xs-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">ABOUT</h4>
                                <ul>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Comming Soon</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xs-4 col-lg-3">
                            <div class="widget widget_tripadvisor">
                                <h4 class="widget-title">Tripadvisor</h4>
                                <div class="tripadvisor">
                                    <p>Now with hotel reviews by</p>
                                    <img src="images/tripadvisor.png" alt="">
                                    <span class="tripadvisor-circle">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i class="part"></i>
                                    </span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- END / FOOTER CENTER -->

            <!-- FOOTER BOTTOM -->
            <div class="footer_bottom">
                <div class="container">
                    <p>&copy; 2015 Lotus Hotel All rights reserved.</p>
                </div>
            </div>
            <!-- END / FOOTER BOTTOM -->

        </footer>
        <!-- END / FOOTER -->

    </div>
    <!-- END / PAGE WRAP -->


    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="js/lib/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/lib/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lib/bootstrap-select.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true"></script>
    <script type="text/javascript" src="js/lib/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/lib/owl.carousel.js"></script>
    <script type="text/javascript" src="js/lib/jquery.appear.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/lib/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/lib/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/lib/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</body>

<!-- Mirrored from landing.engotheme.com/html/lotus/demo/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Nov 2021 02:32:11 GMT -->
</html>
