<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  
  <title>HYGEAS_HOTEL</title>
  <?php
    session_start();
    if(isset($_GET['logout'])){
      if($_GET['logout'] == 2){
        session_unset();
        session_destroy();
      }
      if($_GET['logout'] == 3){
        unset($_SESSION['logout']);
      }
  }
  ?>
  <link rel="icon" type="image/x-icon" href="/home/favicon.ico">
  <link rel="stylesheet" href="style.css"><script src="https://kit.fontawesome.com/c1134aa968.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  <?php
        if(isset($_SESSION['login'])){
          if($_SESSION['login'] == "success"){
            $_SESSION['login'] = "finish";
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>"';
            echo "<script>";
            echo "Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Login Success',
                showConfirmButton: false,
                timer: 1500
              })";
            echo "</script>";
            
          }
      }
      if(isset($_SESSION['logout'])){
        if($_SESSION['logout'] == 1){
          include ('alert.php');
          alertout();
        }
      }

?>
</head>
<body>


  <nav class="nav">
    <div class="container">
        <div class="logo">
            <a href="#">HYGEAS</a>
        </div>
        <div id="mainListDiv" class="main_list">
            <ul class="navlinks">
              <li><a href="../">Home</a></li>
              <li><a href="room/room.php">Rooms</a>
              <li><a href="ballroom/ballroom.php">Ballroom</a>
              <li><a href="seminar/seminar.php">Seminar</a>
              <li><a href="book/book.php">Booking</a></li>
              <?php 
                
                  if(isset($_SESSION['user_login']) && !empty($_SESSION['user_login'])){
                       echo "<li>";
                       echo '<a href="logout.php">';
                       echo $_SESSION['user_login'];
                       echo "</a>";
                       echo "</li>";
                  }
                  else{
                       echo "<li><a href='loginuser/Login.php'>Login</a></li>";
                  
                  }
              ?>
            </ul>
        </div>
    </div>
