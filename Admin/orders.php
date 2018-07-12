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
         <h1 class="page-header">Orders</h1>

       </div>

     </div><!--/.row-->
    <table class="table table-striped">
      <!-- <caption><em class="fa fa-user-secret" style="font-size: 1.25em;">&nbsp;</em>(Admin)</caption> -->
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Order No</th>

      <th scope="col">Scheme</th>
      <th scope="col">User Ordered</th>
      <th scope="col">Book Ordered</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
      include_once 'includes/database.php';
      $que="select * from tbl_orders";
      $i=1;
      $run=mysqli_query($conn,$que);
      $ok=$run;
      while($row=mysqli_fetch_array($ok))
      {
        $order_no = $row['order_no'];
        $order_date = $row['order_date'];
        $scheme_id = $row['scheme_id'];

        $lid = $row['lid'];
        $book_id = $row['book_id'];?>
        <th scope="row"><?php echo $i ?></th>
        <td><?php echo $scheme_id?></td> <!--currently showing schme_id but needs to show text by running a new query for tbl_scheme-->

        <td><?php echo $lid ?></td> <!--currently showing lid but needs to show Name by running a new query for tbl_login -->
        <td><?php echo $book_id?></td> <!--currently showing book_id but needs to show Book Name by running a new query for tbl_book_details -->
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
