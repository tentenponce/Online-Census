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
            <p class="header-message wow fadeInRight">

              A census is the procedure of systematically acquiring and recording information about the members of a given population. It is a regularly occurring and official count of a particular population. The term is used mostly in connection with national population and housing censuses; other common censuses include agriculture, business, and traffic censuses. in Electronic Manner

            </p>
          </div>
          <div class="col-md-6 col-xs-12 col-md-12">
            <img src="images/logo.png" style="padding:150px;" class="center-block img-responsive wow flipInY img-circle">
          </div>
        </div>
      </div>
      <div id="section2" class="container-fluid">
        <div class="message2">
          <h1 class="header wow bounceInUp  text-center"  data-wow-offset="10">Announcements</h1>
          <br/>
          <br/>
          <br/>

          <h2 class="wow slideInRight text-center">
            <p class="glyphicon glyphicon-tag header text-center"></p>
            <br/>
            No Announcements as of today.
          </h2>
          <span></span>
        </div>
      </div>
      <div id="section41" class="container-fluid">
          <div class="container">
            <h1 class="header wow bounceInLeft">Application Form</h1>
          </div>
          <div class="container">
            <p class="col-md-4 col-xs-12 col-sm-12"></p>
          </div><br/>
          <div class="container">
            <div style="float:right;bottom:10;">
              <a href="census1.php"><button class = "btn-lg btn btn-default wow tada">Application Form</button></a>
            </div>
          </div>
      </div>
      <div id="section42" class="container-fluid">
        <div class="container" style="margin-top:0px;">
          <div class="row">

            <div class="col-md-12">
              <h1 style="text-align:center;" class="wow pulse">Contact Us!</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12 ">
              <h3 class="col-sm-12 col-xs-12 center-block">Follow us on</h3>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <a href="www.twitter.com/Online-Census"><img src="images/twitter.png"  height= "100" width="100" class="center-block wow flipInY img-circle"></a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <a href="www.facebook.com/Online-Census"><img src="images/instagram.png" style="border-radius:100%;" height= "100" width="100" class="center-block wow flipInX"></a>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <a href="www.facebook.com/Online-Census"><img src="images/facebook.png" height= "100" width="100" class="center-block wow flipInX img-circle"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-12 wow flipInX">
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
              <br/><span style="font-size:16px;">&nbsp; 0935-867-1004</span>
              <h3>Email us at : </h3>
               <br/><span style="font-size:16px;">&nbsp; onlinecensus@onlinecensus.com</span>
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
    <script type="text/javascript" src="js/index.js"></script>
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
