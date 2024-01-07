<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dubai</title>
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



    .dubai_card {
        background-image: url("images/dubai_card_body_image.jpg");
        background-size: 100% 100%;
    }
</style>

<body>
    <section class="container-fluid">
       
    <div class="container-fluid bg-light" id="menubar">
      <div class="row">
          <div class="col">
              <nav class="navbar navbar-expand-xl navbar-light bg-light">
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
                               <a class="nav-link active dropdown-toggle ml-5 text-warning" href="#" data-toggle="dropdown">
                                 Explore <i class='fas fa-globe'></i>
                              </a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="india_explore.php">India</a>
                                <a class="dropdown-item" href="United_State.php">United State</a>
                                <a class="dropdown-item" href="dubai.php">Dubai</a>
                                <a class="dropdown-item text-warning" href="russia.php">Russia</a>
                               </div>
                               </li>
                          <li><a class="nav-link active ml-5 " href="Special Deals.php">
                                  Special deals <i class='fas fa-gift'></i></a></li>
                          <li><a class="nav-link active ml-5 " href="About Us.php">
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










        <div class="container-fluid dubai_card">
            <h2 class="text-center p-3 text-warning">
                Top visiting palace in Russia </h2>

            <div class="row m-2">

                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 mb-3 ">
                        <img class="card-img-top" src="images/russia.png">
                        <div class="card-body">
                            <h5 class="card-title">Sochi in russia</h5>
                            <h6 class="card-title">Sightseeing | Architecture</h6>
                            <p class="card-content">Sochi, a coastal city on the Black Sea at the base of
                                 the Caucasus Mountains, is a "beach resort." Sochi was a famous Russian 
                                 vacation spot before the 2014 Winter Olympics, but the city only rose to fame after that.
                                  In the summer, tourists enjoy swimming in the water, while there are adventurous sports 
                                  like skiing in the winter.Rosa Khutor Ski Resort, Mount Akhun, Olympic Park, Stalin's Dacha,
                                   Vorontsovka Caves, and the Riviera Dolphinarium are a few of the well-known attractions in Sochi.
                                    So, to make your trip memorable and truly enjoyable, ensure you include this tourist place in your
                                     list without fail.</p>
                            <a href="booking.php" class="btn btn-success w-100">Book Now</a>
                        </div>
                    </div>
                </div>

                
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/secondrussia.png">
                        <div class="card-body">
                            <h5 class="card-title">St. Sophia Cathedral, Novgorod in Russia</h5>
                            <h6 class="card-title">Family-Friendly | Leisure</h6>
                            <p class="card-content">Because of its inviting environment and clean air, Lake Baikal is not only the deepest 
                                lake in the world but also the most stunning and pure place in Russia. It is one of Russia's most popular 
                                tourist sites in Siberian. Baikal is an excellent holiday destination since so many resorts also surround it. If you can manage the cold, wintertime
                                 trips are recommended since the lake freezes in unique patterns due to the high oxygen level in the air.
                                  Visitors may relax in the natural hot springs and ice skating and skiing. So, to make your trip memorable and
                                   truly enjoyable, ensure you
                                 include this tourist place in your list without fail.</p>
                        
                            <a href="booking.php" class="btn btn-success w-100">Book Now</a>
                        </div>
                    </div>
                </div>
              

                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/russia5.png">
                        <div class="card-body">
                            <h5 class="card-title">Red Square in Russia</h5>
                            <h6 class="card-title">Sightseeing</h6>
                            <p class="card-content">Red Square, in the centre of Moscow,
                                 is one of the most breathtaking vistas in Russia. Red Plaza
                                  got its name since it was a magnificent square and "red" in 
                                  older Russian referred to beauty. Around this gorgeous area are beautiful
                                   museums, churches, and administrative structures. The region draws millions of
                                    visitors from all corners of the world due to its rich heritage of culture and history.
                                     Red Square's must-see landmarks are the Kremlin Wall, Kazan Cathedral, Statue of Minin St. Basil's
                                      Cathedral, Lenin Mausoleum, The Iberian Gate, Pozharsky, State Hall Museum, and City Hall. So, to make 
                                      your trip memorable and truly enjoyable, ensure 
                                you include this tourist place in your list without fail.
                                </p>
                            <a href="booking.php" class="btn btn-success w-100">Book Now</a>
                        </div>
                    </div>

                </div>

