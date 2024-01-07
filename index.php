<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

  /*
    .booking{
        padding-left: 10px;
        padding-right: 10px;
        border-radius: 35px;
        background-color: rgb(83, 147, 238);
    }
*/

  #menubar li a:hover {
    color: maroon;
    background: pink;
    border-radius: 35px;
  }

  /*
    .form-control {
        margin-bottom: 10px;
    }
*/
  .Rform a {
    text-decoration: underline;
  }



  body {
    background-image: url("register_image.webp");
    background-size: 100% 100%;
  }

  .rightside {
    background-image: url("images/vacation.jpg");
    background-size: 100% 100%;
  }

  /*
  .lineone {
    background-color: rgb(83, 147, 238);
  }

  .lineone a {
    color: white;
  }

  .lineone a:hover {
    color: red;
  }
*/

  .head_search {
    border: 2px solid royalblue;
  }




  ul {
    list-style-type: none;
  }

  footer {
    background-color: rgba(27, 27, 27, 0.769);
    color: white;
    letter-spacing: 0.5px;
  }

  footer a {
    color: white;
    font-size: 14px;
  }

  footer a:hover {
    color: maroon;
    font-weight: bold;
  }

  .foot_head {
    padding-top: 20px;
    border-bottom: 1px solid white;
  }

  .copyright {
    font-size: 12px;
    padding: 10px;
    border-top: 1px solid white;
  }


  ul.icon li {
    display: inline;
    margin-right: 10px;
  }

  .icon a {
    background-color: rgb(74, 62, 62);
    color: white;
    display: inline-block;
    border-radius: 50%;
    text-align: center;
    width: 25px;
    height: 25px;
    font-size: 16px;
  }

  .icon a:hover {
    background-color: greenyellow;
  }

  .address {
    text-align: center;
  }

  .explore_c {
    border-radius: 35px;
    background-color: black;
    color: white;
    padding: 5px 15px 5px 15px;
  }
</style>

<body>
  <section class="container-fluid bg-light">

    <!--
    <div class=" container-fluid">
      <div class="row justify-content-end ml-1 mr-1 lineone">
        <div class="col-sm-4 col-md-3 col-lg-2">
          <a href=""><small><i class="m-2 fa fa-facebook"></i></small></a>
          <a href=""><small><i class="m-2 fa fa-instagram"></i></small></a>
          <a href=""><small><i class="m-2 fa fa-twitter"></i></small></a>
          <a href=""><small><i class="m-2 fa fa-linkedin"></i></small></a>
        </div>
      </div>
    </div>

  -->

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
                                <li><a class="nav-link active ml-5 text-warning " href="index.php">
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
                                <li><a class="nav-link active ml-5 " href="Special Deals.php">
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


    <!--

    <div class="container-fluid" style="background-color:  rgb(93, 238, 83)" id="aftermenuline1">
      <div class="row">
        <div class="col text-center">
          <a style="color:black; letter-spacing: 2px; text-shadow: 1px 1px 2px black;" href=""><b><i> Explore the World with <i class="fa fa-plane aeroplane"></i> Happy Journey</i></b></a>
        </div>
      </div>
    </div>
