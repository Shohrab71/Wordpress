<!--////////////////////////////////////Footer-->
<footer>
	<div class="top-footer">
		<div id="map" style="height: 250px;"></div>
	</div>
	<div class="zerogrid wrap-footer">
		<div class="row">
			<div class="col-1-3 col-footer-1">
				<div class="wrap-col">
					<h3 class="widget-title">About Us</h3>
					<p>Ut volutpat consectetur aliquam. Curabitur auctor in nis ulum ornare. Sed consequat, augue condimentum fermentum gravida, metus elit vehicula dui. Curabitur auctor in nis ulum ornare. Sed consequat, augue condimentum fermentum</p>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium</p>
				</div>
			</div>
			<div class="col-1-3 col-footer-2">
				<div class="wrap-col">
					<h3 class="widget-title">Recent Post</h3>
					<ul>
						<li><a href="#">MOST VISITED COUNTRIES</a></li>
						<li><a href="#">5 PLACES THAT MAKE A GREAT HOLIDAY</a></li>
						<li><a href="#">PEBBLE TIME STEEL IS ON TRACK TO SHIP IN JULY</a></li>
						<li><a href="#">STARTUP COMPANY???S CO-FOUNDER TALKS ON HIS NEW PRODUCT</a></li>
					</ul>
				</div>
			</div>
			<div class="col-1-3 col-footer-3">
				<div class="wrap-col">
					<h3 class="widget-title">Subcribe</h3>
					<p>Never missed any post published in our site. Subscribe to our daly newsletter now.</p>
					<p>Email address:</p>
					<form action="#" method="post">
						<input type="text" name="your-name" value="" size="40" placeholder="Your Email" />
						<input type="submit" value="SUBSCRIBE" class="button button-subcribe" />
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="zerogrid wrapper">
			Copyright @ zHairSalon - Designed by <a href="https://www.zerotheme.com">ZEROTHEME</a>
			<ul class="quick-link">
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Terms of Use</a></li>
			</ul>
		</div>
	</div>
</footer>

	<!-- Light Box -->
	<script src="<?php echo get_template_directory_uri();?>/js/lightbox-plus-jquery.min.js"></script>
	
	<!-- Google Map -->
	<script>
	  var marker;
	  var image = '<?php echo get_template_directory_uri();?>/images/map-marker.png';
      function initMap() {
        var myLatLng = {lat: 39.79, lng: -86.14};

		// Specify features and elements to define styles.
        var styleArray = [
          {
            featureType: "all",
            stylers: [
             { saturation: -80 }
            ]
          },{
            featureType: "road.arterial",
            elementType: "geometry",
            stylers: [
              { hue: "#000000" },
              { saturation: 50 }
            ]
          },{
            featureType: "poi.business",
            elementType: "labels",
            stylers: [
              { visibility: "off" }
            ]
          }
        ];
		
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          scrollwheel: false,
		   // Apply the map style array to the map.
          styles: styleArray,
          zoom: 7
        });

        var directionsDisplay = new google.maps.DirectionsRenderer({
          map: map
        });

		// Create a marker and set its position.
        marker = new google.maps.Marker({
          map: map,
		  icon: image,
		  draggable: true,
          animation: google.maps.Animation.DROP,
          position: myLatLng
        });
		marker.addListener('click', toggleBounce);
      }
	  
	  function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async defer></script>
	
	<!-- carousel -->
	<script src="<?php echo get_template_directory_uri();?>/owl-carousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-testimonials").owlCarousel({
        autoPlay: 3000,
        items : 1,
		itemsDesktop : [1199,1],
        itemsDesktopSmall : [979,2],
		navigation: false,
      });
	  $("#owl-slide").owlCarousel({
			autoPlay: 3000,
			items : 2,
			itemsDesktop : [1199,2],
			itemsDesktopSmall : [979,1],
			itemsTablet : [768, 1],
			itemsMobile : [479, 1],
			navigation: true,
			navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
			pagination: false
		  });
    });
    </script>
	
</div>
</body></html>