</div>


                <div class="row m-2">

                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/fourthrussia.png">
                        <div class="card-body">
                            <h5 class="card-title">Krenitsyn volcano, Kuril islands of Onekotan In Russia</h5>
                
                            <p class="card-content">
                                The island of Onekotan is uninhabited. The Krenitsyn volcano is situated in the island's
                                 centre, close to a lake. Although it has been dormant since the 1950s, this volcano last
                                  erupted. There are no available activities, and visitors must get a government permit before 
                                  visiting. However, the beauty of the surroundings and the fascination with nature justifies the
                                   struggle. So, to make your trip memorable and truly enjoyable,
                                 ensure you include this tourist place in your list without fail.
                            </p>
                            <a href="booking.php" class="btn btn-success w-100">Book Now</a>
                        </div>
                    </div>
                </div>
            


                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/thirdrussia.png">
                        <div class="card-body">
                            <h5 class="card-title">Lake Baikal, Siberia in Russia</h5>
                            <h6 class="card-title">Leisure | Family-Friendly</h6>
                            <p class="card-content">Because of its inviting environment and clean air, Lake Baikal 
                                is not only the deepest lake in the world but also the most stunning and pure place in Russia. 
                                It is one of Russia's most popular tourist sites in Siberian. Baikal is an excellent holiday 
                                destination since so many resorts also surround it. If you can manage the cold, wintertime trips are
                                 recommended since the lake freezes in unique patterns due to the high oxygen level in the air. Visitors may
                                  relax in the natural hot springs and ice skating and skiing. So, to make your trip memorable and truly enjoyable,
                                 ensure you include this tourist place in your list without fail.</p>
                            <a href="booking.php" class="btn btn-success w-100">Book Now</a>
                        </div>
                    </div>
                </div>



                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/russia6.png">
                        <div class="card-body">
                            <h5 class="card-title">Manpupuner Rock Formations in Russia
                            </h5>
                            <h6 class="card-title">Sightseeing</h6>
                            <p class="card-content">Manpupuner Rocks, one of the most impressive
                                 sites to visit in Russia, is made up of strangely formed pillars that,
                                  at first glance, resemble the Easter Island Heads, or perhaps they are the creation of aliens.
                                   These seven pillars are nothing less than a mystery, and no one is certain of their origin.
                                    Some claim they were created by natural processes, while others assert our predecessors constructed 
                                    them for religious purposes. Some people even believe that it serves as a gathering spot for spirits.
                                     So, to make your trip memorable and truly enjoyable, ensure 
                                you include this tourist place in your list without fail.
                                </p>
                            <a href="booking.php" class="btn btn-success w-100">Book Now</a>
                        </div>
                    </div>
                </div>
</div>



