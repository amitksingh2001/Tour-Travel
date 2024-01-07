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
                                <a class="dropdown-item  text-warning" href="dubai.php">Dubai</a>
                                <a class="dropdown-item" href="russia.php">Russia</a>
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









  <div class="container-fluid ">
            <h2 class="text-center p-3 text-warning">
                Top Visiting Place in Dubai </h2>

            <div class="row m-2">

                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 mb-3 ">
                        <img class="card-img-top" src="images/burj_khalifa.webp">
                        <div class="card-body">
                            <h5 class="card-title">Burj Khalifa</h5>
                            <h6 class="card-title">Sightseeing | Architecture</h6>
                            <p class="card-content">With a height of 2715 feet (828 meters), the world's highest
                                structure pierces the sky and was finished six years after excavation work started. It
                                is an essential adventure to view the sights from the tallest skyscraper in the world.</p>
                            <p><b>Why Visit:</b> The Burj Khalifa is a magnificent feat of engineering and architecture with two observation decks on the 124th and 148th floors, as well as a restaurant-bar on the 122nd.</p>
                            <p><b>Tip:</b> Visiting Burj Khalifa is a popular activity and it would require an advance booking if you want to visit during the night or at sunset.</p>
                            <p><b>Location:</b> 1 Sheikh Mohammed bin Rashid Blvd - Downtown Dubai Dubai - United Arab Emirates</p>
                            <a href="booking.php" class="btn btn-success w-100">Book Ticket</a>
                        </div>
                    </div>
                </div>

                
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/miracle_garden.webp">
                        <div class="card-body">
                            <h5 class="card-title">Dubai Miracle Garden</h5>
                            <h6 class="card-title">Family-Friendly | Leisure</h6>
                            <p class="card-content">You get a sense of Alice in Wonderland-style surrealism when you visit this location, which is advertised as the largest natural flower garden in the world and spans 2000 square meters. Pass clocks, castles, and peacocks with strange blossoms as you go.</p>
                            <p><b>Why Visit:</b>On-site dining options include Hardee's and Krispy Kreme, as well as a gift shop and a mini trampoline park.</p>
                            <p><b>Tip:</b>Avoid visiting the park during the weekends as the number of visitors may be overwhelming for you. Weekdays are a great time to visit.</p>
                            <p><b>Location:</b>Street 3 - Al Barsha - Al Barsha
                                South Dubai - United Arab Emirates</p>
                            <a href="booking.php" class="btn btn-success w-100">Book Ticket</a>
                        </div>
                    </div>
                </div>
              

                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/underwater_zoo.webp">
                        <div class="card-body">
                            <h5 class="card-title">Dubai Aquarium & Underwater Zoo</h5>
                            <h6 class="card-title">Leisure | Family-Friendly</h6>
                            <p class="card-content">The most captivating sight inside Dubai Mall is this enormous aquarium, where countless species dart and fly among fake coral. The primary attractions are sumo-sized groupers, huge schools of pelagic fish, sharks, and rays.</p>
                            <p><b>Why Visit:</b>The zoo's indisputable headliner is King Croc, a 5.1m-long Australian saltwater crocodile. The massive reptile is 40 years old and weighs a whopping 750 kilograms.</p>
                            <p><b>Tip:</b>A lot of the Dubai Aquarium can be seen for free. If the weather permits, take your time and explore the aquatic creatures outside of the tunnel.</p>
                            <p><b>Location:</b>Unit SF-115 - شارع المركز المالي - Downtown Dubai - Dubai - United Arab Emirates</p>
                            <a href="booking.php" class="btn btn-success w-100">Book Ticket</a>
                        </div>
                    </div>
                </div>

                </div>

                


                <div class="row m-2">

                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/ain_dubai.webp">
                        <div class="card-body">
                            <h5 class="card-title">Ain Dubai</h5>
                            <h6 class="card-title">Observation Wheel</h6>
                            <p class="card-content">The world's highest and largest observation wheel, Ain Dubal, commonly known as the Dubai Eye, is situated on Bluewaters Island, across from the beachfront of Jumeirah Beach Residences (JBR). This is fast becoming an essential Dubai attraction.</p>
                            <p><b>Why Visit:</b>A trip along the Ain Dubai will provide you access to unmatched views of the city and its shoreline from a height of 250 meters (820 feet).</p>
                            <p><b>Tip:</b>If you want access to a sky bar and lounge, go for the upgraded ticket that provides a much better value for your money.</p>
                            <p><b>Location:</b>Bluewaters - Bluewaters Island-Dubai- United Arab Emirates</p>
                            <a href="booking.php" class="btn btn-success w-100">Book Ticket</a>
                        </div>
                    </div>
                </div>
            

                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/dhow_cruise.webp">
                        <div class="card-body">
                            <h5 class="card-title">Dhow Cruise</h5>
                            <h6 class="card-title">Sightseeing</h6>
                            <p class="card-content">Taking a dhow cruise is an unusual approach to discovering Dubai's nicest areas, Dhows are sturdy wooden boats that have historically been utilized by Dubai's fishing tribes. A Dubai cruise is currently one of the most well-liked tourist attractions in the city.</p>
                            <p><b>Why Visit:</b>Every cruise provides its passengers a distinctive experience, whether it be the setting, nearby famous landmarks, delectable buffet meals, or live entertainment.</p>
                            <p><b>Tip:</b>You can take a pick from Dubai Marina, Dubai Creek, and Dubai Water Canal for your Dhow cruise in Dubai.</p>
                            <a href="booking.php" class="btn btn-success w-100">Book Ticket</a>
                        </div>
                    </div>
                </div>





                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/dubai_garden_glow.webp">
                        <div class="card-body">
                            <h5 class="card-title">Dubai Garden Glow</h5>
                            <h6 class="card-title">Sightseeing</h6>
                            <p class="card-content">The ideal family attraction for visitors to Dubai, Dubai Garden Glow is a distinctive recreational park that is situated in Zabeel Park. The Glow Park, which is divided into five zones, includes installations made of homemade lights that are favorable to the environment.</p>
                            <p><b>Why Visit:</b>In keeping with its motto, "It's a Wonderful World," Dubai Glow Garden presents five distinctive themes that combine magic, history, and art.</p>
                            <p><b>Tip:</b>To avoid the overall rush of the people, consider going to Garden Glow during the weekdays.</p>
                            <p><b>Location:</b>Zabeel Park, Gate No-6 & 7 Area-B- Dubai United Arab Emirates</p>
                            <a href="booking.php" class="btn btn-success w-100">Book Ticket</a>
                        </div>
                    </div>
                </div>
