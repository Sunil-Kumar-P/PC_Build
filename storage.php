<?php 
    require_once 'includes/header.php';
?>
  <div class="extragap"></div>
  
  
<?php
// include "db_conn.php";

$no = $_GET['no'];
require_once 'conn.php';

$sql = "SELECT * FROM STORAGE WHERE Sno='$no'";
$result = mysqli_query($conn, $sql);

// $row = mysqli_fetch_assoc($result);

while ($row = $result->fetch_array(SQLITE3_ASSOC)) {
  $no = $row['Sno'];

  $name = $row['Sname'];

  $Price = $row['Sprice'];

  $Description = $row['Description'];

  $img = $row['Simg'];
}

?>

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
        <!-- <img src="img/ram1.jpg" class="d-block w-100" alt="..."> -->
        <?php echo '<img class="d-block w-100" alt="..." src="data:image/png;base64,' . base64_encode($img) . '">';  ?>

      </div>
      <div class="carousel-item">
        <!-- <img src="img/ram1.jpg" class="d-block w-100" alt="..."> -->
        <?php echo '<img class="d-block w-100" alt="..." src="data:image/png;base64,' . base64_encode($img) . '">';  ?>

      </div>
      <div class="carousel-item">
        <!-- <img src="img/ram1.jpg" class="d-block w-100" alt="..."> -->
        <?php echo '<img class="d-block w-100" alt="..." src="data:image/png;base64,' . base64_encode($img) . '">';  ?>

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
  <h1><?php echo $name; ?></h1>
  <p><?php echo $Description; ?></p>
  <h1><mark> <span>&#8377;</span> <?php echo $Price; ?>/-</mark></h1>
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


      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/guidebook.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/gram1.jpg" class="d-block w-100" alt="...">

        </div>
        <div class="carousel-item">
          <img src="img/gram2.png" class="d-block w-100" alt="...">

        </div>
        <div class="carousel-item">
          <img src="img/gram3.png" class="d-block w-100" alt="...">

        </div>
        <div class="carousel-item">
          <img src="img/gram4.png" class="d-block w-100" alt="...">

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






  



    <?php require_once 'includes/footer.php';?>