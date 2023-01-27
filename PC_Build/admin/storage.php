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
    <div class="cbody">
        

        <div class="conatiner">

            <center>
                <h1><b>STORAGE Table</b></h1>
            </center>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sno</th>
                        <th>Sname</th>
                        <th>SPrice</th>
                        <th>Description</th>
                        <th>Simg</th>
                        <th>Link</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $sql = "SELECT * FROM STORAGE";
                    $result = mysqli_query($conn, $sql);

                    // $row = mysqli_fetch_assoc($result);

                    while ($row = $result->fetch_array(SQLITE3_ASSOC)) {
                    ?>
                        <tr>
                            <td><?php echo $row['Sno']; ?></td>
                            <td><?php echo $row['Sname']; ?></td>
                            <td> <span>&#8377;</span><?php echo $row['Sprice']; ?>/-</td>
                            <td><?php echo $row['Description']; ?></td>
                            <td> <?php echo '<img class="d-block w-100" alt="..." src="data:image/png;base64,' . base64_encode($row['Simg']) . '">';  ?>
                            <td><?php echo $row['link']; ?></td>
                            <td>
                                <form action="deletestorage.php" method="post">
                                    <input type="text" name="sno" hidden="hidden" value="<?php echo $row['Sno']; ?>">
                                    <input type="submit" class="btn btn-danger" onclick="
                     alert('Deleted Successfully');" value="DELETE">
                                </form>
                                <!-- <a class="btn btn-danger" href="delete.php">Delete</a> -->
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
                <h3 class="alert text-primary rounded-pill" style="text-align:center">Insert a STORAGE</h3>
                <div class="col-lg-5 rounded mx-auto">
                    <?php
                    if (isset($_POST['submit'])) {
                        $Sname = $_POST['Sname'];
                        $Sprice = $_POST['Sprice'];
                        $Description = $_POST['Description'];
                        $Link = $_POST['Link'];

                        $Image = $_POST['Image'];
                        if (count($_FILES) > 0) {
                            if (!empty($_FILES["Image"]["name"])) {
                                $fname = $_FILES["Image"]["tmp_name"];
                                $imgcontent = addslashes(file_get_contents($fname));
                                $sql = "INSERT INTO STORAGE  VALUES (null, '$Sname','$imgcontent', '$Sprice', '$Description' , '$Link');";
                                $iquery = mysqli_query($conn, $sql);
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
                    header('location:storage.php');
                    ?>

                    <form action="storage.php" method="POST" enctype="multipart/form-data" autocomplete="off">


                        <div class="form-group">
                            <label for="">Sname</label>
                            <input required type="text" name="Sname" id="" value="" class=" form-control-sm form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Sprice</label>
                            <input required type="text" pattern="[0-9]" name="Sprice" id="" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <input required type="text" name="Description" id="" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="">Link</label>
                            <input required type="text" name="Link" id="" class="form-control form-control-sm">
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