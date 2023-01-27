<?php
session_start();
require_once '../conn.php';

if (!empty($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $checkuser = mysqli_query($conn, "SELECT * FROM `admin` WHERE email = '$user'");
    $userdetails = mysqli_fetch_assoc($checkuser);
} else {
    header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC BUILD</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <style>
        .cbody {
            text-align: center;
            margin: 5% 10%;
        }

        .extragap {
            margin-top: 5.1%;
            /* background-color: black; */
        }

        nav {
            margin: 0%;
        }

        .navbar-brand {
            margin: 0% 5%;
        }
    </style>

</head>

<body>
    <nav class="navbar sticky-top navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Dashboard</a>
            <a class="btn btn-danger" href="logout.php">Logout</a>
        </div>
    </nav>
    <div class="cbody">

        <h1>Welcome <?php echo $userdetails['username']; ?></h1><br>


        <div class="conatiner">
            <div class="d-grid gap-2 col-6 mx-auto">
                <a class="btn btn-secondary" href="mb.php">MotherBoard</a>
                <a class="btn btn-secondary" href="cpu.php">CPU</a>
                <a class="btn btn-secondary" href="gpu.php">GPU</a>
                <a class="btn btn-secondary" href="ram.php">RAM</a>
                <a class="btn btn-secondary" href="storage.php">Storage</a>
                <a class="btn btn-secondary" href="build.php">BUILD</a>

            </div>
        </div>
    </div>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>