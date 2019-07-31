<?php
include_once "includes/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel | HMS</title>
    <link rel="icon" href="/img/hht.jpg">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"> <img src="img/hht.jpg" alt="hotel_logo" style="height: 50px; width: 70px;"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="home.php"> <i class="fas fa-home"></i> Home</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="hotel.php"><i class="fas fa-hotel"></i> Our Hotel</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="reservation.php"><i class="fas fa-bed"></i> Reservation</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="contact.php"><i class="fas fa-phone"></i> Contact Us</a>-->
<!--            </li>-->
        </ul>
    </div>
</nav>

<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Sign In</h5>
                    <hr>
                    <form class="form-signin" action="" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control out" placeholder="Enter Username" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="Password" class="form-control" placeholder="Enter Password" required>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit">Sign in</button>
                        </div>
                    </form>
                    <?php
                        if(isset($_POST['submit'])){
                             $username = $_POST['username'];
                             $password = $_POST['password'];

                             $sql = "select * from admin";
                             $run = mysqli_query($connect, $sql);
                             $row = mysqli_fetch_array($run);
                             $u=$row['username'];
                             $p=$row['password'];
                             if($username == $u && $password == $p){
                                  header("Location:home.php");
                             }else{
                                 header("Location:index.php?Wrong User");
                             }

                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>