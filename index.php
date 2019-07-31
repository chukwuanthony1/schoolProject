<?php
    include_once "includes/connection.php";
    include_once "includes/header.php";
?>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/r1.jpeg" class="d-block w-100" alt="..." style="height: 400px; width: 100%;">
        </div>
        <div class="carousel-item">
            <img src="img/r2.jpeg" class="d-block w-100" alt="..." style="height: 400px; width: 100%;">
        </div>
        <div class="carousel-item">
            <img src="img/r3.jpg" class="d-block w-100" alt="..." style="height: 400px; width: 100%;">
        </div>
        <div class="carousel-item">
            <img src="img/r4.jpg" class="d-block w-100" alt="..." style="height: 400px; width: 100%;">
        </div>
        <div class="carousel-item">
            <img src="img/r5.jpeg" class="d-block w-100" alt="..." style="height: 400px; width: 100%;">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!--<div>-->
<!--    <img src="img/hotelb.jpg" alt="" style="width: 100%; height: 400px;">-->
<!--</div>-->
<div class="card text-center">
    <div class="card-body">
        <form action="registration.php" method="get">
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">Destination</label>
                <input type="text" class="form-control" name="d1" id="" aria-describedby="" placeholder="Enter Destination" required>
            </div>
            <div class="form-group col-md-6">
                <label for="room">Room</label>
                <select class="form-control" name="room" id="room">
                    <option value="">AC</option>
                    <option value="">Non AC</option>
                </select>
            </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="checkin">Check In Date</label>
                <input type="date" name="checkin" class="form-control" id="" required>
            </div>
            <div class="form-group col-md-6">
                <label for="checkin">Check Out Date</label>
                <input type="date" name="checkout" class="form-control" id="" required>
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<hr>
<div class="container">
<div class="card">
    <div class="card-body">
        <h1 class="text-center">Welcome to our Hotel</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi beatae cum ex facere,
                id, ipsum minima molestiae nobis numquam,
                perferendis perspiciatis praesentium quisquam ratione recusandae sequi sit temporibus totam!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi beatae cum ex facere,
                id, ipsum minima molestiae nobis numquam,
                perferendis perspiciatis praesentium quisquam ratione recusandae sequi sit temporibus totam!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi beatae cum ex facere,
                id, ipsum minima molestiae nobis numquam,
                perferendis perspiciatis praesentium quisquam ratione recusandae sequi sit temporibus totam!
            </p>
    </div>
</div>
<hr>
<div class="card-group">
    <div class="card">
        <img src="img/belgium.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Poland</h5>
            <p class="card-text">This is our new 5 star hotel located in Poland. it is fortified with state of the art facilities </p>
        </div>
    </div>
    <div class="card">
        <img src="img/viena.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Vienna </h5>
        </div>
    </div>
    <div class="card">
        <img src="img/italy.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Switzerland</h5>
            <p class="card-text">This is one of our Branches located in Switzerland</p>
        </div>
    </div>
</div>
</div>
</body>
</html>