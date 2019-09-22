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
<html lang="en" class="no-js">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Lakshya Fest 2018</title>
      <link rel="icon" href="img/flame.png">
      <link rel="shortcut icon" href="../favicon.ico">
      <link rel="stylesheet" type="text/css" href="CSS/normalize.css" />
      <link rel="stylesheet" type="text/css" href="CSS/demo.css" />
      <link rel="stylesheet" type="text/css" href="CSS/component.css" />
      <link href='https://fonts.googleapis.com/css?family=Raleway:200,400,800' rel='stylesheet' type='text/css'>
      <link href="stylesheet" type="text/css" href="CSS/animate.css">
      <link rel="stylesheet" media="screen and (max-device-width: 800px)" href="CSS/800.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
      <script type="text/javascript">
         $(window).load(function() {
         // Animate loader off screen
         $(".se-pre-con").fadeOut("slow");
         });
      </script>
   </head>
   <body>
      <div class="container demo-1">
         <div class="content">
            <div id="large-header" class="large-header">
               <canvas id="demo-canvas"></canvas>
               <h1 class="main-title">
                  <a href="home.php">
                  <button class="custom_btn">HOME</button>
               </h1>
               </a>
            </div>
         </div>
         <!-- Related demos -->
      </div>
      <!-- /container -->
      <script src="js/TweenLite.min.js"></script>
      <script src="js/EasePack.min.js"></script>
      <script src="js/rAF.js"></script>
      <script src="js/demo-1.js"></script>
   </body>
</html>