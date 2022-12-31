<?php 
    require_once 'includes/header.php';
?>


<?php
// include "db_conn.php";

require_once 'conn.php';

$sql = 'SELECT * FROM BUILD';
$result = mysqli_query($conn, $sql);

// $row = mysqli_fetch_assoc($result);
//

?>


<div class="extragap"></div>
<section class="bg-dark text-light">
    <div class="container">
        all our products are certified.
    </div>
  </section>

<div class="container align-center card-group">
<?php

  while ($row = $result->fetch_array(SQLITE3_ASSOC)) {
    for ($i = 0; $i < 2; $i++) {
    $Buildno = $row['Buildno'];

    $Refervideo = $row['Refervideo'];


    $Total = $row['Total'];
?>
  <div class="card gap-2" style="width: 18rem;">
    <img src="img/pc.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $Buildno ?></h5>
      <p class="card-text"><?php echo $Refervideo ?></p>
      <a href="product_view.php" class="btn btn-primary">view</a>
    </div>
  </div>
  <?php }} ?>
</div>

 
<?php require_once 'includes/footer.php';?>


  