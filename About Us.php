<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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

    .form-control {
        margin-bottom: 10px;
    }

    .Rform a {
        text-decoration: underline;
    }



    .intro_card {
        background-image: url("images/dubai_card_body_image.jpg");
        background-size: 100% 100%;
    }

.email:hover{
    color: red;
    text-decoration: none;
}
.phone a:hover{
    color: maroon;
    text-decoration: none;
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
                                <li><a class="nav-link active ml-5 " href="Special Deals.php">
                                        Special deals <i class='fas fa-gift'></i></a></li>
                                <li><a class="nav-link active ml-5 text-warning " href="About Us.php">
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






        <div class="container-fluid intro_card">
            <h2 class="text-center p-3 text-warning">
                Company & Our Team </h2>
            <p class="about text-center text-white">We are students of Rungta College of Engineering and Technology, Bhilai.
And We have developed a tour and travel website.</br>
 This website will help those people who want to travel around the world.</br>
By using this website people can check the place where they want to visit.</br>
 Using this, people can also book important things.
Like food, hotel, car and tour-guide who will help in the journey.
            </p>
            <p class="about text-center text-white pb-3">Best wishes to our team.</p>


            <h2 class="text-center text-warning">
                Our Team </h2>


            <div class="row p-4">


                <div class="col-xl-3 col-md-6 ">
                    <div class="card intro shadow-lg w-100 mb-3 mb-3 ">
                        <img class="card-img-top" src="images/hariom.jpg">
                        <div class="card-body">
                            <h5 class="card-title">Hariom Vishwakarma</h5>
                            <h6 class="card-title">Team Leader</h6>
                            <p class="card-content">I am a student of Rungta College of Engineering and Technology Bhilai, I have done my graduation from Larangsai PG College Ramanujganj, Balrampur (C.G.). I am a Frontend Developer.</p>



                            <a class="email" href="mailto:hariomvishwakarma675@gmail.com">hariomvishwakarma675@gmail.com</a>
                            <p class="phone" >Contact : <a href="#">6260331250</a></p>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-md-6 ">
                    <div class="card intro shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/Amit.jpg">
                        <div class="card-body">
                            <h5 class="card-title">Amit Kumar Singh</h5>
                            <h6 class="card-title">HJ Member | Full Stack Developer</h6>
                            <p class="card-content">I am a student of Rungta College of Engineering and Technology Bhilai, I have done my graduation from Nalanda College, Biharsharif(Bihar). I am a Full-Stack Developer.</p>


                                <a class="email" href="mailto:devamitksingh@gmail.com">devamitksingh@gmail.com</a>
                            <p class="phone" >Contact : <a href="#">6203631459</a></p>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-md-6 ">
                    <div class="card intro shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/viv.jpeg">
                        <div class="card-body">
                            <h5 class="card-title">Vivek Kumar Prajapati</h5>
                            <h6 class="card-title">Member</h6>
                            <p class="card-content">I am a student of Rungta College of Engineering and Technology Bhilai, I have done my graduation from Bihar. I am a Frontend Developer.</p>

                                <a class="email" href="mailto:vivekprajapati0502@gmail.com">vivekprajapati0502@gmail.com</a>
                            <p class="phone" >Contact : <a href="#">9931515932</a></p>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-md-6 ">
                    <div class="card intro shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/ayu.jpeg">
                        <div class="card-body">
                            <h5 class="card-title">Ayush Sharma</h5>
                            <h6 class="card-title">Member</h6>
                            <p class="card-content">I am a student of Rungta College of Engineering and Technology Bhilai, I have done my graduation from Bihar.</p>

                                <a class="email" href="mailto:ayushsharma9281@gmail.com">ayushsharma9281@gmail.com</a>
                            <p class="phone" >Contact : <a href="#">7256869630</a></p>
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

        <?php include 'footer.php'; ?>







    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>