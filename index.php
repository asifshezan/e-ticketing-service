<?php
  require_once('functions/function.php');
  get_header();
 ?>



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


        <?php
        get_footer();
         ?>