-->


    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div id="mycarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
              <li data-target="#mycarousel" data-slide-to="1"></li>
              <li data-target="#mycarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="2000">
                <img src="images/himachal.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item" data-interval="2000">
                <img src="images/northeast-india.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item" data-interval="2000">
                <img src="images/wildlife.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item" data-interval="2000">
                <img src="images/kashmi.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item" data-interval="2000">
                <img src="images/uttrakhand.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item" data-interval="2000">
                <img src="images/maldives.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item" data-interval="2000">
                <img src="images/auli.jpg" class="d-block w-100">
              </div>
            </div>
            <a href="#mycarousel" class="carousel-control-prev" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#mycarousel" class="carousel-control-next" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
        </div>
      </div>
    </div>


    <div class="container-fluid">
      <div class="row">
        <div class="col text-center pt-1 pb-1">
          <a style="letter-spacing: 2px; color: maroon;" href=""><b><i> Explore the World with <i
                  class="fa fa-plane aeroplane"></i> Happy Journey</i></b></a>
        </div>
      </div>
    </div>



    <div class="container-fluid">
      <div class="card bg-light">
        <h4 class="mt-3 mb-2 text-center text-warning">Countries to Travel</h4>
        <div class="container">
          <div class="card shadow-lg mt-3 mb-5">

            <div class="row m-2">

              <div class="col-lg-3 col-md-6 col-sm-12">
                <h5>India</h5>
                <div class="card shadow-lg w-100 mt-3 mb-3 ">
                  <img class="card-img-top" src="images/indian city.jpg">
                  <div class="card-body">
                    <p>Chennai Central <b>$460</b></p>
                    <a href="india_explore.php" class="explore_c">Explore</a>
                  </div>
                </div>
              </div>


              <div class="col-lg-3 col-md-6 col-sm-12">
                <h5>United State</h5>
                <div class="card shadow-lg w-100 mt-3 mb-3 ">
                  <img class="card-img-top" src="images/united state city.jpg">
                  <div class="card-body">
                    <p>United State <b>$680</b></p>
                    <a href="United_State.php" class="explore_c">Explore</a>
                  </div>
                </div>
              </div>


              <div class="col-lg-3 col-md-6 col-sm-12">
                <h5>Dubai</h5>
                <div class="card shadow-lg w-100 mt-3 mb-3 ">
                  <img class="card-img-top" src="images/burj_khalifa.webp">
                  <div class="card-body">
                    <p>Dubai Luxurious City <b>$870</b></p>
                    <a href="dubai.php" class="explore_c">Explore</a>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-12">
                <h5>Russia</h5>
                <div class="card shadow-lg w-100 mt-3 mb-3 ">
                  <img class="card-img-top" src="images/russia city.jpg">
                  <div class="card-body">
                    <p>Embankment <b>$560</b></p>
                    <a href="russia.php" class="explore_c">Explore</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>








    <div class="container">
      <h4 class="m-4 text-center text-danger">Best tour Package offers for you <i class="fa fa-hand-o-down"></i></h4>
      <h6>Choose your next destination</h6>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card shadow-lg w-100 mt-3 mb-3 ">
            <h5 class="card-title mt-2 text-center">Lotus-Delhi</h5>
            <img class="card-img-bottom" src="images/Lotus temp.jpg">
            <div class="card-body">
              <b><del>$2400 </del> $2250</b></br>
              <a href="">More info </a>
            </div>
          </div>
          <p class="ml-2">Included: Air ticket, Hotel, Food, Tour-Guide, Entry Fees</p>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card shadow-lg w-100 mt-3 mb-3 ">
            <h5 class="card-title mt-2 text-center">Mountain Vietnam</h5>
            <img class="card-img-bottom" src="images/mountain vietnam image.jpg">
            <div class="card-body">
              <b><del>$2500 </del> $2350</b></br>
              <a href="">More info </a>
            </div>
          </div>
          <p class="ml-2">Included: Air ticket, Hotel, Food, Tour-Guide, Entry Fees</p>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card shadow-lg w-100 mt-3 mb-3 ">
            <h5 class="card-title mt-2 text-center">Burj Khalifa</h5>
            <img class="card-img-bottom" src="images/bhurge khalifa image.jpg">
            <div class="card-body">
              <b><del>$2600 </del> $2400 </b></br>
              <a href="">More info </a>
            </div>
          </div>
          <p class="ml-2">Included: Air ticket, Hotel, Food, Tour-Guide, Entry Fees</p>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card shadow-lg w-100 mt-3 mb-3 ">
            <h5 class="card-title mt-2 text-center">Pyramid Egypt</h5>
            <img class="card-img-bottom" src="images/piramid egipt image.webp">
            <div class="card-body">
              <b><del>$2800 </del> $2660</b></br>
              <a href="">More info </a>
            </div>
          </div>
          <p class="ml-2">Included: Air ticket, Hotel, Food, Tour-Guide, Entry Fees</p>
        </div>
      </div>
    </div>



    <div class="container-fluid mt-5">
      <div class="row">

        <div class="offset-xl-3 col-xl-3 offset-lg-2 col-lg-4 offset-md-1 col-md-5 mt-4 mb-4">
          <h3>Our destination</h3>
          <p>Choose your next destination</p>
          <h6>India</h6>
          <h6>Dubai</h6>
          <h6>USA</h6>
          <h6>Vietnam</h6>
          <h6>Russia</h6>
          <h6>Brazil</h6>
          <p>Included: Air ticket, Hotel, Food, Tour-Guide, Entry Fees</p>
          <a href="booking.php" class="explore_c">Book Now</a>

        </div>

        <div class="col-xl-3 col-lg-4 col-md-5">
          <img class="image w-100 h-100" src="images/aeroplane image.webp">
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


    <?php include 'footer.php'; ?>


  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>