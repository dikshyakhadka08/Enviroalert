<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>EnviroAlert - Environment Monitoring and Flood Detection System</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                        <img src="assets/images/enviroalert.png" alt="EnviroAlert Logo" style="width: 100px; height: 100px;">
                        <span class="logo-text">~ EnviroAlert ~</span>
                      <a  class ="menu-trigger">
                        <span>Menu</span>
</a>
                    </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="/about">About</a></li>
                            <li class="scroll-to-section"><a href="#menu">News</a></li>
                        <li class="scroll-to-section"><a href="/contact">Contact Us</a></li>
                        <li class="scroll-to-section">
                       @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                    <x-app-layout>
</x-app-layout>
                    @else
                    <li class="scroll-to-section"> <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
</li> 
                        <li class="scroll-to-section">
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
</li>
                        @endif
                    @endauth
                </div>
            @endif
                        </li>
                        </ul>        
                        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
    <div class="container-fluid">
        <div class="row">
            <!-- Remove col-lg-4 div and its content -->
            
            <!-- Update col-lg-8 to col-lg-12 to take up the full width -->
            <div class="col-lg-12">
                <div class="main-banner header-text">
                    <div class="Modern-Slider">
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-01.jpg" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-02.jpg" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-03.jpg" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- ***** Main Banner Area End ***** -->
    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu" padding: 20px;>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6 >News Series </h6>
                     <h2>Floods & Environment Updates</h2> 
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">
                        <div class='card card1'>
                          
                            <div class='info'>
                              <h1 class='title'>Floods damaged a bridge in Panchthar</h1>
                              <p class='description'>5 Dead, 29 Feared Missing After Floods and Landslides in Koshi Province</p>
                             
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card2'>
                          
                            <div class='info'>
                              <h1 class='title'>Disaster authorities in Nepal report that dozens of people have died</h1>
                              <p class='description'>Dozens of Lives Lost After Rain Heavy Rain Triggers Floods and Landslides  </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                          
                            <div class='info'>
                              <h1 class='title'>Drones for Flood Disaster Risk Reduction</h1>
                              <p class='description'>The presence of Unmanned Aerial Vehicles (UAV’s), or ‘drones’ as they are commonly known.</p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card4'>
                 
                            <div class='info'>
                              <h1 class='title'>5 Dead, 10 Missing After Floods in Darchula</h1>
                              <p class='description'>Invasion of privacy is a common concern, even to those in distress, as is danger to other aircraft, </p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card5'>
                    
                            <div class='info'>
                              <h1 class='title'>Flood Losses in Europe to Increase Fivefold by 2050</h1>
                              <p class='description'>The European Environment Agency recently published a report on flooding in Europe, “Floodplain management: reducing flood risks and restoring healthy ecosystems”</p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                        
                            <div class='info'>
                              <h1 class='title'>Drones Play Key Role in Cyclone</h1>
                              <p class='description'>The study assessed the data, researchers have predicted that by 2050.</p>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    
    <!-- ***** Chefs Area Ends ***** --> 
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="/"><img src="assets/images/enviroalert.png" alt="EnviroAlert Logo" style="width: 200px; height: 200px;"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright EnviroAlert
                        
                        <br>Design: Dikshya Khadka</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>