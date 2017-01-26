<?php //FRONT END
  //home page to, image and detail info about sa barangay ata
  $thisPage = "Home" ;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Online-Census</title>
    <link rel="icon" href="images/logo.png?<?php echo date('Y-m-d H:i:s'); ?>" type="image/png" sizes="16x22">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/census.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

  </head>
  <body>
    <?php include_once('nav.php');?>
      <div id="section1" class="wow container-fluid">
        <br/>
        <br/>
        <br/>
        <div class="row">
          <div class="col-md-6">
            <h1 class="header wow bounceInUp">E-Census</h1>
            <p class="header-message wow fadeInRight">Online Census meaning</p>
          </div>
          <div class="col-md-6">
            <img src="images/logo.png" class="wow flipInY img-circle">
          </div>
        </div>
      </div>
      <div id="section2" class="container-fluid">
        <div class="message2">
          <h1 class="header wow bounceInUp"  data-wow-offset="10">Announcements</h1>
          <span class="wow slideInRight"></span>
        </div>
      </div>
      <div id="section41" class="container-fluid">
          <div class="container">
            <h1 class="header wow bounceInLeft">Application Form</h1>
          </div>
          <div class="container">
            <p>slight screenshot of the application form photoshoped...</p>
          </div>
          <div class="container">
            <div style="float:right;bottom:10;">
              <a href="census1.php"><button class = "btn-lg btn btn-default wow tada">Application Form</button></a>
            </div>
          </div>
      </div>
      <div id="sectionFooter" class="container-fluid">
        <div class="container" style="margin-top:0px;">
          <div class="row">

            <div class="col-md-12">
              <h1 style="text-align:center;" class="wow pulse">Contact Us!</h1>
            </div>
          </div>
          <div class="row wow flipInX">
            <div class="col-md-3">
              <h3>Follow us</h3>
            </div>
            <div class="col-md-6">
              <h3> Found Bugs? </h3>
              <small>Send us a report</small>
              <br/>
              <br/>
              <textarea class='form-control' rows="9" placeholder="Message" style="resize:none;"></textarea>
              <br/>
              <button class="btn btn-success" style="float:right">Submit</button>
            </div>
            <div class="col-md-3">
              <h3>Contact number</h3>
              <h3>Email us at :</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
            </div>
          </div>
        </div>
        <br/>
        <br/>

      </div>
      <div class="footer" class="container-fluid">
        <span>Copyright © 2017. Alrights Reserved.</span>
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
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
</html>
