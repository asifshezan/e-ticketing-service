<?php
  require_once('functions/function.php');
  get_header();
  get_sidebar();
  if(!empty($_POST)){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $user=$_POST['user'];
    $pw=md5($_POST['pass']);

    $insert="INSERT INTO ad_user(user_name,user_phone,user_email,user_username,user_password)
        VALUES('$name','$phone','$email','$user','$pw')";

        if(mysqli_query($con,$insert)){
          echo "Succesfully create new user.";
        }else{
          echo "Opps! user registration failed!";
        }
      }
 ?>

  <div class="col-md-12 main_content">
      <form method="post" action="" enctype="multipart/form-data">
        <div class="card">
          <div class="card-header">
              <div class="row">
                  <div class="col-md-8">
                        <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> User Registration</h4>
                  </div>
                  <div class="col-md-4 text-right">
                      <a class="btn btn-sm btn-dark card_top_btn" href="all-user.php"><i class="fa fa-th"></i> All User</a>
                  </div>
                  <div class="clearfix"></div>
              </div>
          </div>
          <div class="card-body">
               <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label">Name:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="" name="name">
                  </div>
                </div>
                <div class="form-group row custom_form_group">
                   <label class="col-sm-3 col-form-label">Phone:</label>
                   <div class="col-sm-7">
                     <input type="text" class="form-control" id="" name="phone">
                   </div>
                 </div>
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label">Email:</label>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" id="" name="email">
                  </div>
                </div>
                <div class="form-group row custom_form_group">
                   <label class="col-sm-3 col-form-label">UserName:</label>
                   <div class="col-sm-7">
                     <input type="text" class="form-control" id="" name="user">
                   </div>
                 </div>
                 <div class="form-group row custom_form_group">
                    <label class="col-sm-3 col-form-label">Password:</label>
                    <div class="col-sm-7">
                      <input type="password" class="form-control" id="" name="pass">
                    </div>
                  </div>
                  <div class="form-group row custom_form_group">
                     <label class="col-sm-3 col-form-label">Confirm Password:</label>
                     <div class="col-sm-7">
                       <input type="password" class="form-control" id="" name="repass">
                     </div>
                   </div>

                    </div>
                  <div class="card-footer text-center">
                      <button type="submit" class="btn btn-sm btn-dark submit_btn">REGISTRATION</button>
                  </div>
        </div>
    </form>
  </div>
  <?php
  get_footer();
   ?>
