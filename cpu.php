<?php
require_once 'includes/header.php';
?>

<?php
// include "db_conn.php";

require_once 'conn.php';

$sql = 'SELECT * FROM CPU WHERE Cno=1';
$result = mysqli_query($conn, $sql);

// $row = mysqli_fetch_assoc($result);

while ($row = $result->fetch_array(SQLITE3_ASSOC)) {
  $Cno = $row['Cno'];

  $Cname = $row['Cname'];

  $Price = $row['Cprice'];

  $Description = $row['Description'];

  $CPUimg = $row['CPUimg'];
}

?>

<style>
    .card-img-top {
      width: 100%;
      height: 15vw;
      object-fit: cover;
    }
</style>

<div class="extragap"></div>

<section class="bg-dark text-light">
  <div class="container">
    all our products are certified.
  </div>
</section>

<div class="container">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <!-- <img src="img/mb1.png" class="d-block w-100" alt="..."> -->
        <?php echo '<img class="d-block w-100" alt="..." src="data:image/png;base64,' . base64_encode($CPUimg) . '">';  ?>
      </div>
      <div class="carousel-item">
        <!-- <img src="img/mb1.png" class="d-block w-100" alt="..."> -->
        <?php echo '<img class="d-block w-100" alt="..." src="data:image/png;base64,' . base64_encode($CPUimg) . '">';  ?>

      </div>
      <div class="carousel-item">
        <!-- <img src="img/mb1.jpg" class="d-block w-100" alt="..."> -->
        <?php echo '<img class="d-block w-100" alt="..." src="data:image/png;base64,' . base64_encode($CPUimg) . '">';  ?>

      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>


<div class="container">
  <h1><?php echo $Cname; ?></h1>
  <p><?php echo $Description; ?></p>
  <h1><mark>Rs.<?php echo $Price; ?>/-</mark></h1>
</div>

<section class="bg-dark text-light p-5">
  <div class="container align-center card-group">
    <?php
   // $sql = 'SELECT * FROM CPU';
   $sql = 'SELECT * FROM BUILD b, CPU c WHERE b.Cno=c.Cno';

    $result = mysqli_query($conn, $sql);

    while ($row = $result->fetch_array(SQLITE3_ASSOC)) {
      // $Cno = $row['Cno'];
      $Buildno = $row['Buildno'];

      $Bimg = $row['Bimg'];

      $Total = $row['Total'];

      $Price = $row['Price'];

      $Description = $row['Description'];

      $CPUimg = $row['CPUimg'];

    ?>
      <div class="card gap-2" style="width: 18rem;">
        <!-- <img src="img/" class="card-img-top" alt="..."> -->
        <?php echo '<img class="card-img-lg" alt="..." src="data:image/png;base64,' . base64_encode($Bimg) . '">';  ?>
        <div class="card-body">
          <h5 class="card-title"> <?php echo $Buildno ?></h5>
          <p class="card-text"><?php echo $Total ?></p>
          <a href="product_view.php" class="btn btn-primary">view</a>
        </div>
      </div>
    <?php } ?>
  </div>
  </div>
</section>



  <?php require_once 'includes/footer.php'; ?>