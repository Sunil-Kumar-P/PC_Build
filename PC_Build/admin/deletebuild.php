<?php
require_once '../conn.php';
// $selectQuery = "SELECT * FROM `CPU` ORDER BY sem";
// $squery = mysqli_query($conn, $selectQuery);
if($_SERVER['REQUEST_METHOD']=='POST'){
   $Buildno = $_POST['Buildno'];
   $delq = "DELETE FROM `BUILD` WHERE `Buildno` = $Buildno;";
   $delquery = mysqli_query($conn, $delq);
   
   if($delq){
      header('location:build.php');
      
   }
}
 ?>
   <h2></h2>