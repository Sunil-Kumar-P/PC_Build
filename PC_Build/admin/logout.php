 <?php
 session_start();

 require_once '../conn.php';

 $_SESSION = [];
 session_unset();
 session_destroy();
 header('Location:login.php');
 ?>