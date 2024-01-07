<?php
$con=  mysqli_connect('localhost','root');
if(!$con){
  echo "not connected to database";
}

if (isset($_POST['login_btn']))
{
  mysqli_select_db($con, 'travel');

  $Email = $_POST['email'];
  $Password = $_POST['pass'];
  
  $query = "SELECT * FROM travel_data WHERE Email ='$Email' AND Password = '$Password'";        
  $result = mysqli_query($con, $query);

if(mysqli_num_rows($result) === 1)
{
  echo '<script>alert("Login Successfull. Welcome to the Happy Journey.")</script>';
 /*   sleep(1);
  header("Location: user_profile.php"); */
  
}
else
{
  echo '<script>alert("Login failed. Invalid Email or password.")</script>';
}

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
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
    background-repeat: no-repeat;
    
  }
  



.booking{
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
              <i class="fa fa-plane"></i> Happy Journey</a>
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
                          <li><a class="nav-link active ml-5 text-warning" href="login.php">
                              Sign in <i class='fas fa-pen-to-square'></i> | Register </a></li>
                          <li><a class=" booking nav-link active ml-5 text-white" href="booking.php">
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




    <div class="container mt-3 mb-3">
      <div class="Lform m-auto" id="Login_forms">
        <form action="" method="post">
          <div class="row">
            <div
              class="card offset-xl-4 col-xl-4 offset-md-3 col-md-6 col-sm-12 bg-light pl-5 pr-5" style="margin-bottom: 220px;">
              <h2 class="Rform_head  text-center m-2" >Sign in</h2>
              <hr>
             <label>Email</label>
              <input type="email" name="email" placeholder="Enter Email" class="form-control" required>
              <label>Password</label>
              <input type="password" name="pass" placeholder="Enter Password" class="form-control" required>
             <hr>
              <button type="submit" value="submit" class="btn btn-primary" name="login_btn"
                href="">Sign in</button>
              </br>
              <p class="sign_in text-center mb-5" style="border-top: 2px solid black;">Not have an account? <a
                  href="register.php">Register</a>.</p>
            </div>
          </div>
      </div>
      </form>
    </div>
    </div>






  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>