<?php include 'header1.php';?>

<title>Lakshya Fest 2018 | Home</title>
<!-- Main Image -->
<div class="w3-content w3-section">
  <a href="#"><img class="mySlides" src="./img/main.jpg" style="width:100%"></a>
  <a href="workshop.php"><img class="mySlides" src="./img/wk.jpg" style="width:100%"></a>
  <a href="robotics.php"><img class="mySlides" src="./img/robo.jpg" style="width:100%"></a>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<!-- End -->
<style>
.warning {
	text-align:center;
    background-color: #ffffcc;
    border-left: 6px solid #F4AC26;
}
</style>
<div class="container new_div">
	<div class="warning">
  <strong>NOTICE: THE SCHEDULE IS OUT!!</strong><br>
  <a href="Online schedule.pdf">CLICK HERE TO VIEW</a>
	</div>
   <blockquote class="border-color-deep-pink">
      <h1 class="wow zoomIn" data-wow-duration="1s">LAKSHYA FEST 2018</h1>
      <p>With vivid fests’ jubilations  hovering around every college, Lakshya is unique in its kind as it encourages knowledge with fun. It is an unprecedented fest which focuses on enhancing technical skill and acquaints the students with every skill needed to them in their future. This fest is perfect amalgamation of Technical and Non – Technical events and will surely spread ubiquitous in the ambience.<br>Lakshya’18 is a 3 day fest , going to be celebrated on 15th-16th-17th Feb 2018, where jubilations will be a blend of knowledge, awareness and fun. The first day will be highlight of our 3 day event  “ India 2030 : Khwaab towards a new Era “ Eminent speakers from varied backgrounds will guide us through the journey of their vivid prospective about the most buzzing topic of all times Education. “ India 2030 : Khwaab towards a new Era” , in which eminent personalities from different disciplines will be invited on a common dais to discuss the most salient issues in the current Education Scenario.The next two days of the fest will have diverse Technical & Non – Technical  events catalysed with lots of Fun.</p>
   </blockquote>
   <div class="row">
      <div class="col-lg-4  new_div" style="text-align:center;">
         <img class="img-thumbnail"  src="./img/talk.png">
      </div>
      <div class="col-lg-8 new_div" style="text-align:center;">
         <h1 class="wow zoomIn" data-wow-duration="2s">TALKS</h1>
         <p>Every once in a while a new technology, an old problem, and a big idea turn into an innovation. We value the great ideas and hope to spread them even further. This year indulge in the beginning of a new era with ‘Vision 2030’.</p>
         <a href="talks.php" class="custom_btn">TALKS <i class="fa fa-arrow-circle-right fa-lg" aria-hidden="true"></i></a>
      </div>
   </div>
   <div class="row">
   <div class="row">
      <div class="col-lg-4  new_div" style="text-align:center;">
         <img class="img-thumbnail"  src="./img/techritoryMainPageDisp.jpg">
      </div>
      <div class="col-lg-8 new_div" style="text-align:center;">
         <h1 class="wow zoomIn" data-wow-duration="2s">TECH-RITORY</h1>
         <p>Any sufficiently advanced technology is indistinguishable from magic. With ample technical knowledge and sharp technical skills triumph and rejoice your involvement in the scrutinizing technical events of Lakshya 2k18.</p>
         <a href="tech.php" class="custom_btn">TECH-RITORY <i class="fa fa-arrow-circle-right fa-lg" aria-hidden="true"></i></a>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-4  new_div" style="text-align:center;">
         <img class="img-thumbnail" src="./img/zapdosMainPageDisp.jpg">
      </div>
      <div class="col-lg-8 new_div"  style="text-align:center;">
         <h1 class="wow zoomIn" data-wow-duration="2s">ZAPDOS</h1>
         <p>A person is so much more than the name of a degree on a chart. Find your inner selves in these “out of the books” events, may it be spelling the complicated, more or less be it cricket or may it be presenting your TV series wisdom or ghostly gaming skills. Lakshya 2018 gives you a platform to dodge in with your cleverness.</p>
         <a href="zapdos.php" class="custom_btn">ZAPDOS <i class="fa fa-arrow-circle-right fa-lg" aria-hidden="true"></i></a>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-4  new_div"  style="text-align:center;">
         <img class="img-thumbnail" src="./img/workshopMainPageDisp.jpg">
      </div>
      <div class="col-lg-8 new_div"  style="text-align:center;">
         <h1 class="wow zoomIn" data-wow-duration="2s">ILLUMINATE</h1>
         <p>The important thing in science is not so much to obtain new facts as to discover new ways of thinking about them. Unless you try to do something beyond what you have already mastered, you will never grow. This year embrace yourselves as we bring in front of you the gargantuan of knowledge through the “Illuminate Workshop Series”.</p>
         <a href="workshop.php" class="custom_btn">ILLUMINATE <i class="fa fa-arrow-circle-right fa-lg" aria-hidden="true"></i></a>
      </div>
   </div>
