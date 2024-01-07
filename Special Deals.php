<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Deals</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="footer.css">
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


</style>

<body>
    <section class="container-fluid">

        <div class="container-fluid bg-light" id="menubar">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-xl navbar-light bg-light">
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
                                        <a class="dropdown-item " href="india_explore.php">India</a>
                                        <a class="dropdown-item " href="United_State.php">United State</a>
                                        <a class="dropdown-item" href="dubai.php">Dubai</a>
                                        <a class="dropdown-item" href="russia.php">Russia</a>
                                    </div>
                                </li>
                                <li><a class="nav-link active ml-5  text-warning " href="Special Deals.php">
                                        Special deals <i class='fas fa-gift'></i></a></li>
                                <li><a class="nav-link active ml-5" href="About Us.php">
                                        About us <i class='fas fa-book'></i></a></li>
                                <li><a class="nav-link active ml-5 " href="login.php">
                                        Sign in <i class='fas fa-pen-to-square'></i> | Register </a></li>
                                <li><a class=" booking nav-link active ml-5 text-danger" href="booking.php">
                                        <b><i> Book Now </i></b><i class='fas fa-pen'></i></i></a></li>
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-secondary text-white" style="letter-spacing: 2px;">
            <marquee direction="left">
              <i> <b> Here you will find our special deals. Tour prices have now reduced. </b> </i>
            </marquee>
          </div>
          <div class="container">
            <h2 class="text-center text-warning ml-5 mr-5 mt-4 m-4">Our Special Deals <i class="fa fa-hand-o-down"></i></h2>
            <div class="row m-2">

                <div class="col-xl-3  col-md-6">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/india_tours.jpg">
                        <div class="card-body">
                            <h5 class="card-title">India</h5>
                            <h6 class="card-title">Offer Date : <i>From 15-03-2024 to 30-03-2024</i></h6>
                            <h6 class="card-title">7 Days & 7 Night Trip</h6>
                            <p class="card-content">Price : <del>$650</del> $500</p>
                            <a href="booking.php" class="btn btn-success w-100">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3  col-md-6">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/russia_tour.webp">
                        <div class="card-body">
                            <h5 class="card-title">Russia</h5>
                            <h6 class="card-title">Offer Date : <i>From 20-02-2024 to 10-03-2024</i></h6>
                            <h6 class="card-title">7 Days & 7 Night Trip</h6>
                            <p class="card-content">Price : <del>$1250</del> $1050</p>
                            <a href="booking.php" class="btn btn-success w-100">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3  col-md-6">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/usa_tou.webp">
                        <div class="card-body">
                            <h5 class="card-title">U S A</h5>
                            <h6 class="card-title">Offer Date : <i>From 15-02-2024 to 30-02-2024</i></h6>
                            <h6 class="card-title">7 Days & 7 Night Trip</h6>
                            <p class="card-content">Price : <del>$1400</del> $1250</p>
                            <a href="booking.php" class="btn btn-success w-100">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3  col-md-6">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/dubai_tour.jpg">
                        <div class="card-body">
                            <h5 class="card-title">Dubai</h5>
                            <h6 class="card-title">Offer Date : <i>From 25-03-2024 to 05-04-2024</i></h6>
                            <h6 class="card-title">7 Days & 7 Night Trip</h6>
                            <p class="card-content">Price : <del>$1350</del> $1200</p>
                            <a href="booking.php" class="btn btn-success w-100">Book Now</a>
                        </div>
                    </div>
                </div>

                </div>

                <div class="row m-2">
                    <div class="offset-xl-3 col-xl-3  col-md-6">
                        <div class="card shadow-lg w-100 mb-3 ">
                            <img class="card-img-top" src="images/amritsar.webp">
                            <div class="card-body">
                                <h5 class="card-title">Amritsar</h5>
                                <h6 class="card-title">Offer Date : <i>From 10-02-2024 to 30-02-2024</i></h6>
                                <h6 class="card-title">1 Day Trip</h6>
                                <p class="card-content">Price : <del>$120</del> $100</p>
                                <a href="booking.php" class="btn btn-success w-100">Book Now</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-xl-3  col-md-6">
                        <div class="card shadow-lg w-100 mb-3 ">
                            <img class="card-img-top" src="images/agra.webp">
                            <div class="card-body">
                                <h5 class="card-title">Agra</h5>
                                <h6 class="card-title">Offer Date : <i>From 15-02-2024 to 25-02-2024</i></h6>
                                <h6 class="card-title">1 Day Trip</h6>
                                <p class="card-content">Price : <del>$110</del> $95</p>
                                <a href="booking.php" class="btn btn-success w-100">Book Now</a>
                            </div>
                        </div>
                    </div>
                    </div>    

                </div>

                <section class="container-fluid clearfix">
        <div class="row">
          <div class="offset-xl-11 col">
            <a href="#" class="btn btn-primary m-2 float-right" title="Go to top"><i class="fa fa-arrow-up"></i></a>
          </div>
        </div>
      </section>
            
           
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>