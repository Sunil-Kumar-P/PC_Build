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

<style>
  .card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
  }
</style>

<?php
// include "db_conn.php";
$no = $_GET['no'];
require_once 'conn.php';

$sql = "SELECT * FROM BUILD b, CPU c, GPU g, MotherBoard m, RAM r, STORAGE s WHERE b.Mno=m.Mno and b.Cno=c.Cno and b.Gno=g.Gno and b.Rno=r.Rno and b.Sno=s.Sno and Buildno='$no'";
$result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);

while ($row = $result->fetch_array(SQLITE3_ASSOC)) {
  $Buildno = $row['Buildno'];
  $Mno = $row['Mno'];
  $Cno = $row['Cno'];
  $Rno = $row['Rno'];
  $Sno = $row['Sno'];
  $Gno = $row['Gno'];

  $Mimg = $row['Mimg'];
  $CPUimg = $row['CPUimg'];
  $GPUimg = $row['GPUimg'];
  $RAMimg = $row['RAMimg'];
  $Simg = $row['Simg'];

  $Mname = $row['Mname'];
  $Cname = $row['Cname'];
  $Gname = $row['Gname'];
  $Sname = $row['Sname'];
  $Rname = $row['Rname'];

  $Mprice = $row['Mprice'];
  $Cprice = $row['Cprice'];
  $Gprice = $row['Gprice'];
  $Rprice = $row['Rprice'];
  $Sprice = $row['Sprice'];


  $Refervideo = $row['Refervideo'];

  $Total = $row['Total'];
}

?>

<div class="extragap"></div>
<div class="card-group">
  <div class="card">
    <a href="./motherboard.php?no=<?php echo $Mno; ?>">
      <!-- <img src="./img/mb1.png" class="card-img-top" alt="..."> -->
      <?php echo '<img class="card-img-top" alt="..." src="data:image/png;base64,' . base64_encode($Mimg) . '">';  ?>

      <div class="card-body">
        <h5 class="card-title"><?php echo $Mname; ?></h5>
        <p class="card-text">MotherBoard</p>
        <p class="card-text"><small class="text-muted">Price: <span>&#8377;</span> <?php echo $Mprice; ?></small></p>
      </div>
    </a>
  </div>
  <div class="card">
    <a href="./cpu.php?no=<?php echo $Cno; ?>">
      <!-- <img src="./img/cpu1.jpg" class="card-img-top" alt="..."> -->
      <?php echo '<img class="card-img-top" alt="..." src="data:image/png;base64,' . base64_encode($CPUimg) . '">';  ?>

      <div class="card-body">
        <h5 class="card-title"><?php echo $Cname; ?></h5>
        <p class="card-text">CPU</p>
        <p class="card-text"><small class="text-muted">Price:  <span>&#8377;</span> <?php echo $Cprice; ?></small></p>
      </div>
    </a>
  </div>
  <div class="card">
    <a href="./ram.php?no=<?php echo $Rno; ?>">
      <!-- <img src="./img/ram1.jpg" class="card-img-top" alt="..."> -->
      <?php echo '<img class="card-img-top" alt="..." src="data:image/png;base64,' . base64_encode($RAMimg) . '">';  ?>
      <div class="card-body">
        <h5 class="card-title"><?php echo $Rname; ?></h5>
        <p class="card-text">RAM</p>
        <p class="card-text"><small class="text-muted">Price:  <span>&#8377;</span> <?php echo $Rprice; ?></small></p>
      </div>
    </a>
  </div>
  <div class="card">
    <a href="./gpu.php?no=<?php echo $Gno; ?>">
      <!-- <img src="./img/gpu1.jpeg" class="card-img-top" alt="..."> -->
      <?php echo '<img class="card-img-top" alt="..." src="data:image/png;base64,' . base64_encode($GPUimg) . '">';  ?>

      <div class="card-body">
        <h5 class="card-title"><?php echo $Gname; ?></h5>
        <p class="card-text">GPU</p>
        <p class="card-text"><small class="text-muted">Price: <span>&#8377;</span> <?php echo $Gprice; ?></small></p>
      </div>
    </a>
  </div>
  <div class="card">
    <a href="./storage.php?no=<?php echo $Sno; ?>">
      <!-- <img src="./img/ssd1.jpg" class="card-img-top" alt="..."> -->
      <?php echo '<img class="card-img-top" alt="..." src="data:image/png;base64,' . base64_encode($Simg) . '">';  ?>

      <div class="card-body">
        <h5 class="card-title"><?php echo $Sname; ?></h5>
        <p class="card-text">STORAGE</p>
        <p class="card-text"><small class="text-muted">Price:  <span>&#8377;</span> <?php echo $Sprice; ?></small></p>
      </div>
    </a>
  </div>
</div>
<div class="container">
  <div class="embed-responsive embed-responsive-21by9">
    <iframe width="560" height="315" src="<?php echo $Refervideo ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>
</div>

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
