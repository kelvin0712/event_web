      	<!-- Footer -->
   <footer class="page-footer bg-dark">
        <div class="container text-center text-md-left">
            <div class = "row">

                <div class = "col-sm-12 col-md-4 mx-auto text-center">
                    <h4 class="mt-3 mb-4 txt2">Contact Us</h4>

                    <ul class="footer-list txt1">
						<li class="footer-list-1">
							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
							University of Queensland <br>
							Brisbane, Queensland, Australia
						</li>

						<li class="footer-list-1" >
							<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							(04) 4735 9073
						</li>

						<li class="footer-list-1">
							<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
							duchung97dl@gmail.com
						</li>
					</ul>
                </div>

                <div class = "col-sm-12 col-md-4 mx-auto">
                     <h4 class="mt-3 mb-4 txt2 text-center">Event Hub</h4>

                    <ul class="footer-list text-center txt1">
						<li class="footer-list-1"><a href="#" class="nav-link base-nav trans-0-1">
							ABOUT EVENT
						</a></li >

						<li class="footer-list-1"><a href="#" class="nav-link base-nav trans-0-1">
							LOGIN
						</a></li>

						<li class="footer-list-1"><a href="#" class="nav-link base-nav trans-0-1">
							REGISTRATION
						</a></li >

					</ul>
                </div>

                 <!-- Social buttons -->
               <div class = "col-sm-12 col-md-4 mx-auto text-center">
					<!-- - -->
					<h4 class="mt-3 mb-4 txt2">Social Media!</h4>

					<div class="txt1">
                        <li class="footer-list-1"><a href='#'class="fa fa-facebook-f pr-1 txt1"> Facebook</a></li>
                        <li class="footer-list-1"><a href='#' class="fa fa-instagram pr-1 txt1"> Instagram</a></li>

                    </div>


				</div>
                <!-- Social buttons -->
                <div class="footer-copyright text-center py-3 footer-list-1 txt1">Copyright &copy; 2019 All rights reserved
                </div>

            </div>
        </div>

    </footer>

    <script>

 var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('You are here.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>


     <script src="<?= base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
     <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKaM2rADsPmZOD6HMxCqmzJYkOPOAbhWY&callback=initMap"></script>
     <script src="<?= base_url('assets/js/regis_validation.js')?>"></script>

   </body>

 </html>