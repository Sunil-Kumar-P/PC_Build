<?php
require_once 'includes/header.php';
?>
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
<?php require_once 'includes/footer.php'; ?>