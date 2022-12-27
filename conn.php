<?php
//  Localhost via UNIX socket 
$servername = "localhost";
$username = " root@localhost";
$password = "password";

$conn = new mysqli($servername,$username,$password);

if ($conn->connect_error){
    die("Connection failes:" . $conn->connect_error);
}
echo "Connected Successfully";

?>