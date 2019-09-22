<?php include 'header1.php';?>

<title>Lakshya Fest 2018 | Contact Us</title>
<blockquote class="container border-color-deep-pink">
   <h1>Ahmedabad</h1>
</blockquote>
<div class="container" style="margin-top: 100px;">
   <div class="row">
      <div class="col-lg-6">
         <div id="map" style="height: 400px; width: 100%;"></div>
         <script>
            function initMap() {
                var uluru = {
                    lat: 23.0338,
                    lng: 72.5466
                };
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 15,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
                var infoWindow = new google.maps.InfoWindow({
                    content: '<h1>Lalbhai Dalpatbhai College of Engineering</h1>'
                });
                marker.addListener('click', function(){
                    infoWindow.open(map, marker);
                });
            }
         </script>
         <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhUccixic5hED0IgdHw-T8qUDyt_sZLP4&callback=initMap"></script>
      </div>
      <div class="col-lg-6">
         <h3>Contact us</h3>
         <div>
            <i class="fa fa-map-marker fa-2x"></i>
            <span class="footer-company-about">119, 2nd Floor,ACPC Building, L D College of Engineering Campus, Ahmedabad, Gujarat 380015</span>
         </div>
         <div>
            <i class="fa fa-phone fa-2x"></i>
            <span class="footer-company-about">+91-9974822055</span>
         </div>
         <div>
            <i class="fa fa-envelope fa-2x"></i>
            <span class="footer-company-about">lakshyaldce2018@gmail.com</span>
         </div>
      </div>
   </div>
</div>
<?php include 'footer.php';?>