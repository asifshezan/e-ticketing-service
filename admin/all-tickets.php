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
                    <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> All Tickets Details</h4>
              </div>

              <div class="clearfix"></div>
          </div>
      </div>
      <div class="card-body">
          <table class="table table-bordered table-striped table-hover custom_table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Arrive Date</th>
                <th scope="col">Departure Date</th>
                <th scope="col">Adult</th>
                <th scope="col">Children</th>
      
              </tr>
            </thead>
            <tbody>
              <?php
              $sel="SELECT * FROM ticket_book ORDER BY ticket_id ASC";
              $qr=mysqli_query($con,$sel);
              while($data=mysqli_fetch_assoc($qr)) {

              ?>
              <tr>
                <td><?= $data['ticket_arrive']; ?></td>
                <td><?= $data['ticket_departure']; ?></td>
                <td><?= $data['ticket_adults']; ?></td>
                <td><?= $data['ticket_children']; ?></td>

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
