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
            margin: 1% 10%;
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
    <nav class="navbar sticky-top navbar-dark bg-dark">
        <div class="container-fluid">
          <p class="text-light"> Press Here To update the values</p> 
            <a href="updateBuild.php" class="btn btn-success" onclick="alert('Updated Successfully');">Update</a>

        </div>
    </nav>




    <div class="extragap"></div>
    <div class="conatiner">

        <center>
            <h1><b>BUILD Table</b></h1>
        </center>
    </div>
    <br>
    <div class="cbody">
        <div class="conatiner">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Buildno</th>
                        <th>Mno</th>
                        <th>Cno</th>
                        <th>Gno</th>
                        <th>Rno</th>
                        <th>Sno</th>
                        <th>Bimg</th>
                        <th>Refervideo</th>
                        <th>Total</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $sql = "SELECT * FROM BUILD";
                    $result = mysqli_query($conn, $sql);

                    // $row = mysqli_fetch_assoc($result);

                    while ($row = $result->fetch_array(SQLITE3_ASSOC)) {
                    ?>
                        <tr>
                            <td><?php echo $row['Buildno']; ?></td>
                            <td><?php echo $row['Mno']; ?></td>
                            <td><?php echo $row['Cno']; ?></td>
                            <td><?php echo $row['Gno']; ?></td>
                            <td><?php echo $row['Rno']; ?></td>
                            <td><?php echo $row['Sno']; ?></td>
                            <td> <?php echo '<img class="d-block w-100" alt="..." src="data:image/png;base64,' . base64_encode($row['Bimg']) . '">';  ?>
                            <td><?php echo $row['Refervideo']; ?></td>
                            <td> <span>&#8377;</span><?php echo $row['Total']; ?>/-</td>
                            <td>
                                <form action="deletebuild.php" method="post">
                                    <input type="text" name="Buildno" hidden="hidden" value="<?php echo $row['Buildno']; ?>">
                                    <input type="submit" class="btn btn-danger" onclick="
                     alert('Deleted Successfully');" value="DELETE">
                                </form>
                            </td>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>


        <!-- Insertion Part -->
        <section class="bg-secondary extragap">
        </section>
        <div class="container">
            <div class="p-3 m-3">
                <h3 class="alert text-primary rounded-pill" style="text-align:center">Insert a BUILD</h3>
                <div class="col-lg-5 rounded mx-auto">
                    <?php
                    if (isset($_POST['submit'])) {

                        $Mno = $_POST['Mno'];
                        $Cno = $_POST['Cno'];
                        $Gno = $_POST['Gno'];
                        $Rno = $_POST['Rno'];
                        $Sno = $_POST['Sno'];
                        $Refervideo = $_POST['Refervideo'];
                        $Total = $_POST['Total'];
                        if (count($_FILES) > 0) {
                            if (!empty($_FILES["Image"]["name"])) {
                                $fname = $_FILES["Image"]["tmp_name"];
                                $imgcontent = addslashes(file_get_contents($fname));
                                $sql = "INSERT INTO BUILD VALUES ( null,'$Mno', '$Cno','$Gno','$Rno','$Sno' ,'$imgcontent', '$Refervideo','$Total');";
                                try {
                                    $iquery = mysqli_query($conn, $sql);
                                } catch (Exception $e) {
                                    echo $e;
                                }

                                if ($iquery) {
                                    echo "<script>alert('added Successfully');</script>";
                    ?>
                                    <div class="alert alert-success alert-dismissible fade show text-center">
                                        <a class="close" data-dismiss="alert" aria-label="close">
                                            ×
                                        </a>
                                        <strong>Success!</strong> Data submitted successfully.
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="alert alert-danger alert-dismissible fade show text-center">
                                        <a class="close" data-dismiss="alert" aria-label="close">
                                            ×
                                        </a>
                                        <strong>Failed!</strong> Try Again!
                                    </div>
                            <?php
                                }
                            }
                        } else {
                            ?>
                            <div class="alert alert-danger alert-dismissible fade show text-center">
                                <a class="close" data-dismiss="alert" aria-label="close">
                                    ×
                                </a>
                                <strong>Failed!</strong> File must be uploaded in img format!
                            </div>
                    <?php

                        }
                    }
                    header('location:build.php');
                    ?>

                    <form action="build.php" method="POST" enctype="multipart/form-data" autocomplete="off">



                        <div class="form-group">
                            <label for="">Mno</label>
                            <input required type="text" name="Mno" id="" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="">Cno</label>
                            <input required type="text" name="Cno" id="" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="">Gno</label>
                            <input required type="text" name="Gno" id="" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="">Rno</label>
                            <input required type="text" name="Rno" id="" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="">Sno</label>
                            <input required type="text" name="Sno" id="" class="form-control form-control-sm">
                        </div>

                        <div class="form-group">
                            <label for="">Refervideo</label>
                            <input required name="Image" type="Refervideo" id="" class="form-control form-control-sm" />
                        </div>
                        <div class="form-group">
                            <label for="">Total</label>
                            <input required type="text" name="Total" id="" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input required name="Image" type="file" id="" class="form-control form-control-sm" />
                        </div>
                        <br>

                        <button type="submit" name="submit" class="btn btn-sm btn-success col-lg-12">Insert</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>