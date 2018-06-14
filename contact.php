<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   include 'head.php';
   ?>
       <title>contact PAGE</title>
	   
	   <style>
	    .home{
	text-align:center;
	font-family: 'Megrim', cursive;
	font-size:50px;
	font-weight:bold;
	color:black;
	padding-bottom:15px;
}

 #map {
        height: 400px;
        width: 100%;
       }
	   
	   .cont{
	font-family: 'Sarala', sans-serif;
	color:black;
	font-style:bold;
	font-size:22px;
}

   .contt{
	font-family: 'Sarala', sans-serif;
	color:black;
	font-style:bold;
	font-size:17px;
	
}

	   
	   
	   </style>
   
   
</head>


<body>

 <?php 
  include 'navbar.php';
?>                   




<section class="container topp">

    <!--Section heading-->
    <div class=" home">GET IN TOUCH</div>
    <!--Section description-->
    <p class="text-center mb-5 contt">
      Anyone who needs help can contact us and our employees are available 24*7 to address their queries . We will help you contact your respective branch leaders who will
       guide you.	  </p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-8 col-xl-9">
            <form>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
					<form action="mail.php" method="POST">
                        <div class="md-form">
                            <input type="text" name ="name" id="contact-name" class="form-control">
                            <label for="contact-name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" name="email" id="contact-email" class="form-control">
                            <label for="contact-email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <input type="text" name="subject" id="contact-Subject" class="form-control">
                            <label for="contact-Subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" name="message" id="contact-message" class="form-control md-textarea " rows="3"></textarea>
                            <label for="contact-message" >Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
            
			 <button class="btn btnn btn-primary btn-md "  input type="submit" value="Send"> Send</button>
            </div>
        </div>
		</form>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 col-xl-3 text-center">
            <ul class="list-unstyled">
                <li>
                    <i class="fa fa-map-marker fa-2x blue-text"></i>
                    <p class="cont">NIT Jamshedpur, Jamshedpur</p>
					<p class="cont">Jharkhand,831014</p>
                </li>

                <li>
                    <i class="fa fa-phone fa-2x mt-4 blue-text"></i>
                    <p class="cont">7277181420</p>
                </li>

                <li>
                    <i class="fa fa-envelope fa-2x mt-4 blue-text"></i>
                    <p class="cont"> squad@nitjsr.ac.in</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
            
        
	   <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 22.7766, lng: 86.1437};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-Sm9w3XNKstdw-uqw1zbIMcEjDHC3j9g&callback=initMap">
    </script>
	   














<?php
      include 'footer.php';
   ?>

   
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>