<div class="row m-2">

                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/russia7.png">
                        <div class="card-body">
                            <h5 class="card-title">Petersburg in Russia</h5>
                            <p class="card-content">One of Russia's most well-liked and excellent 
                                tourist destinations belongs on our list. St. Petersburg is undoubtedly
                                 a beautiful architectural location, much like Red Square. This city has expansive gardens, 
                                 gorgeous cathedrals, monuments, museums, and mansions. Hotels, restaurants, taverns, and exotic
                                  dance bars are also well-known. So, to make your trip memorable and truly enjoyable,
                                 ensure you include this tourist place in your list without fail.
                                </p>
                            <a href="booking.php" class="btn btn-success w-100">Book Now</a>
                        </div>
                    </div>
            </div>

            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card shadow-lg w-100 mb-3 ">
                    <img class="card-img-top" src="images/russia8.png">
                    <div class="card-body">
                        <h5 class="card-title">Suzdal in Russia
                        </h5>
                        <p class="card-content">Suzdal is a medieval Russian city that the government
                             has carefully preserved. In this city, visitors may see the best examples of Russian
                              architecture. Most residents reside in modest wooden dwellings, and there are no contemporary
                               structures in the city. Suzdal provides a picture of what Russia was like in earlier times, 
                               from onion-shaped multicoloured domes to finely crafted cathedrals and monasteries. Suzdal is 
                               a must-visit location because of its fascinating history, breathtaking scenery, and tranquil environment.
                                So, to make your trip memorable and truly enjoyable, ensure you
                             include this tourist place in your list without fail.</p>
                 <a href="booking.php" class="btn btn-success w-100">Book Now</a>
                    </div>
                </div>
            </div>


                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/russia9.png">
                        <div class="card-body">
                            <h5 class="card-title">Kazan in Russia</h5>
                            <h6 class="card-title">Sightseeing</h6>
                            <p class="card-content">Like most Indian megacities, Kazan is a multicultural 
                                city where people of all religions and cultures coexist. Tourists visit Kazan
                                 to admire the city's Kremlin, which UNESCO designated as a historical site. The castle, 
                                 gallery, and church are the main draws. The bustling Bauman Street in Kazan is a pedestrian-friendly
                                  street packed with eateries, bookshops, cafes, and boutiques. So, to make your trip memorable and truly 
                                  enjoyable, ensure
                                 you include this tourist place in your list without fail.
                                </p>
                            <a href="booking.php" class="btn btn-success w-100">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row m-2">

                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/russia10.png">
                        <div class="card-body">
                            <h5 class="card-title">Karelia in Russia</h5>
                            <h6 class="card-title">Sightseeing</h6>
                            <p class="card-content">The stunning area of land that stretches from the White Sea shoreline to
                                 the Gulf of Finland was made by a glacier. Karelia is home to Lake Onega and Lake Ladoga, the two biggest
                                  lakes in Europe. Karelia is one of nature's best marvels, with its vast lakes and picturesque highlands.
                                   This location is fantastic for recreational activities like white water rafting, trekking, bicycling,
                                    sunbathing, boating, and horse riding because of the magnificent outdoors. Travellers may refresh themself
                                     at several spa getaways in the region. So, to make your trip memorable and truly enjoyable,
                                 ensure you include this tourist place in your list without fail.
                                </p>
                            <a href="booking.php" class="btn btn-success w-100">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/russia11.png">
                        <div class="card-body">
                            <h5 class="card-title">Volga River in Russia</h5>
                            <h6 class="card-title">visiting place </h6>
                            <p class="card-content">You'll notice that Russia has both vast and little 
                                bodies of water when you arrive. Russia takes great pride in the Volga River,
                                 which at 3700 km, is the longest river in the world. Due to the expansion of this river,
                                  various settlements have appeared along its banks. The Volga River greatly impacted the development 
                                  of ancient Russian trade with the rest of the globe. You may take a boat along its banks to see the length 
                                  and splendour of this magnificent river. So, to make your trip memorable and truly enjoyable,
                                 ensure you include this tourist place in your list without fail.
                                </p>
                            <a href="booking.php" class="btn btn-success w-100">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card shadow-lg w-100 mb-3 ">
                    <img class="card-img-top" src="images/russia12.png">
                    <div class="card-body">
                        <h5 class="card-title"> Altai in Russia</h5>
                        <p class="card-content">Siberia's Altay Mountains can be found in China, Kazakhstan, 
                            Mongolia, and Russia. It has historically been home to several ethnic groups engaged in forestry
                             and horse breeding, and it is now a highly well-liked tourism attraction for both residents and visitors.
                              The Altai Mountains are a component of the UNESCO World Heritage Site and several nature reserves and lakes. 
                              Perfectly preserved beauty exists in Altay, drawing cross-country visitors and other outdoor enthusiasts in 
                              the winter and hikers, kayakers, and climbers there in the summer. Here, you can also engage in more
                               unconventional pursuits like diving, cave exploring, and mushroom and herb gathering. So, To make your
                                trip memorable and truly enjoyable, ensure you include
                             this tourist place in your list without fail.
                            </p>
                        <a href="booking.php" class="btn btn-success w-100">Book Now</a>
                    </div>
                </div>
            </div>


            </div>











            <div class="row m-2">
                

                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/russia13.png">
                        <div class="card-body">
                            <h5 class="card-title"> Moscow in Russia</h5>
                            <p class="card-content">Most international airlines arrive or at least stop in Moscow.
                                 Therefore it's crucial to organize your trip so that you have at least a few hours to see Moscow.
                                  The Russian capital is a unique fusion of the outdoors, beautiful architecture, and a wide variety of 
                                  historical artefacts. The Red Square, Kremlin, and the bustling St. Basil's Cathedral are located in the 
                                  city's centre, where most tourists to Moscow start their vacation. The glass and steel-roofed shopping centre
                                   GUM is a famous sight and a great place to eat traditional Russian food, even for foreigners who 
                                cannot purchase the expensive things sold here.
                                </p>
                            <a href="booking.php" class="btn btn-success w-100">Book Now</a>
                        </div>
                    </div>
                </div>





                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/russia14.png">
                        <div class="card-body">
                            <h5 class="card-title"> The Russian Tundra in Russia</h5>
                            <h6 class="card-title">leisure | Sightseeing</h6>
                            <p class="card-content">Only moss, bushes, and some kinds of grass can survive the winter 
                                here since the temperatures are too low for trees to mature. Arctic ice, or permanently frozen ground, 
                                is commonly used to describe most regions' tundra. If the earth's top layer melts throughout the summer,
                                 wetlands and rivers will spread across the land, creating stunning icebergs of varying colours. Polar bears,
                                  penguins, grey wolves, and an abundance of birds during the breeding season call the Russian tundra home.
                                 So, ensure you do not miss out on these things to explore.
                                </p>
                            <a href="booking.php" class="btn btn-success w-100">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/russia15.png">
                        <div class="card-body">
                            <h5 class="card-title">Peterhof in Russia</h5>
                            <h6 class="card-title"></h6>
                            <p class="card-content">The Peterhof Palace is the city's claim to 
                                fame, even though it is home to a university and a significant Russian watch
                                 manufacturing company. The palace grounds spanned nearly 4000 hectares and were initially
                                  planned and constructed in the early 1700s for Tsar Peter the Great in style similar to the 
                                  Palace of Versailles.

                                Around the palace are 173 garden fountains, some of which, like the Grand
                                 Cascade fountains, have unique characteristics that turn on water jets when 
                                 visitors approach. The lower gardens have marble sculptures, shady strolling lanes, 
                                 and an aviary pavilion. They were constructed in the formal French style. So, to make your 
                                 trip memorable and truly enjoyable, 
                                ensure you include this tourist place in your list without fail.</p>
                            
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

<?php include 'footer.php'; ?>
            



    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>