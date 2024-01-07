

<?php
$con=  mysqli_connect('localhost','root');
if(!$con){
  echo "not connected to database";
}

if (isset($_POST['submit_btn'])){
  mysqli_select_db($con, 'travel');
  $Name = $_POST['name'];
  $Phone = $_POST['phone'];
  $Email = $_POST['email'];
  $Address = $_POST['address'];
  $Place = $_POST['place'];
  $Number = $_POST['number'];

  $query = "SELECT * FROM travel_data WHERE Email ='$Email'";        
  $result = mysqli_query($con, $query);

  if(mysqli_num_rows($result) === 1)
{
  $query = "INSERT into booking_data (Name, Phone, Email, Address, Place, Number) values ('$Name', '$Phone', '$Email', '$Address', '$Place', '$Number')";
  mysqli_query($con,$query);
  
  echo '<script> alert("Thanks for Submission, We will Contact you soon to update your booking.") </script>';
}
else
{
  echo '<script>alert("Submission failed. Please enter Registered Email only.")</script>';
}

}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="">
</head>
<style>
    .container-fluid a {
        text-decoration: none;
    }

    #menu {
        font-size: 18px;
        font-weight: 500;
    }

    .company_name {
        font-style: italic;
        font-size: 25px;
        font-weight: bold;
        padding-left: 10px;
        padding-right: 10px;
        border-radius: 35px;
        text-shadow: 2px 1px 3px white;
        background-color: black;

    }

    #menubar li a:hover {
        color: maroon;
        background: pink;
        border-radius: 35px;
    }

    .form-control {
        margin-bottom: 10px;
    }

    .Rform a {
        text-decoration: underline;
    }



    body {
        background-image: url("images/vacation_full_pic.jpg");
        background-size: 100% 100%;
    }


    .booking {
        padding-left: 10px;
        padding-right: 10px;
        border-radius: 35px;
        background-color: black;
    }
</style>

<body>
    <section class="container-fluid">

        <div class="container-fluid" id="menubar">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand company_name text-white" href="#">
                            <i class="fa fa-plane aeroplane"></i> Happy Journey</a>
                        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="menu">
                            <ul class="navbar-nav">
                                <li><a class="nav-link active ml-5" href="index.php">
                                        Home <i class='fas fa-home'></i></a></li>
                                <li class="dropdown">
                                    <a class="nav-link active dropdown-toggle ml-5" href="#" data-toggle="dropdown">
                                        Explore <i class='fas fa-globe'></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="india_explore.php">India</a>
                                        <a class="dropdown-item" href="United_State.php">United State</a>
                                        <a class="dropdown-item" href="dubai.php">Dubai</a>
                                        <a class="dropdown-item" href="russia.php">Russia</a>
                                    </div>
                                </li>
                                <li><a class="nav-link active ml-5 " href="Special Deals.php">
                                        Special deals <i class='fas fa-gift'></i></a></li>
                                <li><a class="nav-link active ml-5 " href="About Us.php">
                                        About us <i class='fas fa-book'></i></a></li>
                                <li><a class="nav-link active ml-5 " href="login.php">
                                        Sign in <i class='fas fa-pen-to-square'></i> | Register </a></li>
                                <li><a class=" booking nav-link active ml-5 text-warning" href="booking.php">
                                        <b><i> Book Now </i></b><i class='fas fa-pen'></i></i></a></li>


                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>





        <div class="container mt-3 mb-3">
            <div class="Rform m-auto" id="Booking_form">
                <form action="" method="post">
                    <div class="row">
                        <div
                            class="card offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 offset-md-2 col-md-8 col-sm-12 bg-light pl-5 pr-5">
                            <h2 class="Rform_head text-center p-2">Book Now</h2>

                            <h6 class="text-warning text-center">Please fill in this form to book your ticket.</h6>
                            <hr>
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Enter Full Name" class="form-control" required>
                            <label>Contact Number:</label>
                            <input type="number" name="phone" placeholder="Enter Contact Number" class="form-control"
                                required>
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Enter Email" class="form-control" required>
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Enter your full Address" class="form-control" required>

                            <label>Place you want to visit</label>
                            <select class="form-control" name="place" required>
                                <option>Select</option>

                                <option>India</option>
                                <option>New Delhi(India)</option>
                                <option>Mumbai(India)</option>
                                <option>Goa(India)</option>
                                <option>Jaipur(India)</option>
                                <option>Agra(India)</option>
                                <option>Bengaluru(India)</option>
                                <option>Kolkata(India)</option>
                                <option>Varanasi(India)</option>
                                <option>Chennai(India)</option>
                                <option>Amritsar(India)</option>

                                <option>USA</option>
                                <option>Chicago(USA)</option>
                                <option>Orlando(USA)</option>
                                <option>New Orleans(USA)</option>
                                <option>Miami(USA)</option>
                                <option>Las Vegas(USA)</option>
                                <option>Los Angeles(USA)</option>
                                <option>Boston(USA)</option>
                                <option>Washington(USA)</option>
                                <option>San Francisco(USA)</option>
                                <option>Atlanta(USA)</option>

                                <option>Russia</option>
                                <option>Moscow(Russia)</option>
                                <option>Saint Petersburg(Russia)</option>
                                <option>Kazan(Russia)</option>
                                <option>Sochi(Russia)</option>
                                <option>Vladivostok(Russia)</option>
                                <option>Lake Baikal(Russia)</option>
                                <option>Peterhof(Russia)</option>
                                <option>Red Square(Russia)</option>
                                <option>Volga River(Russia)</option>
                                <option>Olkhon Island(Russia)</option>
                                
                                <option>Dubai(UAE)</option>

                            </select>

                            <label>Number of People</label>
                            <input type="number" name="number" placeholder="Enter number of people" class="form-control" required>
                           
                            <p>By submitting this form you agree to our <a href="#">Terms & Privacy</a>.</p>
                            <button type="submit" value="submit" class="btn btn-success" name="submit_btn"
                                href="#">Submit</button>
                            </br>
                        </div>
                    </div>
            </div>
            </form>
        </div>

    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>