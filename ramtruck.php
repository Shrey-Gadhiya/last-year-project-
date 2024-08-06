<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ramtruck.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="icon" href="img/dodge logo.png">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>RAM TRUCK</title>
</head>
<body style="color: white; background-color: black;">
    <header>

    <!-- css back img set up -->
    <style>
      header{
    height: 100vh;
    min-height: 40em;
    background: url("ramtruckimg/background.jpg")no-repeat center;
    background-size: cover;
}

.banner-img{
    background: url("ramtruckimg/engine.jpeg") no-repeat center;
    background-size: cover;
    width: 100%;
    height: 100vh;
    min-height: 40em;
    transition: 0.3s;
}
    </style>


<!-- navbar  -->
<nav class="navbar navbar-dark bg-dark fixed-top" style="margin: 0;padding: 0;">
  <div class="container-fluid" style="margin: 0;padding: 1;">
    <a class="navbar-brands" href="DODGE.php"><img src="img/logo.png" alt="" height="30px" style="border-radius: 25px;"></a>
    <a class="navbar-brand" href="DODGE.php" style="margin-left: 850px;  padding: 0;text-align: end;font-size: medium;">HOME</a>
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin: 0;padding: 0;">
        CAR'S
      </button>
      <ul class="dropdown-menu" style="background-color: gray;">
        <li><a class="dropdown-item" href="DODGE.php">2023 DODGE CHALLNGER SRT DEMON 170</a></li>
        <li><a class="dropdown-item" href="charger.php">2023 DODGE HEELCAT CHARGER</a></li>
        <li><a class="dropdown-item" href="hornet.php">2024 DODGE HORNET</a></li>
        <li><a class="dropdown-item" href="durango.php">2023 DODGE HELLCAT DURANGO</a></li>
        <li><a class="dropdown-item" href="ramtruck.php">RAM TRX TRUCK</a></li>
      </ul>
    </div>
    <a class="navbar-brand" href="about.php" style="margin: 0;padding: 0; font-size: medium;">ABOUT US</a>
    <a class="navbar-brand" href="logout.php" style="margin: 0;padding: 3px;font-size: medium;background-color:orange;color:black;border:solid 3px white;border-radius:3px"><b>Log Out</b></a>    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation" >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">MENU</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="DODGE.php">HOME</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="about.php">ABOUT US</a>
            </li>
       
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="DODGE.php"> DODGE CHALLNGER SRT DEMON 170</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="charger.php"> DODGE HEELCAT CHARGER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="hornet.php">DODGE HORNET</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="durango.php">DODGE HELLCAT DURANGO</a>
            </li>
            <li class="nav-ite
              <a class="nav-link active" aria-current="page" href="ramtruck.php">RAM TRX TRUCK</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="privacy.php">PRIVACY POLICE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="cargallery.php">GALLERY</a>
            </li><br>
            <li class="nav-item">
            <a class="navbar-brandS" href="logout.php" style=" text-decoration:none;  margin: 0;padding: 6px;font-size: medium;background-color:orange;color:black;border:solid 3px white;border-radius:3px"><b>Log Out</b></a>  
        </ul>
      </div>
    </div>
  </div>
