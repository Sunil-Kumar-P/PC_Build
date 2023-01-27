<?php
require_once '../conn.php';
// $selectQuery = "SELECT * FROM `CPU` ORDER BY sem";
// $squery = mysqli_query($conn, $selectQuery);
if($_SERVER['REQUEST_METHOD']=='POST'){
   $Mno = $_POST['Mno'];
   $delq = "DELETE FROM `MotherBoard` WHERE `Mno` = $Mno;";
   $delquery = mysqli_query($conn, $delq);
   
   if($delq){
      header('location:mb.php');
      
   }
}
 ?>
   <h2></h2>