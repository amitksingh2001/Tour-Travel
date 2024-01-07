
<?php
    $con=  mysqli_connect('localhost','root', '', 'travel');
    if(!$con){
        echo "not connected to database";
    }

    if (isset($_POST['register_btn'])){
          $Name = $_POST['name'];
          $Gender = $_POST['gender'];
          $Phone = $_POST['phone'];
          $Email = $_POST['email'];
          $Password = $_POST['password'];
          $Confirm_Password = $_POST['c_pass'];

          if($Password == $Confirm_Password){
              $checkemail = "SELECT * FROM travel_data WHERE Email ='$Email'"; 
              $result = mysqli_query($con, $checkemail);
              $count = mysqli_num_rows($result);
              if($count>0){
                  echo '<script>alert("Email id is already taken.")</script>';
              }
              else{
                  $sql = "INSERT into travel_data (Name, Gender, Phone, Email, Password, Confirm_Password) values ('$Name', '$Gender', '$Phone', '$Email', '$Password', '$Confirm_Password')";
                  if($con->query($sql)){
                    echo '<script> alert("Registration completed successfully.") </script>';
                  }
                }
          }
          else{
              echo '<script>alert("Password and Confirm Password does not match")</script>';
          }

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
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
      <div class="Rform m-auto" id="Resiter_forms">
        <form action="" method="post">
          <div class="row">
            <div
              class="card offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 offset-md-2 col-md-8 col-sm-12 bg-light pl-5 pr-5">
              <h2 class="Rform_head text-center m-2">Register </h2>
              <h6 class="text-warning text-center">Please fill in this form to create an account.</h6>
              <label>Name</label>
              <input type="text" name="name" placeholder="Enter Full Name" class="form-control" required>
               <label class="radio-inline">Gender </label>
                <label><input type="radio" name="gender" id="male" value="male"> Male
                <input type="radio" name="gender" id="female" value="female"> Female
                <input type="radio" name="gender" id="others" value="female"> Others</label>
                <label>Contact Number:</label>
              <input type="number" name="phone" placeholder="Enter Contact Number" class="form-control" required>
             <label>Email</label>
              <input type="email" name="email" placeholder="Enter Email" class="form-control" required>
              
              <label>Password</label>
              <input type="password" id="password" name="password" placeholder="Enter Password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+{}|:;<>,.?/~`]).{8,}" 
              title="Password must be at least 8 characters long and include at least one digit, one lowercase, one uppercase letter, and one special character" required>
              
              <label>Confirm Password</label>
              <input type="password" name="c_pass" placeholder="Confirm Password" class="form-control" required>
              <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
              <button type="submit" value="submit" class="btn btn-success" name="register_btn"
                href="#">Register</button>
              </br>
              <p class="register text-center" style="border-top: 2px solid black;">Already have an account? <a
                  href="login.php">Sign in</a>.</p>
            </div>
          </div>
      </div>
      </form>
    </div>
    </div>







  
  

    <script>
      function thanks() {
        alert("Registration Completed Successfully.");
      }
    </script>
    
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>