</div>

<!--slider start -->
<br>
<br>
<div class="container" id="sponsors">
   <hr>
   <br>
   <h1 style="text-align:center;">SPONSORS</h1>
   <br>
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
         <li data-target="#myCarousel" data-slide-to="1"></li>
         <li data-target="#myCarousel" data-slide-to="2"></li>
         <li data-target="#myCarousel" data-slide-to="3"></li>
         <li data-target="#myCarousel" data-slide-to="4"></li>
         <li data-target="#myCarousel" data-slide-to="5"></li>
         <li data-target="#myCarousel" data-slide-to="6"></li>
         <li data-target="#myCarousel" data-slide-to="7"></li>
         <li data-target="#myCarousel" data-slide-to="8"></li>
         <li data-target="#myCarousel" data-slide-to="9"></li>
         </li>
      </ol>                                                                                       
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
         <div class="item active">
            <img src="img\title.png"  style="width:100%;">
            <div class="flex-caption">
        <h3 style="text-align: center; color: black;">TITLE SPONSOR</h3>
     </div>
         </div>
         <div class="item">
            <img src="img\powered by.png" style="width:100%; align-self: center;">
            <div class="flex-caption">
        <h3 style="text-align: center; color: black;">POWERED BY</h3>
     </div>
         </div>
         <div class="item ">
            <img src="img\inassociationwith.png" style="width:100%;">
            <div class="flex-caption">
            <h3 style="text-align: center; color: black;">IN ASSOCIATION WITH</h3>
     </div>
         </div>
         <div class="item">
            <img src="img\gaming.png" style="width:100%;">
            <div class="flex-caption">
            <h3 style="text-align: center; color: black;">GAMING PARTNER</h3>
     </div>
         </div>
         <div class="item">
            <img src="img\refreshptr.jpg" style="width:100%;">
            <div class="flex-caption">
            <h3 style="text-align: center; color: black;">REFRESHMENT PARTNER</h3>
     </div>
         </div>
         <div class="item">
            <img src="img\animationptr.png" style="width:100%;">
            <div class="flex-caption">
            <h3 style="text-align: center; color: black;">ANIMATION PARTNER</h3>
     </div>
         </div>
         <div class="item">
            <img src="img\funptr.jpg" style="width:100%;">
            <div class="flex-caption">
            <h3 style="text-align: center; color: black;">FUNPARTNER</h3>
     </div>
         </div>
         <div class="item">
            <img src="img\workshopptr.png" style="width:100%;">
            <div class="flex-caption">
            <h3 style="text-align: center; color: black;">WORKSHOP PARTNERS</h3>
     </div>
         </div>
         <div class="item">
            <img src="img\stall2.png" style="width:100%;">
            <div class="flex-caption">
            <h3 style="text-align: center; color: black;">STALL PARTNERS</h3>
     </div>
         </div>
         <div class="item">
            <img src="img\stall1.png" style="width:100%;">
            <div class="flex-caption">
            <h3 style="text-align: center; color: black;">STALL PARTNERS</h3>
     </div>
         </div>
         
      </div>
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span ><i class="fa fa-arrow-left" aria-hidden="true"></i></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
      <span class="sr-only">Next</span>
      </a>
   </div>
   </div>
   </div>
   <!-- slider end -->


<div class="container new_div" style="text-align: center;">
   <div class="row">
      <div class="col-lg-3 new_div">
         <h4><i class="fa fa-users fa-lg" style="color: #FBAD00;" aria-hidden="true"></i> 9,000+</h4>
         <p>PARTICIPATION</p>
      </div>
      <div class="col-lg-3 new_div">
         <h4><i class="fa fa-check-square-o fa-lg" style="color: #FBAD00;" aria-hidden="true"></i><?php $handle = fopen("counter.txt", "r");if(!$handle){echo "could not open the file";} else {$counter = (int ) fread($handle,20); fclose ($handle); echo" <strong>". $counter . " </strong> ";}?></h4>
         <p>WEBSITE VISITS</p>
      </div>
      <div class="col-lg-3 new_div">
         <h4><i class="fa fa-facebook fa-lg" style="color: #FBAD00;" aria-hidden="true"></i> 4,300+</h4>
         <p>FACEBOOK LIKES</p>
      </div>
      <div class="col-lg-3 new_div">
         <h4><i class="fa fa-money fa-lg" style="color: #FBAD00;" aria-hidden="true"></i> 2M+</h4>
         <p>PRIZES WORTH DISTRIBUTED</p>
      </div>
   </div>
</div>
<?php include 'footer.php';?>