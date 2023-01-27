<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC BUILD</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">



    <style>
        .extragap {
            margin-top: 5.1%;
        }

        a {
            text-decoration: none;
        }

        .extragap1 {
            background-color: black;
            margin-top: 5%;
        }

        p {
            color: black;
        }
    </style>

</head>

<body>
    <section class="bg-secondary extragap">
    </section>
    <div class="container">
        <div class="p-3 m-3">
            <div class="container">
                <center>
                    <h1><b>PC BUILD</b></h1>
                </center>
            </div>
            <h3 class="alert text-primary rounded-pill" style="text-align:center">Admin Login</h3>
            <div class="col-lg-5 rounded mx-auto">
                <div class="text-center col">


                </div>
                <?php

                require_once '../conn.php';

                if ($_SERVER["REQUEST_METHOD"] == 'POST') {
                    $user = $_POST['email'];
                    $passwd = $_POST['password'];

                    $sql = "SELECT * FROM `admin` WHERE `email`='$user'; ";
                    $result = mysqli_query($conn, $sql);

                    if ($result->num_rows > 0) {
                        echo "in";
                        while ($row = $result->fetch_assoc()) {
                            $username = $row['email'];
                            $password = $row['password'];
                            if ($passwd == $password) {
                                session_start();
                                $_SESSION['login'] = true;
                                $_SESSION['user'] = $user;

                                // echo "<script> alert('Login Successful');</script>";
                                header('location: index.php');
                            } else {
                                echo "<script> alert('Incorrect Password');</script>";
                            }
                        }
                    } else {
                        echo "<script> alert('User Not Registered');</script>";
                    }
                }

                ?>

                <form action="login.php" method="POST" autocomplete="off">

                    <!-- email -->
                    <div class="form-group">
                        <label for="">Email</label>
                        <input required type="email" name="email" id="" value="" class=" form-control-sm form-control">
                    </div>


                    <!-- password -->
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" id="" class="form-control form-control-sm">
                    </div>
                    <br>

                    <button type="submit" class="btn btn-sm btn-success col-lg-12">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="./js/bootstrap.min.js"></script>

</body>

</html>