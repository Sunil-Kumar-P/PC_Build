<?php
require_once '../conn.php';
// $selectQuery = "SELECT * FROM `CPU` ORDER BY sem";
// $squery = mysqli_query($conn, $selectQuery);
if($_SERVER['REQUEST_METHOD']=='POST'){
   $Sno = $_POST['sno'];
   $delq = "DELETE FROM `STORAGE` WHERE `Sno` = $Sno;";
   $delquery = mysqli_query($conn, $delq);
   
   if($delq){
      header('location:storage.php');
      
   }
}
 ?>
   <h2></h2>