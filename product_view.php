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

require_once 'conn.php';

$sql = 'SELECT Mname, Cname, Gname, Sname, Rname, Mprice, Buildno, Cprice, Gprice, Rprice, Sprice FROM BUILD b, CPU c, GPU g, MotherBoard m, RAM r, STORAGE s WHERE b.Mno=m.Mno and b.Cno=c.Cno and b.Gno=g.Gno and b.Rno=r.Rno and b.Sno=s.Sno';
$result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);

while ($row = $result->fetch_array(SQLITE3_ASSOC)) {
  $Buildno = $row['Buildno'];

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
    <a href="./motherboard.php">
      <img src="./img/mb1.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $Mname; ?></h5>
        <p class="card-text">MotherBoard</p>
        <p class="card-text"><small class="text-muted">Price:<?php echo $Mprice; ?></small></p>
      </div>
    </a>
  </div>
  <div class="card">
    <a href="./cpu.php">
      <img src="./img/cpu1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $Cname; ?></h5>
        <p class="card-text">CPU</p>
        <p class="card-text"><small class="text-muted">Price:<?php echo $Cprice; ?></small></p>
      </div>
    </a>
  </div>
  <div class="card">
    <a href="./ram.php">
      <img src="./img/ram1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $Rname; ?></h5>
        <p class="card-text">RAM</p>
        <p class="card-text"><small class="text-muted">Price:<?php echo $Rprice; ?></small></p>
      </div>
    </a>
  </div>
  <div class="card">
    <a href="./gpu.php">
      <img src="./img/gpu1.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $Gname; ?></h5>
        <p class="card-text">GPU</p>
        <p class="card-text"><small class="text-muted">Price:<?php echo $Gprice; ?></small></p>
      </div>
    </a>
  </div>
  <div class="card">
    <a href="./storage.php">
      <img src="./img/ssd1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $Sname; ?></h5>
        <p class="card-text">STORAGE</p>
        <p class="card-text"><small class="text-muted">Price:<?php echo $Sprice; ?></small></p>
      </div>
    </a>
  </div>
</div>



<?php require_once 'includes/footer.php'; ?>