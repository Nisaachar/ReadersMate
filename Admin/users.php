<!doctype html>
<html lang="en">
<?php include 'includes/head.php';?>

<?php
if(!isset($_SESSION)) session_start();
if(isset($_SESSION['admin']))
    {
        ?>

<body>
  <?php include 'includes/header.php';?>
  <?php include 'includes/sidebar.php';?>
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
       <div class="col-lg-10">
         <h1 class="page-header">User Base</h1>

       </div>

     </div><!--/.row-->
    <table class="table table-striped">
      <caption class="text-right"><em class="fa fa-user-secret " style="font-size: 1.25em;">&nbsp;</em>(Admin)</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"><em class="fa fa-user-circle " style="font-size: 1.25em;">&nbsp;</em>Users</th>

      <th scope="col"><em class="fa fa-envelope " style="font-size: 1.25em;">&nbsp;</em>E-mail</th>
      <th scope="col"><em class="fa fa-phone " style="font-size: 1.25em;">&nbsp;</em>Phone No.</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
      include_once 'includes/database.php';
      $que="select * from tbl_login";
      $i=1;
      $run=mysqli_query($conn,$que);
      $ok=$run;
      while($row=mysqli_fetch_array($ok))
      {
        $fname = $row['first_name'];
        $lname = $row['last_name'];
        $phone_no = $row['phone_no'];
        $email = $row['email'];
        $admin_status = $row['admin_status'];?>
        <th scope="row"><?php echo $i ?></th>
        <td><?php echo '<strong>'.$fname.' '.$lname; if($admin_status == 1) echo ' &nbsp;<em class="fa fa-user-secret" style="font-size: 1.25em;">&nbsp;</em>'; ?></td>

        <td><?php echo $email ?></td>
        <td><?php echo '<em><strong>(+91) </strong></em>'.$phone_no ?></td>
    </tr>
      <?php $i++; } ?>
  </tbody>
</table>
<div class="row">
  <div class="col-sm-10">

  </div>
  <div class="col-sm-2">


  </div>

</div>
  </div>

</body>



  <?php   }
  else {
    header('location: login.php');
  }?>
<?php include 'includes/footer.php';?>
</html>
