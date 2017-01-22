<?php //FRONT END
  //home page to, image and detail info about sa barangay ata
  $thisPage = "Home" ;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Online-Census</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/census.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

  </head>
  <body>
    <?php include_once('nav.php');?>
      <div id="section1" class="container-fluid">
        <br/>
        <br/>
        <br/>
          <h1 class="header">E-Census</h1>
          <p class="meaning">Carousel + important images here</p>
      </div>
      <div id="section2" class="container-fluid">
        <div class="message2">
          <h1>Importance</h1>
          <span>Importance of e-Census</span>
        </div>
      </div>
      <div id="section3" class="container-fluid">
        <div class="message3">
          <h1>more about census</h1>
          <p>more</p>
        </div>
      </div>
      <div id="section41" class="container-fluid">
        <div class="message4">
          <h1>ApplicationForm</h1>
          <p>Application form</p>
          <a href="census.php"><button class = "btn primary">Application Form</button></a>
        </div>
      </div>
      <div id="section42" class="container-fluid">
        <div class="message4">
          <h1>Footah</h1>
          <p>About</p>
        <div>
      </div>
    </body>
  <script type="text/javascript" src="bootstrap/js/bootstrap-notify.min.js"></script>
  <script>
  $(window).on('scroll', function() {
    var y_scroll_pos = window.pageYOffset; // set to whatever you want it to be


      if(y_scroll_pos > 600) {

          $(".message2").animate({left: '250px'});
          $(".message2").fadeIn();
      }
      if(y_scroll_pos > 1200) {
          $(".message3").animate({marginLeft : "100px"},"slow","swing");
      }
      if(y_scroll_pos > 1800) {
          $(".message4").fadeIn("slow");
      }

  });
  $(document).ready(function(){
    $(".header").animate({marginLeft : "25px"},"slow","swing");
    // Add scrollspy to <body>
    $('body').scrollspy({target: ".navbar", offset: 50});
    // Add smooth scrolling on all links inside the navbar
    $("#myNavbar a").on('click', function(event) {
      // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        }  // End if
      });
    });
  </script>
</html>
