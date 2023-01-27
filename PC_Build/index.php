  <?php
  // require_once 'includes/header.php';
  ?>

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
      background-color:black;
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
        <h3 class="mb-3 mb-md-0">Latest Combinations</h3>


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

  <?php // require_once 'includes/footer.php'; ?>