<?php
require_once 'includes/header.php';
?>


<?php

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

    $Buildno = $row['Buildno'];
    $Bimg = $row['Bimg'];


    $Total = $row['Total'];

  ?>
    <div class="card gap-2" style="width: 18rem;">
      <!-- <img src="img/pc.jpg" class="card-img-top" alt="..."> -->
      <?php echo '<img class="card-img-top" width="30%" height="50%" alt="..." src="data:image/png;base64,' . base64_encode($Bimg) . '">';  ?>

      <div class="card-body">
        <h5 class="card-title">BUILD <?php echo $Buildno ?></h5>
        <p class="card-text"> <span>&#8377;</span> <?php echo $Total ?></p>
        <a href="product_view.php?no=<?php echo $Buildno; ?>" class="btn btn-primary">view</a>
      </div>
    </div>
  <?php } ?>
</div>


<?php require_once 'includes/footer.php'; ?>
