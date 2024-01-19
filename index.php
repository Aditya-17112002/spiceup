<?php

$insert = false;
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "table";

    $con = mysqli_connect($server, $username, $password, $db);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $people = $_POST['people'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `info` (`name`, `email`, `phone`, `date`, `time`, `no_of_people`, `message`) VALUES ('$name', '$email', '$phone', '$date', '$time', '$people', '$message');";

    if($con->query($sql) == true){
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    if($insert == true){
      echo "<div class='message'>Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>";
      }

    $con->close();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Spice Up Restaurant</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 11:00 AM - 23:00 PM</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="index.html">Spice Up</a></h1>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#book-a-table" class="book-a-table-btn scrollto">Book a table</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Spice Up</span> Restaurant</h2>
                <p class="animate__animated animate__fadeInUp">Step into a world where culinary alchemy meets a riot of flavors – welcome to Spice Up, a gastronomic haven that promises to ignite your taste buds and elevate your dining experience. Spice Up, where every meal is a thrilling adventure for your senses!</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Savor the moment, indulge in flavor – welcome to a culinary adventure like no other !</h2>
                <p class="animate__animated animate__fadeInUp">Welcome to our newly opened restaurant, where each moment is a savory adventure and every flavor invites indulgence. Our chefs craft a menu that transcends the ordinary, promising a culinary journey like no other. Join us for an extraordinary dining experience, where passion and flavor unite in a celebration of the extraordinary.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">A symphony of flavors awaits your palate.</h2>
                <p class="animate__animated animate__fadeInUp">Embark on a tantalizing journey as a symphony of flavors awaits your palate at our grand opening. Step into our gastronomic haven, where every dish is a harmonious blend of exquisite tastes. Welcome to a grand celebration of flavors that will leave a lasting melody on your taste buds.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/about.jpg");'>
            <a href="https://youtu.be/vmoCLeIJbw4?si=0xOHKjSCoosp23i2" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
            
              <h3> Discover the Spice Up Experience <strong> : Where Flavor Takes Center Stage</strong></h3>
              <p>
                Welcome to Spice Up, where culinary excellence meets a vibrant celebration of flavors! At Spice Up, we pride ourselves on creating an unforgettable dining experience that transcends the ordinary.
              </p>
              <p class="fst-italic">
                Our menu is a carefully curated symphony of global influences and local inspirations, designed to tantalize your taste buds and leave a lasting impression. 
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> We source the finest, freshest ingredients to guarantee the quality and authenticity of each dish.</li>
                <li><i class="bx bx-check-double"></i> We prioritize exceptional service, ensuring that every guest feels valued and leaves with a memorable dining experience.</li>
                <li><i class="bx bx-check-double"></i> Our menu is a carefully crafted fusion of global influences and local inspirations, offering a diverse range of dishes that showcase the richness of spices.</li>
              </ul>
              <p>
                Join us for an extraordinary culinary journey, where spice isn't just a seasoning – it's an adventure. Spice Up – where every bite tells a story, and every meal is a celebration!
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Why choose <span>Our Restaurant</span></h2>
          <p>Choose Spice Up for a culinary journey beyond the ordinary. Our global fusion, crafted by passionate chefs, promises an adventure of flavors. Immerse yourself in a warm ambiance, where fresh ingredients meet artful presentation. </p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>Diverse Global Fusion</h4>
              <p>Spice Up stands out for its unique blend of global culinary influences, offering a diverse menu that caters to a variety of tastes.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>Passionate Culinary Excellence</h4>
              <p>Our chefs are culinary artisans, dedicated to creating exceptional dishes that showcase creativity and skill. </p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4>Immersive Dining Experience</h4>
              <p>Beyond the exceptional food, Spice Up provides an immersive dining experience. </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Whu Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Check our tasty <span>Menu</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Show All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-biryani">Biryani</li>
              <li data-filter=".filter-indian">Indian</li>
              <li data-filter=".filter-breads">Indian Breads</li>
              <li data-filter=".filter-desert">Deserts</li>
              <li data-filter=".filter-beverage">Beverages</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container">
          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">BABY CORN TEMPURA</a><span>550</span>
            </div>
            <div class="menu-ingredients">
              Crispy battered fried babycorn fritters served with Schezwan and mince sauce
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">WATER CHESTNUT AND MUSHROOMS</a><span>650</span>
            </div>
            <div class="menu-ingredients">
              tossed with chilli garlic and butter
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-indian">
            <div class="menu-content">
              <a href="#">TANDOORI ALOO KE GUTKE</a><span>400</span>
            </div>
            <div class="menu-ingredients">
              Potatoes stuffed with cottage cheese, nuts and spices baked in the clay oven
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-indian">
            <div class="menu-content">
              <a href="#">ACHARI PANEER TIKKA</a><span>550</span>
            </div>
            <div class="menu-ingredients">
              Cottage cheese delicately marinated with hot and tangy pickled spices and char grilled
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-indian">
            <div class="menu-content">
              <a href="#">PANEER MALAI SEEKH KEBAB</a><span>550</span>
            </div>
            <div class="menu-ingredients">
              A delicate combination of fresh cottage cheese marinated with Indian herbs & spices, char grilled
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-indian">
            <div class="menu-content">
              <a href="#">TANDOORI VEG PLATTER</a><span>1050</span>
            </div>
            <div class="menu-ingredients">
              Assorted vegetable appetizers
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-indian">
            <div class="menu-content">
              <a href="#">ACHARI PANEER TIKKA</a><span>550</span>
            </div>
            <div class="menu-ingredients">
              Cottage cheese delicately marinated with hot and tangy pickled spices and char grilled
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-indian">
            <div class="menu-content">
              <a href="#">SEEKH KEBAB GILAFI </a><span>900</span>
            </div>
            <div class="menu-ingredients">
              Triple minced lamb, roasted whole spices, coloured peppers, mint chutney
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-indian">
            <div class="menu-content">
              <a href="#">TANDOORI MURGH - HALF / FULL</a><span>600/1050</span>
            </div>
            <div class="menu-ingredients">
              Chicken marinated with hung yoghurt, tandoori masala and cooked in the tandoor
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-indian">
            <div class="menu-content">
              <a href="#">PUNJABI CHICKEN TIKKA</a><span>650</span>
            </div>
            <div class="menu-ingredients">
              Fenugreek scented, Chargrilled Chicken, mint chutney
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-indian">
            <div class="menu-content">
              <a href="#">TANDOORI NON - VEG PLATTER</a><span>1400</span>
            </div>
            <div class="menu-ingredients">
              Murgh Tangri kebab, Murgh Malai Tikka, Lamb Seekh Kebab, Achari Fish Tikka
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-indian">
            <div class="menu-content">
              <a href="#">LASOONI TANDOORI LOBSTER</a><span>2250</span>
            </div>
            <div class="menu-ingredients">
              Lobster flavoured with rich spices, finished in clay oven
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-indian">
            <div class="menu-content">
              <a href="#">CHEESE CHILLY MALAI TIKKA </a><span>650</span>
            </div>
            <div class="menu-ingredients">
              Cream cheese marinated chicken, royal cumin, mint chutney
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-indian">
            <div class="menu-content">
              <a href="#">INDIAN PANEER / VEGETABLES WITH GRAVIES OF YOUR CHOICE</a><span>650</span>
            </div>
            <div class="menu-ingredients">
              Khatta Pyaaz / Soufiyani / Makhani / Palak / Kurchan / Shahi / Korma / Kadhai / Jalfrezi / Lababdar / Butter Masala / Home Style 
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-indian">
            <div class="menu-content">
              <a href="#">PANEER PALAK KE KOFTE LAJAWAB</a><span>650</span>
            </div>
            <div class="menu-ingredients">
              Cottage cheese dumplings wrapped in spinach topped with rich cashew gravy
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-indian">
            <div class="menu-content">
              <a href="#">CLASSIC BUTTER CHICKEN</a><span>750</span>
            </div>
            <div class="menu-ingredients">
              Shredded Chicken Tikka, creamy tomato gravy, kasuri methi
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-biryani">
            <div class="menu-content">
              <a href="#">SUBZ 'DUM KI' BIRYANI</a><span>650</span>
            </div>
            <div class="menu-ingredients">
              Lightly spiced local vegetables, saffron, basmati rice, burani raita
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-biryani">
            <div class="menu-content">
              <a href="#">PANEER CHANA BIRYANI</a><span>650</span>
            </div>
            <div class="menu-ingredients">
              Lightly spiced Cottage Cheese and Chickpeas, saffron, basmati rice, burani raita
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-biryani">
            <div class="menu-content">
              <a href="#">DUM BIRYANI (MUTTON / CHICKEN)</a><span>900/1100</span>
            </div>
            <div class="menu-ingredients">
              Mild spices, yoghurt, saffron, basmati rice, burani raita
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-biryani">
            <div class="menu-content">
              <a href="#">MALABAR PRAWN BIRYANI</a><span>1500</span>
            </div>
            <div class="menu-ingredients">
              Aromatic rice flavoured with coconut infused prawns, raita
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-breads">
            <div class="menu-content">
              <a href="#">ROTI - PLAIN / BUTTER</a><span>90/100</span>
            </div>
            <div class="menu-ingredients">
              Whole Wheat bread made in clay oven
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-breads">
            <div class="menu-content">
              <a href="#">LACCHA PARATHA</a><span>140</span>
            </div>
            <div class="menu-ingredients">
              Layered tandoori paratha made of leavened dough topped with sesame seeds
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-breads">
            <div class="menu-content">
              <a href="#">PARATHA</a><span>140</span>
            </div>
            <div class="menu-ingredients">
              Plain / Pudina / Methi / Ajwain Whole wheat bread baked on clay oven on griddle
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-breads">
            <div class="menu-content">
              <a href="#">NAAN</a><span>140</span>
            </div>
            <div class="menu-ingredients">
              Traditional Punjabi Leavened Bread
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-breads">
            <div class="menu-content">
              <a href="#">KULCHA</a><span>140</span>
            </div>
            <div class="menu-ingredients">
              Clay oven cooked flat bread served plain
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-breads">
            <div class="menu-content">
              <a href="#">STUFFED KULCHA</a><span>350</span>
            </div>
            <div class="menu-ingredients">
              Aloo / Paneer / Onion
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-breads">
            <div class="menu-content">
              <a href="#">ROOMALI ROTI</a><span>120</span>
            </div>
            <div class="menu-ingredients">
              Exotic thin Indian flatbread made to perfection
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-breads">
            <div class="menu-content">
              <a href="#">KHASTA ROTI</a><span>120</span>
            </div>
            <div class="menu-ingredients">
              Crisp Whole Wheat bread made in clay oven
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-desert">
            <div class="menu-content">
              <a href="#">GULAB JAMUN</a><span>325</span>
            </div>
            <div class="menu-ingredients">
              Warm dumplings, green cardamom sugar syrup
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-desert">
            <div class="menu-content">
              <a href="#">KHUBANI KA MEETHA</a><span>375</span>
            </div>
            <div class="menu-ingredients">
              Badami apricot compote with whole milk cream
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-desert">
            <div class="menu-content">
              <a href="#">WARM FIG AND DATE TOFFEE PUDDING</a><span>425</span>
            </div>
            <div class="menu-ingredients">
              Sticky date and fig pudding served warm with butterscotch sauce
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-desert">
            <div class="menu-content">
              <a href="#">DARK CHOCOLATE SUGAR FREE MOUSSE</a><span>425</span>
            </div>
            <div class="menu-ingredients">
              Heavy Cream mesmerized by Single origin chocolate with chunks of milk chocolate
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-desert">
            <div class="menu-content">
              <a href="#">NEW YORK STYLE LEMON CHEESE CAKE </a><span>475</span>
            </div>
            <div class="menu-ingredients">
              Served with Blueberry Comport
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-desert">
            <div class="menu-content">
              <a href="#">FRESH FRUITS</a><span>525</span>
            </div>
            <div class="menu-ingredients">
              Selection of fresh seasonal fruits, natural yoghurt, honey
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-desert">
            <div class="menu-content">
              <a href="#">ANGOORI RASMALAI</a><span>325</span>
            </div>
            <div class="menu-ingredients">
              
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-desert">
            <div class="menu-content">
              <a href="#">FALOODA</a><span>375</span>
            </div>
            <div class="menu-ingredients">
              Milk, ice-cream, rose syrup, vermicelli, nuts
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-desert">
            <div class="menu-content">
              <a href="#">CHOCOLATE WALNUT BROWNIE WITH VANILLA ICE CREAM</a><span>475</span>
            </div>
            <div class="menu-ingredients">
              
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-beverage">
            <div class="menu-content">
              <a href="#">COLD COFFEE</a><span>300</span>
            </div>
            <div class="menu-ingredients">
              
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-beverage">
            <div class="menu-content">
              <a href="#">LASSI (Sweet/ Salted)</a><span>240</span>
            </div>
            <div class="menu-ingredients">
              
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-beverage">
            <div class="menu-content">
              <a href="#">CHAAS (Masala/ Plain)</a><span>240</span>
            </div>
            <div class="menu-ingredients">
              
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-beverage">
            <div class="menu-content">
              <a href="#">ICE TEA (Peach/ Lemon)</a><span>250</span>
            </div>
            <div class="menu-ingredients">
              
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-beverage">
            <div class="menu-content">
              <a href="#">CHOCOLATE WALNUT BROWNIE WITH VANILLA ICE CREAM</a><span>475</span>
            </div>
            <div class="menu-ingredients">
              
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-beverage">
            <div class="menu-content">
              <a href="#">CANNED JUICE</a><span>250</span>
            </div>
            <div class="menu-ingredients">
              
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-beverage">
            <div class="menu-content">
              <a href="#">TONIC WATER</a><span>210</span>
            </div>
            <div class="menu-ingredients">
              
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-beverage">
            <div class="menu-content">
              <a href="#">FRESH LIME (Soda/ Water)</a><span>200</span>
            </div>
            <div class="menu-ingredients">
              
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-beverage">
            <div class="menu-content">
              <a href="#">JUICE BAR</a><span>300</span>
            </div>
            <div class="menu-ingredients">
              Choose from the following to make your own juice Watermelon / Grape / Sweet lime / Pineapple / Tomato / Mixed fruit / Orange / Mango ( seasonal )
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-beverage">
            <div class="menu-content">
              <a href="#">FRESH LIME (Soda/ Water)</a><span>200</span>
            </div>
            <div class="menu-ingredients">
              
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-indian">
            <div class="menu-content">
              <a href="#">MURGH LABABDAR</a><span>750</span>
            </div>
            <div class="menu-ingredients">
              Rich, simmered chicken dish
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">POPIAH SPRING ROLLS (VEGETABLE / CHICKEN)</a><span>650/750</span>
            </div>
            <div class="menu-ingredients">
              Stir fried Vegetables / Chicken, wrapped in chinese filo, light soy sauce, house mince sauce
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">SATAY (PANEER / CHICKEN)</a><span>650/750</span>
            </div>
            <div class="menu-ingredients">
              Spicy grilled batons of cottage Cheese / Chicken on skewers, served with peanut sauce 
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">KUNG PAO CHICKEN</a><span>750</span>
            </div>
            <div class="menu-ingredients">
              Crispy fried Chicken tossed with Hoisin sauce, rice wine, ginger, red chilli and cashewnuts 
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">BANANA LEAF WRAPPED THAI GRILLED FISH</a><span>1100</span>
            </div>
            <div class="menu-ingredients">
              Fillet of fish marinated with Thai chilli spices wrapped in banana leaf and grilled
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">CRISPY GARLIC PRAWNS</a><span>1400</span>
            </div>
            <div class="menu-ingredients">
              Crispy Prawns tossed with golden garlic and chillies
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">SUPERFOOD SALAD</a><span>550</span>
            </div>
            <div class="menu-ingredients">
              Red & White Quinoa, Arugula, Aurgul, toasted Sunflower seeds, Beetroot, Lemon, Olive Vinaigrette 
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">PRAWN AZTEC</a><span>1050</span>
            </div>
            <div class="menu-ingredients">
              Chilled marinated prawns with caper olive dressing with crispy greens
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">CLASSIC CAESAR SALAD</a><span>550/750</span>
            </div>
            <div class="menu-ingredients">
              With choice of Parmesan / Grilled Chicken
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">HEALTHY SMOKED SALMON TARTARE</a><span>900</span>
            </div>
            <div class="menu-ingredients">
              Scottish smoked salmon tartare with pommery mustard apple salad, raspberry vinaigrette
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">CLASSIC VEG CLUB SANDWICH</a><span>650</span>
            </div>
            <div class="menu-ingredients">
              Char Grilled vegetables, tandoor baked chilli potatoes and cheese
            </div>
          </div>


          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Greek Salad</a><span>550</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach, crisp romaine, tomatoes, and Greek olives
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">CLASSIC CHICAGO PIZZA</a><span>950</span>
            </div>
            <div class="menu-ingredients">
              Chicken Pepperoni, Mushrooms, Olives and Thyme. 
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">YAKHANI</a><span>450</span>
            </div>
            <div class="menu-ingredients">
              An Authentic Kashmiri hearty lamb broth
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container">

        <div class="section-title">
          <h2>Check our <span>Specials</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Royal Makhani Delight</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Exquisite Dal Fusion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Imperial Tandoori Symphony</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Sovereign Bisi Bele Elegance</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Regal Jalfrezi Royale</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Royal Makhani Delight</h3>
                    <p class="fst-italic">This dish is a celebration of rich and flavorful elements, carefully prepared to offer a memorable dining experience.</p>
                    <p>The base of this dish is a velvety and creamy tomato-based curry, meticulously infused with aromatic spices and premium ingredients. Succulent pieces of tender chicken, marinated to perfection, are immersed in this luxurious sauce, allowing the flavors to meld together harmoniously.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="https://www.tasteofhome.com/wp-content/uploads/2020/03/Slow-Cooker-Butter-Chicken_EXPS_FT20_192992_F_0204_1-4.jpg?fit=700,700" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Exquisite Dal Fusion</h3>
                    <p class="fst-italic">"Exquisite Dal Fusion" is a 5-star rendition of the classic dal makhani, showcasing a refined and luxurious approach to this traditional Indian dish. </p>
                    <p>The lentils are simmered in a creamy and flavorful tomato-based curry enriched with aromatic spices, ghee (clarified butter), and possibly a hint of cream for that extra touch of opulence.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="https://www.tasteofhome.com/wp-content/uploads/2021/01/dal-makhani-indian-food-670907171.jpg?fit=700,700" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Imperial Tandoori Symphony</h3>
                    <p class="fst-italic">"Imperial Tandoori Symphony" is a culinary masterpiece designed to elevate the traditional tandoori chicken to a level of sophistication and excellence befitting a 5-star dining experience.</p>
                    <p>The name "Imperial Tandoori Symphony" reflects the grandeur and regality of the dish. Each element is orchestrated with precision to create a harmonious and delightful culinary experience. The word "Imperial" suggests a level of royalty and luxury, indicating that this tandoori chicken is a dish fit for the most discerning and refined palates.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="https://www.tasteofhome.com/wp-content/uploads/2019/08/Sheet-Pan-Tandoori-Chicken_EXPS_FT19_228530_F_0725_1-12.jpg?fit=700,700" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Sovereign Bisi Bele Elegance</h3>
                    <p class="fst-italic">"Sovereign Bisi Bele Elegance" represents a refined and luxurious interpretation of the traditional South Indian dish, Bisi Bele Bath. </p>
                    <p>The dish itself, Bisi Bele Bath, is a flavorful one-pot rice dish made with rice, lentils, vegetables, and a unique blend of spices. In the context of "Sovereign Bisi Bele Elegance," one can expect an elevated version where the ingredients are carefully sourced and the preparation involves culinary expertise.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="https://www.tasteofhome.com/wp-content/uploads/2021/01/delicious-south-indian-food-bisi-bele-bath-1273289152.jpg?fit=700,700" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Regal Jalfrezi Royale</h3>
                    <p class="fst-italic">"Regal Jalfrezi Royale" represents a luxurious and refined version of the classic Chicken Jalfrezi.</p>
                    <p>"Jalfrezi Royale" suggests a dish that goes beyond the ordinary, incorporating a regal touch into the spice-infused flavors and the overall culinary experience. The name signifies that every element of this Chicken Jalfrezi is crafted with precision, making it a standout choice in a 5-star dining setting.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="https://www.tasteofhome.com/wp-content/uploads/2023/02/GettyImages-1195561785-e1676404786195.jpg?fit=700,700" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container">

        <div class="section-title">
          <h2>Organize Your <span>Events</span> in our Restaurant</h2>
        </div>

        <div class="events-slider swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Birthday Parties</h3>
                  <div class="price">
                    <p><span> &#x20B9; 10500 onwards</span></p>
                  </div>
                  <p class="fst-italic">
                    "Indulge in Unforgettable Celebrations: Your Birthday Bash at Spice Up - Where Every Moment is Spiced with Joy and Culinary Delights! 🎉🍽️ #SpiceUpCelebrations"
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Offer special birthday packages with discounts on group bookings.</li>
                    <li><i class="bi bi-check-circle"></i> Tailor the restaurant's ambiance with birthday-themed decorations to create a festive atmosphere.</li>
                    <li><i class="bi bi-check-circle"></i> Consider live music, a DJ, or other entertainment options to enhance the celebratory mood.</li>
                  </ul>
                  <p>
                    Create a birthday party experience at Spice Up that not only highlights the restaurant's culinary excellence but also ensures a joyful and memorable celebration for the birthday person and their guests.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Private Parties</h3>
                  <div class="price">
                    <p><span>&#x20B9; 11500 onwards</span></p>
                  </div>
                  <p class="fst-italic">
                    Organizing a private party at your restaurant, "Spice Up," can create a personalized and intimate experience for your guests.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Work closely with the host to create a tailored menu based on their preferences and dietary restrictions.</li>
                    <li><i class="bi bi-check-circle"></i> Assign a dedicated team of service staff to cater exclusively to the private party.</li>
                    <li><i class="bi bi-check-circle"></i> Allow flexibility in the timing and duration of the private party to accommodate the host's schedule.</li>
                  </ul>
                  <p>
                    By offering a private party experience with these features, Spice Up can position itself as an ideal venue for hosting exclusive and intimate events, providing a unique and memorable experience for the guests and the host.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Custom Parties</h3>
                  <div class="price">
                    <p><span>&#x20B9; 15000 onwards</span></p>
                  </div>
                  <p class="fst-italic">
                    Organizing a custom party at your restaurant, "Spice Up," offers a unique and tailored experience for your guests. 
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Create a photo booth area with custom props for guests to enjoy and take home memories.</li>
                    <li><i class="bi bi-check-circle"></i> Collaborate with the pastry chef to design a custom cake or dessert that complements the party theme.</li>
                    <li><i class="bi bi-check-circle"></i> Work with a decorator to create personalized decorations that reflect the host's style or the purpose of the event.</li>
                  </ul>
                  <p>
                    By offering a fully customizable party experience, Spice Up can become a sought-after venue for hosting unique and memorable events that cater to the individual tastes and preferences of your guests.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Book a <span>Table</span></h2>
          <p>Savor the moment – reserve your table at Spice Up and indulge in a culinary journey like no other!</p>
        </div>
        <form action="index.php" method="post">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="date" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="time" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="No. of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          </div>
          <div class="text-center"><button type="submit" class="sub-button">Send Message</button></div>
        </form>
      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Some photos from <span>Our Restaurant</span></h2>
          <p>Embark on a Culinary Journey: Spice Up Restaurant's Gallery - Where Flavor Meets Artistry, and Every Dish Tells a Story.</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2>Our Proffesional <span>Chefs</span></h2>
          <p>"Meet the Maestros Behind the Magic: Our Culinary Virtuosos Infuse Passion and Expertise into Every Dish. Elevate Your Dining Experience with the Artistry of Our Chefs at Spice Up! 🌶️👨‍🍳✨ #SpiceUpCulinaryCraftsmanship"</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Vikram Sunderam</h4>
                <span>Master Chef</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ritu Dalmia</h4>
                <span>Patissier</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Saransh Goila</h4>
                <span>Cook</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Rajat Singhania</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Spice Up is an absolute gem! The ambiance is warm and inviting, the staff is incredibly attentive, and the food is simply outstanding. Every dish is a burst of flavors, and the presentation is top-notch. My personal favorite is the [signature dish], and I can't recommend it enough. It's definitely my go-to place for a delightful dining experience."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Lily Chen</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Had a fantastic experience at Spice Up! The private party we organized was flawlessly executed. The staff went above and beyond to ensure every detail was perfect. The customized menu was a hit, and the private dining space added a touch of exclusivity. Our guests couldn't stop raving about the delicious food and impeccable service. Spice Up exceeded our expectations!"
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Olivia Bennett</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Spice Up is a culinary delight! The fusion of flavors in each dish is exceptional. I recently hosted a private event here, and the level of service was outstanding. From the personalized menu to the seamless execution of the party, everything was beyond my expectations. It's evident that the team at Spice Up takes pride in delivering a memorable experience for their guests."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Rajat Singhania</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Absolutely loved my dining experience at Spice Up! The atmosphere is elegant, and the staff is incredibly attentive. The menu offers a wide range of choices, and each dish is a work of art. The presentation is Instagram-worthy! The attention to detail and the use of high-quality ingredients set Spice Up apart. Can't wait to come back and try more dishes!"
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Ravi Verma</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Spice Up is a culinary masterpiece! The menu is a fusion of creativity and tradition, offering a delightful array of flavors. The staff's knowledge of the dishes and their recommendations were spot-on. The ambiance is sophisticated yet inviting, making it a perfect spot for both intimate dinners and celebratory gatherings. A definite must-visit for food enthusiasts!"
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <p>Welcome to Spice Up – your gateway to a culinary journey of exquisite flavors! We value your feedback, inquiries, and suggestions.</p>
        </div>
      </div>

      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241315.9407781945!2d72.71637595391323!3d19.083004497987353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1c06fffffff%3A0xc0290485a4d73f57!2sThe%20Taj%20Mahal%20Palace%2C%20Mumbai!5e0!3m2!1sen!2sin!4v1705386879557!5m2!1sen!2sin" allowfullscreen></iframe>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Apollo Bandar<br>Colaba, Mumbai, Maharashtra 400001</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-clock"></i>
              <h4>Open Hours:</h4>
              <p>Monday-Saturday:<br>11:00 AM - 23:00 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com<br>contact@example.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Spice Up</h3>
      <p>Tantalize your taste buds with our delectable delights. Welcome to a world of culinary bliss!</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Spice Up</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">Aditya</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>