</nav>


       <!-- last speed meter icons  -->
        <div class="sidebar-backdrop"></div>
        <div class="header-body">
            <h1 class="title" style="color: white;text-align: left; background-color: black; border: solid rgb(0, 0, 0) 2px ;border-radius: 5px;"></h1>
            <div>
                <div class="stats" style="margin-bottom: -37px;">
                    <div>
                        <div class="gauge">
                            <img src="img/speedometer.png">
                            <h2>4.44<span>s</span></h2>
                        </div>
                        <div>
                            <small>0-60 mph</small>
                        </div>
                    </div>
                    <div>
                        <div>
                            <h2>
                                <span>+</span>118<span>km/h</span>
                            </h2>
                        </div>
                        <div>
                            <small>Top Speed</small>
                        </div>
                    </div>
                    <div>
                        <div>
                            <h2>420<span>hp</span></h2>
                        </div>
                        <div>
                            <small>Horse Power</small>
                        </div>
                    </div>
                    <a href="https://e-shop.dodge.com/t1/2023/challenger/?ott=start-buying-process&refrel=dodge&vehicle_type=new&zipcode=10004" class="btn" style="color: rgb(255, 255, 255); border: 2px solid rgb(255, 255, 255); font-size: large;">PRICE : $89,070</a>
                </div>
                <!-- <a href="https://www.tesla.com/roadster/reserve#payment" class="btn btn-mobile">Reserve Now</a> -->
                <a href="#video">
               <img src="img/pngegg (1).png" class="arrow-down" /></a>
            </div>
        </div>
    </header>
    <section id="video">
        <video autoplay muted loop data-aos="fada-up" data-aos-duration="1200" src="ramtruckimg/upper.mp4">
        </video>
    </section>
    <section class="specs">
        <ul>
            <li>
                <span>Base Specs</span>
            </li>
            <li>
                <span>Acceleration 0-60 mph</span>
                <span>4.44s</span>
            </li>
            <li>
                <span>Acceleration 0-118 mph</span>
                <span>10.5s</span>
            </li>
            <li>
                <span>Acceleration 1/4 mile</span>
                <span>97</span>
            </li>
            <li>
                <span>Top Speed</span>
                <span>Over 118km/h</span>
            </li>
            <li>
                <span>Wheel Torque</span>
                <span>365 Nm</span>
            </li>
            <li>
                <span>Mile Range</span>
                <span>25 km/h</span>
            </li>
            <li>
                <span>Seating</span>
                <span>6</span>
            </li>
            <li><span>Drive</span>
            <span>All-Wheel-Drive / Rear-Wheel-Drive </span>
             </li>
             <li>
                <span>Base Reservation</span>
                <span> $89,070</span>
             </li>
        </ul>
    </section>
    <section class="about">
        <img src="ramtruckimg/back.jpg" data-aos="fada-up" data-aos-duration="1200"/>
        <div class="about-text"> 
            <h2>Designed for Performance and Aero Efficiency</h2> 
            <p>
                The Dodge Ram TRX is a high-performance off-road pickup truck that stands out with its aggressive design and powerful stance. It features a bold, wide body with a menacing grille, flared fenders, and massive all-terrain tires that enhance its rugged appearance. The truck's aerodynamics are optimized with functional hood scoops and air intakes, providing both style and practicality for extreme off-road adventures.
            </p>
        </div>
    </section>
    <section class="interior">
        <img src="ramtruckimg/inteiror.jpg" data-aos="fada-up" data-aos-duration="1200"/>
        <div>
            <h2>Interior</h2>
            <p>
                the Ram TRX offers a luxurious yet rugged cabin designed for comfort and functionality. Premium materials like leather and suede are combined with robust, easy-to-clean surfaces, making it ideal for both daily driving and off-road excursions. The interior is equipped with the latest technology, including a large infotainment screen, customizable digital displays, and advanced driver-assistance systems, ensuring a connected and safe driving experience.
            </p>
        </div>
    </section>
    <section class="roof">
        <div class="banner-img" data-aos="fade-up" data-aos-duration="1200">
        </div>
        <div class="roof-text" data-aos="fade-up" >
            <h2>V8 HEMI SuperCharged Engine</h2>
            <p>
                the Dodge Ram TRX is powered by a supercharged 6.2-liter HEMI V8 engine, delivering exceptional performance with over 700 horsepower. This powerhouse enables the truck to conquer any terrain with ease, supported by an advanced suspension system and adaptive dampers for superior handling and comfort. The TRX's engineering excellence ensures it remains at the forefront of high-performance off-road vehicles, providing both thrill and capability.
            </p>
        </div>
    </section>
    <br><br>
    <section>
        <center id="last-video"><video autoplay muted loop data-aos="fada-up" data-aos-duration="1200" src="ramtruckimg/last.webm">
        </video></center>
        <script src="r"></script>
        <div class="action">
            <span class="line"></span>
            <a href="https://e-shop.dodge.com/t1/2023/challenger/?ott=start-buying-process&refrel=dodge&vehicle_type=new&zipcode=10004" class="btn"  style="color: rgb(255, 255, 255); border: 2px solid rgb(255, 255, 255);">BUY NOW</a>
        </div>
    </section>
   
  <!-- footer -->
  <section class="footer" style="border: solid white 1px;border-radius: 7px;margin: 3px;">
            <div class="footer-row">
              <div class="footer-col">
                <h4>INFORMATION</h4>
                <ul class="links">
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="privacy.php">PRIVACY POLICY</a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>Explore</h4>
                <ul class="links">
                  <li><a href="DODGE.php">DODGE CHALLNGER</a></li>
                  <li><a href="charger.php">DODGE CHARGER</a></li>
                  <li><a href="hornet.php">DODGE HORNET</a></li>
                  <li><a href="durango.php">DODGE DURANGO</a></li>
                  <li><a href="ramtruck.php">DODGE RAM TRX TRUCK</a></li>
                  <li><a href="cargallery.php">GALLERY</a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>CONTACT US</h4>
                <ul class="links">
                  <li>E-mail :-<a href="#"> shreypatel8032@gmail.com</a></li>
                  <li>ADDRESS :-<a href="https://maps.app.goo.gl/shuhi9AisiGs8sVi7">B-26 Raj Laxmi Society,<br> near Madhuvan Society, Laxminarayan Society-1,<br> Dabholi, Surat, Gujarat 395004</a></li>
                  <li>LinkDin :-<a href="https://www.linkedin.com/in/shrey-gadhiya-992005270?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BWB1W2zTxS76oWYuqG%2Fivag%3D%3D">SHREY GADHIYA</a></li>
                  <li>CONTACT :-<a href="+91 7874061232">(+91) 78740 61232</a></li>
                  <li>INSTAGRAM :-<a href="https://www.instagram.com/pvtt_shrey_95?igsh=YWhnYTEzaTF0ZGI3">pvtt_shrey_95</a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>OWNER MESSAGE </h4>
                <p>
                  ENJOY WEBSITE PROPERLY DETAILS AND GAIN DODGE COMPANY CAR'S DETAILS .
                </p>
                <form action="cargallery.php">
                  <button type="submit">THANKS FOR VISIT</button>
                </form>
                <div class="icons">
                  <i class="fa-brands fa-facebook-f"></i>
                  <i class="fa-brands fa-twitter"></i>
                  <i class="fa-brands fa-linkedin"></i>
                  <i class="fa-brands fa-github"></i>
                </div>
              </div>
            </div>
          </section>

</body>
</html>
