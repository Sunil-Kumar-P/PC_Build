<?php
require_once '../conn.php';
// $selectQuery = "SELECT * FROM `CPU` ORDER BY sem";
// $squery = mysqli_query($conn, $selectQuery);
if($_SERVER['REQUEST_METHOD']=='POST'){
   $gpuno = $_POST['gpuno'];
   $delq = "DELETE FROM `GPU` WHERE `Gno` = $gpuno;";
   $delquery = mysqli_query($conn, $delq);
   
   if($delq){
      header('location:gpu.php');
      
   }
}
 ?>
   <h2></h2>