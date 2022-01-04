<?php
  require_once('functions/function.php');
  get_header();
 ?>



    <!-- SUB BANNER -->
    <section class="section-sub-banner bg-9">
        <div class="sub-banner">
            <div class="container">
                <div class="text text-center">
                    <h2>CONTACT WITH US</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing</p>
                </div>
            </div>

        </div>

    </section>
    <!-- END / SUB BANNER -->

    <!-- CONTACT -->
    <section class="section-contact">
        <div class="container">
            <div class="contact">
                <div class="row">

                    <div class="col-md-6 col-lg-5">

                        <div class="text">
                            <h2>Contact</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                            <ul>
                                <li><i class="icon lotus-icon-location"></i> Purbanchal Road, Uttar Badda.</li>
                                <li><i class="icon lotus-icon-phone"></i> 01516788837</li>
                                <li><i class="icon fa fa-envelope-o"></i> bdticket@gmail.com</li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-md-6 col-lg-6 col-lg-offset-1">
                        <div class="contact-form">
                          <?php
                            if(!empty($_POST)){
                              $name=$_POST['name'];
                              $email=$_POST['email'];
                              $subject=$_POST['subject'];
                              $message=$_POST['message'];

                              $insert="INSERT INTO contact(con_name,con_email,con_subject,con_message)VALUES('$name','$email','$subject','$message')";

                              if(mysqli_query($con,$insert)){
                                echo "Successfully Send Your Message.";
                              }else{
                                echo "Oppss! Failed to send your Message.!";
                              }
                            }
                           ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" class="field-text"  name="name" placeholder="Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="field-text" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="text" class="field-text" name="subject" placeholder="Subject">
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea cols="30" rows="10" name="message"  class="field-textarea" placeholder="Write what do you want"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="submit" class="awe-btn awe-btn-13">SEND</button>
                                    </div>
                                </div>
                                <div id="contact-content"></div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END / CONTACT -->

    <!-- MAP -->
    <section class="section-map">
        <h1 class="element-invisible">Map</h1>
        <div class="contact-map">
            <div id="map" data-locations="39.0926986,-94.5747324--39.0912284,-94.5743515" data-center="39.0926986,-94.5747324"></div>
        </div>
    </section>
    <!-- END / MAP -->


      <?php
      get_footer();
       ?>
