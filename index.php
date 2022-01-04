<?php
  require_once('functions/function.php');
 ?>
 <!DOCTYPE html>
 <html lang="en">

 <!-- Mirrored from landing.engotheme.com/html/lotus/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Nov 2021 02:32:11 GMT -->
 <head>
     <meta charset="utf-8">
     <!-- TITLE -->
     <title>E-Ticketing Service</title>

     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
     <meta name="format-detection" content="telephone=no">
     <meta name="apple-mobile-web-app-capable" content="yes">
     <link rel="shortcut icon" href="images/"/>

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
                             <a href="register.php">register</a>
                         </span>

                     </div>
                 </div>
             </div>
             <!-- END / HEADER TOP -->

             <!-- HEADER LOGO & MENU -->
             <div class="header_content" id="header_content">

                 <div class="container">
                     <!-- HEADER LOGO -->
                     <div class="header_logo">
                         <a href="#"><img src="images/tr.png" alt="">BD TRAIN SERVICE</a>
                     </div>
                     <!-- END / HEADER LOGO -->

                     <!-- HEADER MENU -->
                     <nav class="header_menu">
                         <ul class="menu">
                             <li class="current-menu-item">
                                 <a href="index.php">Home</a>

                             </li>
                             <li><a href="about.php">About</a></li>
                             <li>
                                 <a href="reservation.php">Reservation</a>
                             </li>

                             <li><a href="contact.php">Contact</a></li>
                         </ul>
                     </nav>
                     <!-- END / HEADER MENU -->

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


        <!-- BANNER SLIDER -->
        <section class="section-slider">

            <div id="slider-revolution">
                <ul>
                    <li data-transition="fade">
                        <img src="images/slider/b1.png" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">



                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1"  data-x="center" data-y="240" data-speed="700" data-start="1500" data-easing="easeOutBack">
                        <h3 style="color:red;"><b> WELCOME TO </b></h3>
                        </div>

                        <div class="tp-caption sfb fadeout slider-caption slider-caption-sub-1" data-x="center" data-y="280" data-speed="700" data-easing="easeOutBack" style="color:white;" data-start="2000"><b>BD TRAIN TICKETING SERVICE</b></div>

                        <!-- <a href="#" class="tp-caption sfb fadeout awe-btn awe-btn-12 awe-btn-slider" data-x="center" data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200">VIEW NOW</a> -->
                    </li>

                </ul>
            </div>

        </section>
        <!-- END / BANNER SLIDER -->

        <!-- CHECK AVAILABILITY -->
        <section class="section-check-availability">
            <div class="container">
                <div class="check-availability">
                    <div class="row">
                        <div class="col-lg-3">
                            <h2>CHECK AVAILABILITY</h2>
                        </div>
                        <div class="col-lg-9">
                          <?php
                            if(!empty($_POST)){
                              $arrive=$_POST['arrive'];
                              $departure=$_POST['departure'];
                              $adults=$_POST['adults'];
                              $children=$_POST['children'];

                              $insert="INSERT INTO ticket_book(ticket_arrive,ticket_departure,ticket_adults,ticket_children)
                              VALUES('$arrive','$departure','$adults','$children')";

                              if(mysqli_query($con,$insert)){
                                echo "Successfully Insert Ticket Information.";
                              }else{
                                echo "Opps! Failed Insert Ticket Information.!";
                              }
                            }
                           ?>
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="availability-form">
                                    <input type="text" name="arrive" class="awe-calendar from" placeholder="Arrival Date">
                                    <input type="text" name="departure" class="awe-calendar to" placeholder="Departure Date">

                                    <select class="awe-select" name="adults">
                                        <option>Adults</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                    <select class="awe-select" name="children">
                                        <option>Children</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                    <!-- <div class="field-form field-submit">
                                        <button class="awe-btn awe-btn-13">Login</button>
                                    </div> -->
                                    <div class="vailability-submit">
                                        <button class="awe-btn awe-btn-13">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / CHECK AVAILABILITY -->

        <!-- ABOUT -->
        <section class="section-home-about bg-white">
            <div class="container">
                <div class="home-about">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="img">
                                <a href="#"><img src="images/home/about/h1.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text">
                                <h2 class="heading">ABOUT US</h2>
                                <span class="box-border"></span>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                   Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                                    Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur,
                                    from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
                                     discovered the undoubtable source</p><br>
                                     <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                        Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                                         Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur,
                                         from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
                                          discovered the undoubtable source</p><br>

                                <a href="#" class="awe-btn awe-btn-default">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / ABOUT -->

        <?php
        get_footer();
         ?>
