<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PC BUILD</title>
  <link rel="stylesheet" href="./css/bootstrap.min.css">

  <link rel="stylesheet" href="style.css" />
  <title>PC BUILD</title>

  <style>
    .extragap {
      margin-top: 5.1%;
    }

    a {
      text-decoration: none;
    }

    .extragap1 {
      background-color: black;
      margin-top: 5%;
    }

    p {
      color: black;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary navbar-dark py-3 fixed-top">
    <div class="container">
      <a href="index.php" class="navbar-brand">PC BUILD</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">

          <li class="nav-item">
            <a href="index.php" class="nav-link">HOME</a>
          </li>
          <li class="nav-item">
            <a href="product.php" class="nav-link">BUILD</a>
          </li>
          <li class="nav-item">
            <a href="question.php" class="nav-link">QUESTIONS</a>
          </li>
          <!-- <li class="nav-item">
            <a href="about.php" class="nav-link">ABOUT US</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>


  <?php
  // include "db_conn.php";

  $no = $_GET['no'];
  require_once 'conn.php';

  $sql = "SELECT * FROM GPU WHERE Gno='$no'";
  $result = mysqli_query($conn, $sql);

  // $row = mysqli_fetch_assoc($result);

  while ($row = $result->fetch_array(SQLITE3_ASSOC)) {
    $Gno = $row['Gno'];

    $Gname = $row['Gname'];

    $Price = $row['Gprice'];

    $Description = $row['Description'];

    $GPUimg = $row['GPUimg'];

    $link = $row['link'];
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
          <!-- <img src="img/ram1.jpg" class="d-block w-100" alt="..."> -->
          <?php echo '<img class="d-block w-100" alt="..." src="data:image/png;base64,' . base64_encode($GPUimg) . '">';  ?>

        </div>
        <div class="carousel-item">
          <!-- <img src="img/ram1.jpg" class="d-block w-100" alt="..."> -->
          <?php echo '<img class="d-block w-100" alt="..." src="data:image/png;base64,' . base64_encode($GPUimg) . '">';  ?>

        </div>
        <div class="carousel-item">
          <!-- <img src="img/ram1.jpg" class="d-block w-100" alt="..."> -->
          <?php echo '<img class="d-block w-100" alt="..." src="data:image/png;base64,' . base64_encode($GPUimg) . '">';  ?>

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
    <h1><?php echo $Gname; ?></h1>
    <p><?php echo $Description; ?></p>
    <h1><mark> <span>&#8377;</span> <?php echo $Price; ?>/-</mark></h1>
  </div>


<hr>
  <div class="d-grid gap-2 col-6 mx-auto">
    <a type="submit" href="<?php echo $link; ?>" class="float-right btn btn-success form-control" target="_blank">Buy</a>
    <br>
  </div>



  <section style="background-color:#F4B746;">
    <div class="container" style="background-color:#F4B441;">
      <center><h1><b>Guide</b></h1></center>
    </div>
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




  <section class="bg-secondary extragap">
  </section>
  <footer class="p-5 bg-dark text-light text-center position-relative bottom-0 end-0">

    <div class="container">
      <p class="lead text-light">Copyright &copy; 2022-23 <br> DBMS MINI PROJECT</p>

      <a href="#" class="position-absolute bottom-0 end-0 p-5">
        <i class="bi bi-arrow-up-circle h1"></i>
      </a>
    </div>
  </footer>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> -->

  <script src="./js/bootstrap.min.js"></script>


</body>

</html>