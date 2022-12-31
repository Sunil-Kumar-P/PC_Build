<?php

$sname= "Localhost";

$name= "root";

$password = "";

$db_name = "PC_BUILD";

$conn = new mysqli($sname, $name, $password, $db_name);

if (!$conn) {

    echo 'Could not connect';

}

?>