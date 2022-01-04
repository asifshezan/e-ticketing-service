<?php
  require_once('functions/function.php');
  get_header();
  get_sidebar();
 ?>
    <div class="col-md-12 main_content">
    <div class="card">
      <div class="card-header">
          <div class="row">
              <div class="col-md-8">
                    <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> All Contact Message</h4>
              </div>

              <div class="clearfix"></div>
          </div>
      </div>
      <div class="card-body">
          <table class="table table-bordered table-striped table-hover custom_table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                <th scope="col">Manage</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sel="SELECT * FROM contact ORDER BY con_id ASC";
              $qr=mysqli_query($con,$sel);
              while($data=mysqli_fetch_assoc($qr)) {

              ?>
              <tr>
                <td><?= $data['con_name']; ?></td>
                <td><?= $data['con_email']; ?></td>
                <td><?= $data['con_subject']; ?></td>
                <td><?= $data['con_message']; ?></td>
                <td>
                    <a href="delete-con-message.php?d=<?= $data['con_id']; ?>"><i class="fa fa-trash fa-lg"></i></a>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
      </div>
      <div class="card-footer text-center">
          .
      </div>
    </div>
    </div>
<?php
get_footer();
?>
