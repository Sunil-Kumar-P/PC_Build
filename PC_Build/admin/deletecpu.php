<?php
require_once '../conn.php';
// $selectQuery = "SELECT * FROM `CPU` ORDER BY sem";
// $squery = mysqli_query($conn, $selectQuery);
if($_SERVER['REQUEST_METHOD']=='POST'){
   $cpuno = $_POST['cpuno'];
   $delq = "DELETE FROM `CPU` WHERE `Cno` = $cpuno;";
   $delquery = mysqli_query($conn, $delq);
   
   if($delq){
      header('location:cpu.php');
      
   }
}
 ?>
   <h2></h2>