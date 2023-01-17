<?php
require_once 'includes/header.php';
?>

<?php
// include "db_conn.php";
$no = $_GET['no'];

require_once 'conn.php';

$sql = "SELECT * FROM MotherBoard WHERE Mno='$no'";
$result = mysqli_query($conn, $sql);

// $row = mysqli_fetch_assoc($result);

while ($row = $result->fetch_array(SQLITE3_ASSOC)) {
  $Mno = $row['Mno'];

  $Mname = $row['Mname'];

  $Price = $row['Mprice'];

  $Description = $row['Description'];

  $Mimg = $row['Mimg'];

  // echo '<img class="d-block w-100" alt="..." src="data:image/png;base64,'.base64_encode($img).'"/>';
}

?>
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
        <?php echo '<img class="d-block w-100" alt="..." src="data:image/png;base64,' . base64_encode($Mimg) . '">';  ?>
      </div>
      <div class="carousel-item">
        <!-- <img src="img/mb1.png" class="d-block w-100" alt="..."> -->
        <?php echo '<img class="d-block w-100" alt="..." src="data:image/png;base64,' . base64_encode($Mimg) . '">';  ?>

      </div>
      <div class="carousel-item">
        <!-- <img src="img/mb1.jpg" class="d-block w-100" alt="..."> -->
        <?php echo '<img class="d-block w-100" alt="..." src="data:image/png;base64,' . base64_encode($Mimg) . '">';  ?>

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
  <h1><?php echo $Mname; ?></h1>
  <p><?php echo $Description; ?></p>
  <h1><mark> <span>&#8377;</span> <?php echo $Price; ?>/-</mark></h1>
</div>





<?php require_once 'includes/footer.php'; ?>