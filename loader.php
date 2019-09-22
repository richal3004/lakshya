<?php
  $handle = fopen("counter.txt", "r");
  if(!$handle)
    echo "could not open the file";
  else {
    $counter = (int ) fread($handle,20);
    fclose ($handle);
    $counter++;
    $handle = fopen("counter.txt", "w" );
    fwrite($handle,$counter);
    fclose ($handle);
  }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <link rel="stylesheet" type="text/css" href="CSS/animate.css">
      <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="CSS/zapdos.css">
      <link rel="stylesheet" type="text/css" href="CSS/aboutus.css">
      <link rel="stylesheet" type="text/css" href="CSS/settings.css">
      <link rel="stylesheet" type="text/css" href="CSS/layers.css">
      <link rel="stylesheet" type="text/css" href="CSS/navigation.css">
      <link rel="stylesheet" type="text/css" href="CSS/footer.css">
      <link rel="stylesheet" type="text/css" href="CSS/style.css">
      <link rel="stylesheet" type="text/css" href="CSS/responsive.css">
      <link rel="stylesheet" type="text/css" href="CSS/tech.css">
      <link rel="stylesheet" type="text/css" href="CSS/navbar-2.0.css">
      <link rel="stylesheet" type="text/css" href="CSS/loader.css">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <script type="text/javascript" src="animation/wow.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
      <link rel="icon" href="img/flame1.png">

      <style>
        .dropdown-menu {
          background-color:#EEEEEE;
          color:white;
          left: 50%;
          right: auto;
          text-align: center;
          transform: translate(-50%, 0);
        }
      </style>
      <script type="text/javascript">
         $(window).on('scroll',function(){
             if($(window).scrollTop()){
                 $('nav').addClass('black');
             }
             else
             {
                 $('nav').removeClass('black');
             }
         })
         $(document).ready(function(){
             $(".menu h4").click(function(){
                 $("nav ul").toggleClass("active")
             })
         })
      </script>
      <!-- Back to top button -->
       <script>
            
           $(function(){
            
               $(document).on( 'scroll', function(){
            
                   if ($(window).scrollTop() > 100) {
                       $('.scroll-top-wrapper').addClass('show');
                   } else {
                       $('.scroll-top-wrapper').removeClass('show');
                   }
               });
           });
           </script>
      <script>
         $(function(){
          
             $(document).on( 'scroll', function(){
          
                 if ($(window).scrollTop() > 100) {
                     $('.scroll-top-wrapper').addClass('show');
                 } else {
                     $('.scroll-top-wrapper').removeClass('show');
                 }
             });
          
             $('.scroll-top-wrapper').on('click', scrollToTop);
         });
          
         function scrollToTop() {
             verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
             element = $('body');
             offset = element.offset();
             offsetTop = offset.top;
             $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
         }
      </script>
      <!-- End -->
   </head>
   <body>
      <!-- Back to top button -->
      <div class="scroll-top-wrapper" style="background-color:#F4AA27;">
         <span class="scroll-top-inner">
         <i class="fa fa-2x fa-arrow-circle-up" ></i>
         </span>
      </div>
      <!-- End -->
      <div class="responsive-bar">
         <div class="logo">
            <!-- Add link to home page -->
            <a href="home.php"><img src="..\img\flame.png"></a>
         </div>
         <div class="menu">
            <h4><i class="fa fa-bars fa-lg" aria-hidden="true"></i></h4>
         </div>
      </div>
      <nav>
         <div class="logo">
            <!-- Add link to home page -->
            <a href="home.php"><img src="..\img\flame.png"></a>
         </div>
         <ul>
            <div class="small_hide menutext">
               <!-- Add link to tech.html page -->
               <div class="dropdown">
                  <li><a href="tech.php">TECH-RITORY</a></li>
                  <div class="dropdown-content">
                     <!-- Add link to individual department pages -->
                     <a href="com_it.php">CODESTERS</a>
                     <a href="mech_auto.php">MECH-AUTO</a>
                     <a href="ec_ic.php">ELECTROQUEST</a>
                     <a href="chemical.php">CHEMOLUTION</a>
                     <a href="civil.php">CIVILLUSION</a>
                     <a href="robotics.php">ROBO-SAPIENS</a>
                  </div>
               </div>
               <!-- Add link to zapdos page -->
               <div class="dropdown">
                  <li><a href="zapdos.php">ZAPDOS</a></li>
                  <div class="dropdown-content">
                     <!-- Add link to individual pages -->
                     <a href="mindspark.php">MIND SPARK</a>
                     <a href="carnival.php">CARNIVAL-O-FUN</a>
                  </div>
               </div>
               <!-- Add link to workshop.html page -->
               <div class="dropdown">
                  <li><a href="workshop.php">ILLUMINATE</a></li>
               </div>
               <div class="dropdown">
                  <li><a href="talks.php">TALKS</a></li>
               </div>
               <div class="dropdown">
                  <li><a href="Online schedule.pdf">Schedule</a></li>
               </div>
               <div class="dropdown">
                  <li class="menu_hover"><a onclick="openNav()" style><i class="fa fa-arrow-circle-down fa-lg" aria-hidden="true"></i></a></li>
               </div>
            </div>
            <div class="hide menu_text">
               <li><a onclick="openNavTech()">TECH-RITORY  <i class="fa fa-arrow-circle-down fa-1g" aria-hidden="true"></i></a></li>
               <li><a onclick="openNavZap()">ZAPDOS  <i class="fa fa-arrow-circle-down fa-1g" aria-hidden="true"></i></a></li>
               <li><a href="workshop.php">ILLUMINATE</a></li>
               <li><a href="talks.php">TALKS</a></li>
               <li><a onclick="openNav()">MORE  <i class="fa fa-arrow-circle-down fa-1g" aria-hidden="true"></i></a></li>
            </div>
         </ul>
      </nav>
      <div id="myNav" class="overlay">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         <div class="overlay-content">
            <!-- Add link to individual  pages -->
            <a href="about.php">ABOUT US</a>
            <a href="team.php">TEAM LAKSHYA</a>
            <a href="contact.php">CONTACT US</a>
         </div>
      </div>
      <!-- Tech events mobile view -->
      <div id="tech" class="overlay">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNavTech()">&times;</a>
         <div class="overlay-content">
            <!-- Add link to individual department pages -->
            <a href="com_it.php">CODESTERS</a>
            <a href="mech_auto.php">MECH-AUTO</a>
            <a href="ec_ic.php">ELECTROQUEST</a>
            <a href="chemical.php">CHEMOLUTION</a>
            <a href="civil.php">CIVILLUSION</a>
            <a href="robotics.php">ROBO-SAPIENS</a>
         </div>
      </div>
      <!-- End -->
      <!-- Zapdos events mobile view -->
      <div id="zap" class="overlay">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNavZap()">&times;</a>
         <div class="overlay-content">
            <!-- Add link to individual  pages -->
            <a href="mindspark.php">MIND SPARK</a>
            <a href="carnival.php">CARNIVAL-O-FUN</a>
         </div>
      </div>
      <!-- End -->
      <script>
         function openNav() {
             document.getElementById("myNav").style.height = "100%";
         }
         
         function closeNav() {
             document.getElementById("myNav").style.height = "0%";
         }
      </script>
      <!-- Tech Events mobile view Script -->
      <script>
         function openNavTech() {
             document.getElementById("tech").style.height = "100%";
         }
         
         function closeNavTech() {
             document.getElementById("tech").style.height = "0%";
         }
      </script>
      <!-- End -->
      <!-- Tech Events mobile view Script -->
      <script>
         function openNavZap() {
             document.getElementById("zap").style.height = "100%";
         }
         
         function closeNavZap() {
             document.getElementById("zap").style.height = "0%";
         }
      </script>
      <!-- End -->
      <script>new WOW().init();</script>