</div>



<div class="row m-2">

                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/aquaventure_waterpark.webp">
                        <div class="card-body">
                            <h5 class="card-title">Aquaventure Waterpark</h5>
                            <h6 class="card-title">Theme Park</h6>
                            <p class="card-content">Aquaventure Waterpark, one of the best water theme parks in Dubai, is home to rides and attractions like Trident Tower, Shockwave, and Blackout. With its unique rides and attractions, Aquaventure Waterpark elevates the standard water theme park experience to a whole new level.</p>
                            <p><b>Why Visit:</b>Get your heart pumping on the more than 30 coasters spread across three towers, as well as the marine and watersports activities, private beaches, and waterslides.</p>
                            <p><b>Tip:</b>Make sure you start by covering all the popular rides. You must not skip rides like Leap of Faith, Blackout, and Slitherine because they are all quite popular.</p>
                            <p><b>Location:</b>Atlantis The Palm-Crescent Rd-Dubai- United Arab Emirates</p>
                            <a href="booking.php" class="btn btn-success w-100">Book Ticket</a>
                        </div>
                    </div>
            </div>

            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card shadow-lg w-100 mb-3 ">
                    <img class="card-img-top" src="images/wild_wadi_waterpark.webp">
                    <div class="card-body">
                        <h5 class="card-title">Wild Wadi Water Park</h5>
                        <h6 class="card-title">Theme Park</h6>
                        <p class="card-content">A range of thrilling rides and slides can be found at the Wild Wadi water park, which is set against the stunning Burj Al Arab. The Wild Wadi offers rides that will take your breath away as well as a kid-friendly play area. It has elevated to one of Dubai's most sought-after travel spots.</p>
                        <p><b>Why Visit:</b>Test your nerve on more than 30 thrilling rides, including the raging Tantrum Alley and the dizzying drop off the 105-foot Jumeirah Sceirah.</p>
                        <p><b>Tip:</b>You cannot bring your own food inside the water park because outside food is not permitted. However, you can eat in a lot of cafes in Wild Wadi.</p>
                        <p><b>Location:</b>Opp. Burj Al Arab Jumeirah St - Umm Suqein-Umm Suqeim 3-Dubai - United Arab Emirates</p>
                        <a href="booking.php" class="btn btn-success w-100">Book Ticket</a>
                    </div>
                </div>
            </div>


                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/view_at_palm.webp">
                        <div class="card-body">
                            <h5 class="card-title">The View at the Palm</h5>
                            <h6 class="card-title">Sightseeing</h6>
                            <p class="card-content">The Palm Tower is a beautiful location with an outstanding 52-story building that houses both commercial and residential areas. The View, a prestigious observation deck situated on the 52nd level, is the cherry on top of this extremely tall cake, though.</p>
                            <p><b>Why Visit:</b>The View at the Palm is located 240 meters above sea level and surpasses most observation decks in the globe for its panoramic views of the sea and soaring skyscrapers.</p>
                            <p><b>Tip:</b>The Palm Jumeirah is a one-stop location for entertainment, shopping, and dining, together with the Palm Tower.</p>
                            <p><b>Location:</b>The Palm Jumeirah - Dubal-United Arab Emirates</p>
                            <a href="booking.php" class="btn btn-success w-100">Book Ticket</a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row m-2">

                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/desert_safari.webp">
                        <div class="card-body">
                            <h5 class="card-title">Dubai Desert Safari</h5>
                            <h6 class="card-title">Sightseeing</h6>
                            <p class="card-content">While the majority of tourists rush to prominent attractions like the Burj Khalifa or the Palm Jumeirah, you should be sure not to skip out on what will undoubtedly be the highlight of your trip: a Dubai desert safari. An exciting and adventurous desert safari in Dubai is waiting for you.</p>
                            <p><b>Why Visit:</b>You can do dune bashing and sandboarding, smoke some delectable sheesha, ride a camel, and take part in a charming traditional dance with your family and friends while on a desert safari.</p>
                            <p><b>Tip:</b>Be prepared to be roasted in the sun on this activity irrespective of the weather. Protect your skin and wear breathable clothing.</p>
                            <p><b>Location:</b>Downtown Dubai-Dubai - United Arab Emirates</p>
                            <a href="booking.php" class="btn btn-success w-100">Book Ticket</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/burj_al_arab.webp">
                        <div class="card-body">
                            <h5 class="card-title">Burj Al Arab</h5>
                            <h6 class="card-title">Commercial | Architecture</h6>
                            <p class="card-content">This iconic flagship hotel, which debuted in 1999 and is located on a man-made island, boasts a fleet of chauffeur-driven Rolls Royce vehicles in addition to its own helicopter. The hotel has 202 suites to host guests.</p>
                            <p><b>Why Visit:</b>Some of the 24,000 sq meters of marble used at Burj Al Arab hail from the same place where Michelangelo got his material.</p>
                            <p><b>Tip:</b>Get an advanced reservation if you want to visit any of the restaurants located in the building as direct access is only available for hotel guests.</p>
                            <p><b>Location:</b>جميرا - Umm Suqein 3-Dubai - United Arab Emirates</p>
                            <a href="booking.php" class="btn btn-success w-100">Book Ticket</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card shadow-lg w-100 mb-3 ">
                    <img class="card-img-top" src="images/dolphinarium.webp">
                    <div class="card-body">
                        <h5 class="card-title">Dubai Dolphinarium</h5>
                        <h6 class="card-title">Kid-Friendly</h6>
                        <p class="card-content">Unique live wildlife displays can be seen at the Dubai Dolphinarium. Select between the exotic bird display or the dolphin and seal show. You won't be dissatisfied. If these aquatic creatures interest you, there isn't a better place for you to visit in Dubai than the Dubal Dolphinarium.</p>
                        <p><b>Why Visit:</b>The Dubai Dolphinarium provides entertaining activities that the whole family may enjoy, like diving with dolphins, exploring the mirror maze, and jumping on the trampoline.</p>
                        <p><b>Tip:</b>Strict dress code needs to be adhered to at Dubai Dolphinarium as the authority reserves the right to refuse entry if the attire is inappropriate.</p>
                        <p><b>Location:</b>Riyadh Street, Inside the Creek Park Gate 1 Dubai Dolphinarium Building Dubai United Arab Emirates</p>
                        <a href="booking.php" class="btn btn-success w-100">Book Ticket</a>
                    </div>
                </div>
            </div>


            </div>











            <div class="row m-2">
                

                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/madinat_jumeirah.webp">
                        <div class="card-body">
                            <h5 class="card-title">Madinat Jumeirah</h5>
                            <h6 class="card-title">Commercial | Sightseeing</h6>
                            <p class="card-content">Madinat Jumeirah is a recreation of a traditional Arab village in the modern era, complete with a souq (market), palm-fringed rivers, and hotels and villas painted in shades of the desert and sporting wind towers. One of Dubal's most alluring creations is it.</p>
                            <p><b>Why Visit:</b>Shopping at Madinat Jumeirah is one of the most authentic Dubai experiences you can have on your trip.</p>
                            <p><b>Tip:</b>If you see some stairs, climb them because they can take you to a secret terrace with a breathtaking view of the vast complex.</p>
                            <p><b>Location:</b>Al Sufouh 1 - Dubai - United Arab Emirates</p>
                            <a href="booking.php" class="btn btn-success w-100">Book Ticket</a>
                        </div>
                    </div>
                </div>





                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/fountain.webp">
                        <div class="card-body">
                            <h5 class="card-title">Dubai Fountain</h5>
                            <h6 class="card-title">leisure | Sightseeing</h6>
                            <p class="card-content">With the glittering Burj Khalifa serving as a backdrop, this magnificent dancing fountain is situated in the middle of a sizable lake. To stirring soundtracks of classical, Arabic, and world music, water undulates like a belly dancer, arcs like a dolphin, and surges as high as 140 meters.</p>
                            <p><b>Why Visit:</b>Due to its endless visual appeal and accessibility while in Dubai, this fountain has gained a lot of social media traction, and is a must-visit.</p>
                            <p><b>Tip:</b>Some of the best viewing spots are the restaurants at Souk Al Bahar, the bridge linking Souk Al Bahar with Dubai Mall, and the Dubai Mall waterfront terrace.</p>
                            <p><b>Location:</b>Sheikh Mohammed bin Rashid Blvd-Downtown Dubai Dubai - United Arab Emirates</p>
                            <a href="booking.php" class="btn btn-success w-100">Book Ticket</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card shadow-lg w-100 mb-3 ">
                        <img class="card-img-top" src="images/ras_al_khor_wildlife_sancutuary.webp">
                        <div class="card-body">
                            <h5 class="card-title">Ras Al Khor WildLife Senctuary</h5>
                            <h6 class="card-title">Sanctuary | Family-Friendly</h6>
                            <p class="card-content">Despite being surrounded by highways, this unanticipated oasis on Dubai Creek serves as an Important rest stop for migratory waterbirds on the east Africa-west Asian flyway. In addition to Pacific golden plovers and broad-billed sandpipers, other raptors may be scouting the skies in the winter.</p>
                            <p><b>Why Visit:</b>The Ras Al Khor Wildlife Sanctuary is an internationally regarded institution for the conservation of wetlands.</p>
                            <p><b>Tip:</b>In this 6.2 square kilometer mosaic of salt flats, mudflats, mangroves, and lagoons, birdwatchers can spot more than 170 species from the three platforms with sharp binoculars.</p>
                            <p><b>Location:</b>58RF+G32-Ras Al Khor Rd-Ras Al Khor- Dubai - United Arab Emirates</p>
                            <a href="booking.php" class="btn btn-success w-100">Book Ticket</a>
                        </div>
                    </div>
                </div>
                </div>




<section class="container-fluid clearfix">
<div class="row">
<div class="offset-xl-11 col">
<a href="#" class="btn btn-primary mb-3 float-right" title="Go to top"><i class="fa fa-arrow-up"></i></a>
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