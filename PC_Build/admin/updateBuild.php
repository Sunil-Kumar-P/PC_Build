<?php
require_once '../conn.php';


$delq = "UPDATE BUILD b,  CPU c, GPU g, MotherBoard m, RAM r, STORAGE s set b.Total=(Mprice + Cprice+ Gprice+ Rprice+ Sprice) where b.Cno=c.Cno AND b.Mno=m.Mno AND b.Rno=r.Rno AND b.Gno=g.Gno AND b.Sno=s.Sno;";
$delquery = mysqli_query($conn, $delq);

if ($delq) {
    echo "Success";
}
header('location:build.php');

?>
<h2></h2>