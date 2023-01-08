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



<section style="background-color:#F4B746;">

  <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
        <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 10"></button> -->

      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/guidebook.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/gcpu.jpg" class="d-block w-100" alt="...">

        </div>
        <div class="carousel-item">
          <img src="img/gcpu1.jpg" class="d-block w-100" alt="...">

        </div>
        <div class="carousel-item">
          <img src="img/gcpu2.jpg" class="d-block w-100" alt="...">

        </div>
        <div class="carousel-item">
          <img src="img/gcpu3.jpg" class="d-block w-100" alt="...">

        </div>
        <div class="carousel-item">
          <img src="img/gcpu4.jpg" class="d-block w-100" alt="...">

        </div>
        <div class="carousel-item">
          <img src="img/gcpu5.jpg" class="d-block w-100" alt="...">

        </div>
        <div class="carousel-item">
          <img src="img/gcpu6.jpg" class="d-block w-100" alt="...">

        </div>
        <div class="carousel-item">
          <img src="img/gcpu7.jpg" class="d-block w-100" alt="...">

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

</section>

<section class="bg-dark text-light">
  <div class="embed-responsive embed-responsive-16by9">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/hncroWOKtbI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>
</section>



<?php require_once 'includes/footer.php'; ?>