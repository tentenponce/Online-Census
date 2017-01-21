<?php //FRONT END
  //page kung san sila mag fifill up ng census
  $thisPage = "ApplicationForm";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/census.css">
  </head>
  <body>
    <?php include_once('nav.php');?>
    <div class='container' style="margin-top:75px;">
      <div class='row'>
        <div class='col-md-4 border-right'>
          <p><b>CPH FORM 2</b></p>
          <br />
          <p>
            <small>
              <b>AUTHORITY:</b><br />
                Commonwealth Act No. 591, Batas Pambansa Blg. 72, and Executive Order No. 121 authorize the National Statistics Office (NSO) to conduct and collect information for this census.
            </small>
          </p>
          <p>
            <small>
              <b>CONFIDENTIALITY:</b>
              <br />
              Section 4 of Commonwealth Act No. 591 provides that all information furnished in this questionnaire shall be kept STRICTLY CONFIDENTIAL.
            </small>
          </p>
        </div>

        <div class='col-md-4 text-center'>
          <p>
            <br />
            <i>Republic of the Philippines</i>
            <br />
            <b>NATIONAL STATISTICS OFFICE</b>
            <br />
            <br />
            <br />
            <b>CENSUS OF POPULATION AND HOUSING</b>
            <br />
          </p>
          <h4><b>COMMON HOUSEHOLD QUESTIONNAIRE</b></h4>
        </div>

        <div class='col-md-4'></div>
      </div>

      <hr />

      <div class='row'>
        <div class='col-md-4 text-center border-right'>
          <p><b>CERTIFICATION</b></p>
          <hr />
          <p class='text-left'>
            <small><i>I hereby certify that the data set forth herin were personally obtained/reviewed by me and in accordance with the instructions given by the NSO.</i></small>
          </p>
          <div>
            <div class="form-group">
              <input type="text" class="form-control">
              <label><small>ENUMERATOR</small></label>
            </div>
          </div>
        </div>

        <div class='col-md-4 text-center'>
          <p class='text-center'><b>GEOGRAPHIC IDENTIFICATION</b></p>
          <hr />
          <div>
            <div class="form-group">
              <input type="text" class="form-control">
              <label><small>PROVINCE</small></label>
            </div>

            <div class="form-group">
              <input type="text" class="form-control">
              <label><small>MUNICIPALITY</small></label>
            </div>
          </div>
        </div>
      </div>

    </div>
  </body>
  <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap-notify.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</html>
