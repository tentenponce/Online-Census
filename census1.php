<?php //FRONT END
  session_start();
  //page kung san sila mag fifill up ng census
  $thisPage = "ApplicationForm";

  // if (isset($_SESSION['census_1'])) {
  //   header ("Location: census2.php");
  // }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="images/logo.png" type="image/png" sizes="16x22">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/census.css">
  </head>
  <body>
    <?php include_once('nav.php');?>
    <form method='post' action='ajax/addCensus1.php' class='container' style="margin-top:75px;">
      <button name='census1Btn' type='submit' class="btn btn-primary" style="outline-style:none;width:60px;font-size:24px;height:60px;border-radius:100%;bottom:0; right:0;margin:50px; margin-right:50px; margin-top:20px; position:fixed; z-index: 998"><span class="glyphicon glyphicon-menu-right"></span></button>

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

        <div class='col-md-8 text-center'>
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

      </div>

      <hr />

      <div class='row'>
        <div class='col-md-4 text-center'>
          <p><b>CERTIFICATION</b></p>
          <hr />
          <p class='text-left'>
            <small><i>I hereby certify that the data set forth herin were personally obtained/reviewed by me and in accordance with the instructions given by the NSO.</i></small>
          </p>
          <br />
          <div>
            <div class="form-group">
              <input name='enumerator' type="text" class="form-control" required>
              <label><small>ENUMERATOR</small></label>
            </div>

            <div class="form-group">
              <input name='enum_date_accomplished' type="date" class="form-control" required>
              <label><small>DATE ACCOMPLISHED</small></label>
            </div>

            <div class="form-group">
              <input name='team_supervisor' type="text" class="form-control" required>
              <label><small>TEAM SUPERVISOR</small></label>
            </div>

            <div class="form-group">
              <input type="date" class="form-control" name='team_date_reviewed' required>
              <label><small>DATE REVIEWED</small></label>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name='cas_acas' required>
              <label><small>CAS/ACAS</small></label>
            </div>

            <div class="form-group">
              <input type="date" class="form-control" name='cas_date_reviewed' required>
              <label><small>DATE REVIEWED</small></label>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name='co_ro_po_supervisor' required>
              <label><small>CO/RO/PO SUPERVISOR</small></label>
            </div>

            <div class="form-group">
              <input type="date" class="form-control" name='co_ro_po_date_reviewed' required>
              <label><small>DATE REVIEWED</small></label>
            </div>
          </div>
        </div>

        <div class='col-md-8 text-center border-left'>
          <p class='text-center'><b>GEOGRAPHIC IDENTIFICATION</b></p>
          <hr />
          <div>
            <div class="form-group">
              <select id='province_select' class='form-control' name='province' onchange='provinceChange()' required>
                <option value='Bulacan'>Bulacan</option>
                <option value='Metro Manila'>Metro Manila</option>
              </select>
              <label><small>PROVINCE</small></label>
            </div>

            <div class="form-group">
              <select id='city_select' class="form-control" name='city' required>
                <option value='Angat'>Angat</option>
                <option value='Balagtas'>Balagtas</option>
                <option value='Baliuag'>Baliuag</option>
                <option value='Bocaue'>Bocaue</option>
                <option value='Bulakan'>Bulakan</option>
                <option value='Bustos'>Bustos</option>
                <option value='Calumpit'>Calumpit</option>
                <option value='Dona Remedios Trinidad'>Dona Remedios Trinidad</option>
                <option value='Guiguinto'>Guiguinto</option>
                <option value='Hagonoy'>Hagonoy</option>
                <option value='Malolos'>Malolos</option>
                <option value='Marilao'>Marilao</option>
                <option value='Meycauayan'>Meycauayan</option>
                <option value='Norzagaray'>Norzagaray</option>
                <option value='Obando'>Obando</option>
                <option value='Pandi'>Pandi</option>
                <option value='Paombong'>Paombong</option>
                <option value='Plaridel'>Plaridel</option>
                <option value='Pulilan'>Pulilan</option>
                <option value='San Ildefonso'>San Ildefonso</option>
                <option value='San Jose del Monte'>San Jose del Monte</option>
                <option value='San Miguel'>San Miguel</option>
                <option value='San Rafael'>San Rafael</option>
                <option value='Santa Maria'>Santa Maria</option>
              </select>
              <label><small>CITY/MUNICIPALITY</small></label>
            </div>

            <div class="form-group">
              <select class='form-control' name='barangay' required>
                <?php
                  for ($i = 0; $i <= 195; $i ++) {
                    echo "<option value='$i'>$i</option>";
                  }
                ?>
              </select>
              <label><small>BARANGAY</small></label>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name='enumeration_area_number' required>
              <label><small>ENUMERATION AREA NUMBER</small></label>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name='building_serial_number' required>
              <label><small>BUILDING SERIAL NUMBER</small></label>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name='housing_unit_serial_number' required>
              <label><small>HOUSING UNIT SERIAL NUMBER</small></label>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name='household_serial_number' required>
              <label><small>HOUSEHOLD SERIAL NUMBER</small></label>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name='line_number_of_respondent' required>
              <label><small>LINE NUMBER OF RESPONDENT</small></label>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name='name_of_household_head' required>
              <label><small>NAME OF HOUSEHOLD HEAD</small></label>
            </div>

            <div class="form-group">
              <textarea type="text" class="form-control" name='address' required></textarea>
              <label><small>ADDRESS</small></label>
            </div>
          </div>
        </div>
      </div>

      <hr />

      <p class='text-center'><b>INTERVIEW RECORD</b></p>

      <hr />

      <div class='row'>

        <div class='col-md-6 row'>
          <p class='text-center'><b>VISIT</b></p>
          <hr />

          <div class='col-md-12 text-center'>

            <div class="form-group">
              <label><small>RESULT OF VISIT</small></label>
              <select class='form-control' name='result_visit' required>
                <option value='1'>Completed</option>
                <option value='2'>Partly completed</option>
                <option value='3'>Refused</option>
                <option value='4'>Postponed</option>
                <option value='5'>House hold is temporarily away/no respondent around</option>
                <option value='6'>Others</option>
              </select>
            </div>

          </div>

          <div class='col-md-12 text-center'>
            <hr />
            <div class="form-group">
              <input type="datetime-local" class="form-control" name='next_visit' required>
              <label><small>NEXT VISIT</small></label>
            </div>
          </div>

        </div>

        <div class='col-md-6 text-center border-left'>
          <p><b>SUMMARY OF VISIT</b></p>

          <hr />

          <div class="form-group">
            <input type="number" class="form-control" name='number_of_visit' required>
            <label><small>NUMBER OF VISITS MADE</small></label>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name='result_of_final_visit' required>
            <label><small>RESULT OF FINAL VISIT</small></label>
          </div>

          <div class="form-group">
            <input type="number" class="form-control" name='number_of_household_members' required>
            <label><small>NUMBER OF HOUSEHOLD MEMBERS</small></label>
          </div>

          <div class="form-group">
            <input type="number" class="form-control" name='number_of_males' required>
            <label><small>NUMBER OF MALES</small></label>
          </div>

          <div class="form-group">
            <input type="number" class="form-control" name='number_of_females' required>
            <label><small>NUMBER OF FEMALES</small></label>
          </div>
        </div>
      </div>

      <hr />

      <div>
        <p class='text-center'><b>HOUSEHOLD DEFINITION</b></p>

        <p class='text-center'>
          A <b>household</b> is a social unit consisting of a person living alone or a group of persons who sleep in the same housing unit and have a common arrangement in the preparation and consumption of food.
        </p>
      </div>

    </form>
  </body>
  <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.form.js"></script>
  <script type="text/javascript" src="js/index.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap-notify.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/census1.js"></script>
</html>
