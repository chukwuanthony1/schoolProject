<?php
include("../includes/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel | HMS</title>
    <link rel="icon" href="/img/valustay-hotel-icon.png">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="icon" href="img/valustay-hotel-icon.png" type="img/icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"> <img src="img/hht.jpg" alt="hotel_logo" style="height: 50px; width: 70px;"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="home.php"> <i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="room.php"><i class="fas fa-hotel"></i> Room Update</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="booking.php"><i class="fas fa-bed"></i> Booking</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="room_detail.php"><i class="fas fa-phone"></i> Room Details</a>
            </li>
        </ul>
    </div>
</nav>
<hr>
<div class="alert alert-light" role="alert">

</div>
<div class="container">
    <div class="card bg-light container-fluid">
        <h4 class="card-title mt-3 text-center">Add Room</h4>
        <hr>
        <form action="room.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input class="form-control" type="number" name="rno" placeholder="Room Number" title="Room Number">
                </div>
                <div class="form-group input-group col-md-6">
                    <input name="type" type="text" class="form-control" pattern="[a-zA-Z]*" placeholder="Room Type" title="Room Number">
                </div> <!-- form-group// -->
            </div>
            <div class="form-row">
                <div class="form-group input-group col-md-6">
                    <input name="price" type="text" class="form-control" placeholder="Room Price" title="Room Price">
                </div>
            </div>

            <div class="form-group text-center">
                <input type="submit" value="submit" name="submit" class="btn btn-primary btn-small">
            </div> <!-- form-group// -->
        </form>
        <?php
            if(isset($_POST['submit']))
            {
                    $rno = $_POST['rno'];
                    $type = $_POST['type'];
                    $price = $_POST['price'];
                    if(mysqli_query($connect, "insert into room(rno, type, price) values('$rno', '$type', '$price')")){
                        echo "";
                    }else{
                        echo"unable to insert data";
                    }
            }
        ?>
    </div> <!-- card.// -->

</div>
</body>
</html>