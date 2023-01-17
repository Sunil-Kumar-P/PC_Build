<?php
require_once 'includes/header.php';
?>



<!-- Showcase -->
<section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
  <div class="container">
    <div class="d-sm-flex align-items-center justify-content-between">
      <div>

        <p class="lead my-4 text-light">
        <h3>Want a Better PC? Try Building Your Own.</h3><br>
        Assembling a computer yourself is a good way to learn how they work.
        </p>
        <a href="product.php" class="btn btn-primary btn-lg">CLICK HERE TO CHECK COMBINATIONS!</a>
      </div>
      <img class="img-fluid w-50 d-none d-sm-block" src="img/pc.jpg" alt="" />
    </div>
  </div>
</section>

<!--another-->
<section class="bg-secondary text-light p-5">
  <div class="container">
    <div class="d-md-flex justify-content-between align-items-center">
      <h3 class="mb-3 mb-md-0">Latest Offers</h3>


    </div>
  </div>
</section>

<?php
// include "db_conn.php";
require_once 'conn.php';

$sql = 'SELECT * FROM BUILD ORDER BY Buildno DESC';
$result = mysqli_query($conn, $sql);

// $row = mysqli_fetch_assoc($result);
//

?>

<!-- Boxes -->
<section class="p-5">
  <div class="container">
    <div class="row text-center g-4">
      <?php

      while ($row = $result->fetch_array(SQLITE3_ASSOC)) {

        $Buildno = $row['Buildno'];
        $Bimg = $row['Bimg'];
        $Total = $row['Total'];
        

      ?>
        <div class="card" style="width: 18rem;">
          <!-- <img src="img/pc2.png" class="card-img-top" alt="..."> -->
          <?php echo '<img class="card-img-top width="30%" height="50%"" alt="..." src="data:image/png;base64,' . base64_encode($Bimg) . '">';  ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $Buildno ?></h5>
            <p class="card-text"><?php echo $Total ?></p>
            <a href="product_view.php?no=<?php echo $Buildno; ?>" class="btn btn-primary">view</a>
          </div>
        </div>
      <?php } ?>

    </div>
  </div>
</section>
<!-- MORE Sections -->
<section id="learn" class="p-5" style="background-color:#F4B746;">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-md">
        <img src="./img/guidebook.png" class="img" alt="" width="700" height="500" />
      </div>
      <div class="col-md p-5">
        <h2>Guide</h2>
        <p class="lead">
          Do what you can, with what you have, where you are
        </p>
        <p>

        </p>
        <a href="guide.php" class="btn btn-light mt-3">
          <i class="bi bi-chevron-right"></i> Read More
        </a>
      </div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>