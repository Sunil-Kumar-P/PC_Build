<?php
require_once '../conn.php';
// $selectQuery = "SELECT * FROM `CPU` ORDER BY sem";
// $squery = mysqli_query($conn, $selectQuery);
if($_SERVER['REQUEST_METHOD']=='POST'){
   $Rno = $_POST['Rno'];
   $delq = "DELETE FROM `RAM` WHERE `Rno` = $Rno;";
   $delquery = mysqli_query($conn, $delq);
   
   if($delq){
      header('location:ram.php');
      
   }
}
 ?>
   <h2></h2>