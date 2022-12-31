

<?php 
    require_once 'conn.php';

    $sql = 'SELECT * FROM MotherBoard WHERE Mno=1';
    $result = mysqli_query($conn, $sql);

    // $row = mysqli_fetch_assoc($result);

    while($row=$result->fetch_array(SQLITE3_ASSOC)){
    echo $row['Mno'];
    echo " | ";
    echo $row['Mname'];
    echo " | ";
    echo $row['Price'];
    echo " | ";
    echo $row['Description'];
    echo " | ";
    $img = $row['Mimg'];

    echo '<img src="data:image/png;base64,'.base64_encode($img).'"/>';
    }



?>
<img src="$img">