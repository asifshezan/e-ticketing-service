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
                             <li>
                                 <a href="index.php">Home</a>

                             </li>
                             <li><a href="about.php">About</a></li>

                             <li class="current-menu-item">
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


        <!-- SUB BANNER -->
        <section class="section-sub-banner bg-16">

            <div class="awe-overlay"></div>

            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>RESERVATION</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                    </div>
                </div>

            </div>

        </section>
        <!-- END / SUB BANNER -->

        <!-- RESERVATION -->
        <section class="section-reservation-page bg-white">

            <div class="container">
                <div class="reservation-page">



                  <div class="row">

                  <div class="col-md-4 col-lg-3">

                  <div class="reservation-sidebar">

                    <?php
                      if(!empty($_POST)){
                        $arrive=$_POST['arrive'];
                        $departure=$_POST['departure'];
                        $adult=$_POST['adult'];
                        $child=$_POST['child'];

                      $insert="INSERT INTO ticket_book(ticket_arrive,ticket_departure,ticket_adults,ticket_children)
                      VALUES('$arrive','$departure','$adult','$child')";

                      if(mysqli_query($con,$insert)){
                        echo "Successfully Insert Your Value.";
                      }else {
                        echo "Opps!! Failed to send!!";
                      }
                      }
                     ?>


                  <form action="" method="post" enctype="multipart/form-data">
                  <!-- SIDEBAR AVAILBBILITY -->
                  <div class="reservation-sidebar_availability bg-gray">



                  <!-- HEADING -->
                  <h2 class="reservation-heading">YOUR RESERVATION</h2>
                  <!-- END / HEADING -->

                  <h6 class="check_availability_title">your stay dates</h6>

                  <div class="check_availability-field">
                  <label>Arrive</label>
                  <input type="text" name="arrive" class="awe-calendar awe-input from" placeholder="Arrive">
                  </div>

                  <div class="check_availability-field">
                  <label>Depature</label>
                  <input type="text" name="departure" class="awe-calendar awe-input to" placeholder="Depature">
                  </div>



                  <div class="check_availability-field_group">

                  <div class="check_availability-field">
                  <label>Adult</label>
                  <select class="awe-select" name="adult">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  </select>
                  </div>

                  <div class="check_availability-field">
                  <label>Child</label>
                  <select class="awe-select" name="child">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  </select>
                  </div>

                  </div>
                  <div class="vailability-submit">
                      <button class="awe-btn awe-btn-13">SUBMIT</button>
                  </div>

                  </div>
                  <!-- END / SIDEBAR AVAILBBILITY -->
                  </form>
                  </div>

                  </div>

                        <div class="col-md-8 col-lg-9">
                            <div class="reservation_content bg-gray">
                                <h2 class="reservation-heading">Availability</h2>

                                <div class="col-sm-6">
                                    <div class="reservation-calendar_custom">

                                        <div class="reservation-calendar_title">
                                            <span class="reservation-calendar_month">JANUARY</span>
                                            <span class="reservation-calendar_year">2022</span>

                                            <a href="#" class="reservation-calendar_prev reservation-calendar_corner"><i class="lotus-icon-left-arrow"></i></a>
                                        </div>

                                        <table class="reservation-calendar_tabel">
                                            <thead>
                                                <tr>
                                                    <th>Su</th>
                                                    <th>Mo</th>
                                                    <th>Tu</th>
                                                    <th>We</th>
                                                    <th>Th</th>
                                                    <th>Fr</th>
                                                    <th>Sa</th>
                                                </tr>
                                            </thead>
                                            <tr>
                                                <td></td>
                                                <td class="reservation-calendar_current-date">
                                                    <a href="#"><small>1</small> <span>Today</span></a>
                                                </td>
                                                <td class="current-select"><a href="#"><small>2</small> <span>Arrive</span></a></td>
                                                <td class="current-select"><a href="#"><small>3</small></a></td>
                                                <td class="current-select"><a href="#"><small>4</small></a></td>
                                                <td class="current-select"><a href="#"><small>5</small> <span>Depart</span></a></td>
                                                <td><a href="#"><small>6</small></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><small>7</small></a></td>
                                                <td><a href="#"><small>8</small></a></td>
                                                <td><a href="#"><small>9</small></a></td>
                                                <td><a href="#"><small>10</small></a></td>
                                                <td class="reservation-calendar_current-select"><a href="#"><small>11</small></a></td>
                                                <td class="reservation-calendar_current-select"><a href="#"><small>12</small></a></td>
                                                <td><a href="#"><small>13</small></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><small>14</small></a></td>
                                                <td><a href="#"><small>15</small></a></td>
                                                <td><a href="#"><small>16</small></a></td>
                                                <td><a href="#"><small>17</small></a></td>
                                                <td><a href="#"><small>18</small></a></td>
                                                <td><a href="#"><small>19</small></a></td>
                                                <td><a href="#"><small>20</small></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><small>21</small></a></td>
                                                <td><a href="#"><small>22</small></a></td>
                                                <td><a href="#"><small>23</small></a></td>
                                                <td><a href="#"><small>24</small></a></td>
                                                <td><a href="#"><small>25</small></a></td>
                                                <td><a href="#"><small>26</small></a></td>
                                                <td><a href="#"><small>27</small></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><small>28</small></a></td>
                                                <td><a href="#"><small>29</small></a></td>
                                                <td><a href="#"><small>30</small></a></td>
                                                <td><a href="#"><small>31</small></a></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="reservation-calendar_custom">

                                        <div class="reservation-calendar_title">
                                            <span class="reservation-calendar_month">FEBRUARY</span>
                                            <span class="reservation-calendar_year">2022</span>

                                            <a href="#" class="reservation-calendar_next reservation-calendar_corner"><i class="lotus-icon-right-arrow"></i></a>
                                        </div>

                                        <table class="reservation-calendar_tabel">
                                            <thead>
                                                <tr>
                                                    <th>Su</th>
                                                    <th>Mo</th>
                                                    <th>Tu</th>
                                                    <th>We</th>
                                                    <th>Th</th>
                                                    <th>Fr</th>
                                                    <th>Sa</th>
                                                </tr>
                                            </thead>
                                            <tr>
                                                <td></td>
                                                <td class="reservation-calendar_current-date">
                                                    <a href="#"><small>1</small> <span>Today</span></a>
                                                </td>
                                                <td class="current-select"><a href="#"><small>2</small> <span>Arrive</span></a></td>
                                                <td class="current-select"><a href="#"><small>3</small></a></td>
                                                <td class="current-select"><a href="#"><small>4</small></a></td>
                                                <td class="current-select"><a href="#"><small>5</small> <span>Depart</span></a></td>
                                                <td><a href="#"><small>6</small></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><small>7</small></a></td>
                                                <td><a href="#"><small>8</small></a></td>
                                                <td><a href="#"><small>9</small></a></td>
                                                <td><a href="#"><small>10</small></a></td>
                                                <td class="reservation-calendar_current-select"><a href="#"><small>11</small></a></td>
                                                <td class="reservation-calendar_current-select"><a href="#"><small>12</small></a></td>
                                                <td><a href="#"><small>13</small></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><small>14</small></a></td>
                                                <td><a href="#"><small>15</small></a></td>
                                                <td><a href="#"><small>16</small></a></td>
                                                <td><a href="#"><small>17</small></a></td>
                                                <td><a href="#"><small>18</small></a></td>
                                                <td><a href="#"><small>19</small></a></td>
                                                <td><a href="#"><small>20</small></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><small>21</small></a></td>
                                                <td><a href="#"><small>22</small></a></td>
                                                <td><a href="#"><small>23</small></a></td>
                                                <td><a href="#"><small>24</small></a></td>
                                                <td><a href="#"><small>25</small></a></td>
                                                <td><a href="#"><small>26</small></a></td>
                                                <td><a href="#"><small>27</small></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><small>28</small></a></td>
                                                <td><a href="#"><small>29</small></a></td>
                                                <td><a href="#"><small>30</small></a></td>
                                                <td><a href="#"><small>31</small></a></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>
        <!-- END / RESERVATION -->

    <?php
    get_footer();
     ?>
