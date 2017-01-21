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
        <h1>Greetings mga Hampaslupa</h1>
        <p>Carousel + important images here</p>
      </div>
      <div id="section2" class="container-fluid">
        <h1>Importance</h1>
        <p>Importance of e-Census</p>
      </div>
      <div id="section3" class="container-fluid">
        <h1>more about census</h1>
        <p>more</p>
      </div>
      <div id="section41" class="container-fluid">
        <h1>ApplicationForm</h1>
        <p>Application form</p>
        <a href="census.php"><button class = "btn primary">Application Form</button></a>
      </div>
      <div id="section42" class="container-fluid">
        <h1>Footah</h1>
        <p>About</p>
      </div>
    </body>
  <script type="text/javascript" src="bootstrap/js/bootstrap-notify.min.js"></script>
  <script>
  $(document).ready(function(){
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