</nav>
<!-- partial:index.partial.html -->
<main class="content js-content">
  
  <section class="block section-landing">
    <figure class="item-parallax-media">
      <img src="home/picu.jpg"/>
    </figure>
    <div class="item-parallax-content flex-container">
      <div class="landing-content centered-content">
        <h1 class="head-largee">WELCOME TO</h1>
        <h1 class="head-large">HYGEAS HOTEL</h1>
      </div>
    </div>
  </section>
  
  <section class="block section-intro">
    <div class="item-parallax-content flex-container">
      <div class="centered-content">
        <h2 class="head-small2 head-centered">A LITTLE ABOUT US</h2>
        <p class="copy copy-white">
          The Hyeas Hotel comes from a passion for hydrangea flowers. Hydrangeas have a good meaning and are also cold flowers. which matches the environment of the hotel located in the hill area. The concept of Hyeas Hote is nature and peace.
        </p>
        <div style="height: 18px"></div>        <div class="line"></div>
        <div style="height: 18px"></div>
        <h3 class="head-small3">Amenities</h3>
        <div class="row">
         <li class="coloumn"><i class="fa-solid fa-utensils"></i>&nbsp;On Site Restaurant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-water-ladder"></i>&nbsp;Outdoor Swimming Pool</li> 
         <li class="coloumn"><i class="fa-solid fa-globe"></i>&nbsp;Broadband Internet Access&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-shirt"></i>&nbsp;Guest Laundry</li>
         <li class="coloumn"><i class="fa-solid fa-wifi"></i>&nbsp;WiFi Internet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-ban-smoking"></i>&nbsp;Non-Smoking Rooms</li>
        </div>

      
    </div>
  </section>
  
  <!-- sec3 -->
  <section class="block section-part">
      <main class="main-content">
        <section class="slideshow">
          <div class="slideshow-inner">
            <div class="slides">
              <div class="slide is-active ">
                <div class="slide-content">
                  <div class="caption">
                    <div class="title">The Rooms</div>
                          <div class="text">
                            <p>The Very Best of 5 Star Space and Service.</p>
                          </div> 
                          <a href="book/book.php" class="btn">
                            <span class="btn-inner">BOOK NOW</span>
                          </a>
                  </div>
                </div>
                <div class="image-container"> 
                  <img src="home/foodswim.jpg" alt="" class="image" />
                </div>
              </div>
              <div class="slide">
                <div class="slide-content">
                  <div class="caption">
                    <div class="title">The Rooms</div>
                          <div class="text">
                            <p>The Very Best of 5 Star Space and Service.</p>
                          </div> 
                          <a href="book/book.php" class="btn">
                            <span class="btn-inner">BOOK NOW</span>
                          </a>
                  </div>
                </div>
                <div class="image-container">
                  <img src="home/kit.jpg" alt="" class="image" />
                </div>
              </div>
              <div class="slide">
                <div class="slide-content">
                  <div class="caption">
                    <div class="title">The Rooms</div>
                          <div class="text">
                            <p>The Very Best of 5 Star Space and Service.</p>
                          </div> 
                          <a href="book/book.php" class="btn">
                            <span class="btn-inner">BOOK NOW</span>
                          </a>
                  </div>
                </div>
                <div class="image-container">
                  <img src="home/bedroom.jpg" alt="" class="image" />
                </div>
              </div>
              <div class="slide">
                <div class="slide-content">
                  <div class="caption">
                    <div class="title">The Rooms</div>
                          <div class="text">
                            <p>The Very Best of 5 Star Space and Service.</p>
                          </div> 
                          <a href="book/book.php" class="btn">
                            <span class="btn-inner">BOOK NOW</span>
                          </a>
                  </div>
                </div>
                <div class="image-container"> 
                  <img src="home/toilet.jpg" alt="" class="image" />
                </div>
              </div>
            </div>
            <div class="pagination">
              <div class="item is-active"> 
                <span class="icon">1</span>
              </div>
              <div class="item">
                <span class="icon">2</span>
              </div>
              <div class="item">
                <span class="icon">3</span>
              </div>
              <div class="item">
                <span class="icon">4</span>
              </div>
            </div>
            <div class="arrows">
              <div class="arrow prev">
                <span class="svg svg-arrow-left">
                  <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z"/> </svg>
                  <span class="alt sr-only"></span>
                </span>
              </div>
              <div class="arrow next">
                <span class="svg svg-arrow-right">
                  <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z"/> </svg>
                  <span class="alt sr-only"></span>
                </span>
              </div>
            </div>
          </div> 
        </section>
      </main>
  </section>
  
  <!-- sec4 -->
  <section class="block">
    <div class="item-parallax-content flex-container img-grid">
      <figure class="img-gridItem type-right">
        <img src="home/wat.png" alt="" />
        <figcaption class="img-caption">
          <h2 class="head-small">WatPha SornKaew</h2>
          <p class="copy copy-white">
            This Dhamma practice center is located amidst the nature with peaceful atmosphere surrounded by high mountains.
          </p>
        </figcaption>
      </figure>
      <figure class="img-gridItem type-left">
        <img src="home/hyden.jpg" alt="" />
        <figcaption class="img-caption">
          <h2 class="head-small">Hydrangea Garden</h2>
          <p class="copy copy-white">
            Beautiful hydrangea garden with good weather and lovely villagers with bright smiles.
          </p>
        </figcaption>
      </figure>
    </div>
  </section>
  
  <section class="block section-end">
    <figure class="item-parallax-media">
      <img src="home/piccc.jpg" alt="" />
    </figure>
    <div class="item-parallax-content flex-container">
      <div class="landing-content centered-content">
      </div>
      <iframe class="map" src="https://www.google.com/maps/d/embed?mid=1Jv829Ud98eNswHxZ9T5mvGYk1jkUgYY&ehbc=2E312F"></iframe>

    </div>
  </section>
  
  <section class="custom-properties-ftw">
    <h3 class="head-small head-centered">HYGEAS HOTEL</h3>
</section>
</main>
<!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script><script  src="./script.js"></script>
    <script  src="./script.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'></script>
    <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</body>
</html>
