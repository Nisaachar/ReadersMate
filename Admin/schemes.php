<!DOCTYPE html>
<html>
<?php
if(!isset($_SESSION)) session_start(); ?>
<?php include 'includes/head.php';?>
<?php include 'includes/database.php';?>
<?php

include 'counter.php';

?>

<body>
    <?php include 'includes/header.php';?>
    <?php include 'includes/sidebar.php';?>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">


   <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Schemes</h1>
			</div>
		</div><!--/.row-->
    <table class="table table-striped table-dark"  cellspacing="0" width="100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"><em class="fa fa-calendar " style="font-size: 1.25em;">&nbsp;</em>Days</th>

      <th scope="col">Discount (%)</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
      include_once 'includes/database.php';
      $que="select * from tbl_scheme";
      $i=1;
      $run=mysqli_query($conn,$que);
      $ok=$run;
      while($row=mysqli_fetch_array($ok))
      {
        $days = $row['days'];
        $rate = $row['rate'];
        $text = $row['text'];
        $discount = (1-$rate)*100;

        ?>
        <th scope="row"><?php echo $i ?></th>
        <td><?php
        if($days == 0)
        {
          echo 'LifeTime';
        }
        else {
          echo $days;
        }
        ?></td>

        <td><?php echo $discount ?></td>
        <td><?php echo $text ?></td>
    </tr>
      <?php $i++; } ?>
  </tbody>
</table>
  </div>


  </body>
  <?php include 'includes/footer.php'?>

  <?php include 'includes/scripts.php'?>

  </html>
