<?php
include("includes/connection.php");
 $r=isset($_GET['room']);
 $ci=isset($_GET['checkin']);
 $co=isset($_GET['checkout']);
 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | HMS</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="icon" href="img/valustay-hotel-icon.png" type="img/icon">
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
            <li class="nav-item">
                <a class="nav-link" href="index.php"> <i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="hotel.php"><i class="fas fa-hotel"></i> Our Hotel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="reservation.php"><i class="fas fa-bed"></i> Reservation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php"><i class="fas fa-phone"></i> Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="hotel.php"><i class="fas fa-info-circle"></i> Help</a>
            </li>
        </ul>
    </div>
</nav>

<hr>
<div class="breadcrumb">
    <div class="accordion">

    </div>
</div>
<div class="container">
    <div class="card bg-light container-fluid">
            <h4 class="card-title mt-3 text-center">Room Availability</h4>
            <hr>
            <form action="registration.php" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6 ">
                        <?php

                        $q1 = "select * from room where status='Available'";
                        $run=mysqli_query($connect, $q1);
                        $row=mysqli_fetch_array($run);
                        $rno=$row['rno'];

                            $q = "select * from room where status='Available'";
                            $run=mysqli_query($connect, $q);
                            $num=mysqli_num_rows($run);

                            if($r<=$num){

                        ?>
                     <!--<input class="form-control " type="text" name="status"  disabled="disabled" value="Room Type" title="Status">-->
                       
                        <select id="" class="form-control" name="room_t" required >
                            <option selected>Choose Room Type</option>
                            <option>CLASSIC DOUBLE</option>
                            <option>EXECUTIVE DOUBLE</option>
                            <option>CLUB KING</option>
                            <option>GRAND KING</option>
                            <option>SUITE</option>
                        </select>
                 
                    </div>
                    <div class="form-group input-group col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-id-card"></i> </span>
                        </div>
                        <input name="idno" class="form-control" placeholder="ID number" type="number">
                    </div> <!-- form-group// -->
                </div>
        <div class="form-row">
                    <div class="form-group input-group col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="name" class="form-control" placeholder="Full name" type="text" required>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input name="email" class="form-control" placeholder="Email address" type="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    </div> <!-- form-group// -->
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <select id="" class="form-control" name="city" required>
                            <option value="">Choose City...</option>
                            <option>San Gwann</option>
                            <option>Paola</option>
                            <option>Swieqi</option>
                            <option>Pembroke</option>
                            <option>Xwieki</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <select id="" class="form-control" name="district" required>
                            <option value="">Choose District...</option>
                            <option>North</option>
                            <option>East</option>
                            <option>West</option>
                            <option>South</option>
                            <option>Central</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <select id="" class="form-control" name="state" required >
                            <option values="">Choose State...</option>
                            <option>Malta</option>
                            <option>Gozo</option>
                            <option>Valletta</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <input class="form-control" type="number" name="m" placeholder="No of People" title="Members">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Check In Date</label>
                        <input type="date" class="form-control" value="<?php echo $ci; ?>" id="" name="checkin">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Check Out Date</label>
                        <input type="date" class="form-control" value="<?php echo $co; ?>" id="" name="checkout">
                    </div>
                </div>
                <div class="form-group text-center">
                    <input type="submit" value="submit" name="submit" class="btn btn-primary btn-small">
                </div> <!-- form-group// -->
                        <?php
                            }

                            else{
                                ?>
                        <div class="form-group col-md-6">
                            <input class="form-control" type="text" name="status"  disabled="disabled" value="Not-Available" title="Status">
                        </div>
                <?php
                            }
                        ?>


            </form>
    </div> <!-- card.// -->
    <?php
    if(isset($_POST['submit']))
    {
        $idno = $_POST['idno'];
        $name = $_POST['name'];
        $city = $_POST['city'];
        $district = $_POST['district'];
        $state = $_POST['state'];
        $email = $_POST['email'];
        $checkin = $_POST['checkin'];
        $checkout = $_POST['checkout'];
        $m = $_POST['m'];
        $room_type = $_POST['room_t'];


        if(mysqli_query($connect,"insert into form(name,city,district,email,state,checkin,checkout,m,room_type,idno) value('$name', '$city', '$district', '$state', '$email', '$checkin', '$checkout', '$m', '$room_type','$idno')"))
        {
            mysqli_query($connect, "update room set status ='Booked' where rno=$rno");
            echo '<script type="text/javascript"> window.location="f1.php";</script>';
        }
    }
    ?>
</div>
</body>
</html>
