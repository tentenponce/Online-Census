<?php //BACK END
  session_start();
  require "db.php";
  if($_SESSION['account'] == null) {
    header("location:login.php");
  }

  if(isset($_GET['logout'])) {
    session_destroy();
    header("location:admin.php");
    exit();
  }

  $males = $db->sum("summary_of_visit", "number_of_males");
  $females = $db->sum("summary_of_visit", "number_of_females");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Online-Census</title>
    <link rel="icon" href="images/logo.png" type="image/png" sizes="16x22">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/census.css">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="DataTables/datatables.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php include_once("admin_nav.php"); ?>
    <div class="container">
      <table class="table" id="showRecords">
        <thead>
          <tr>
            <th>Action</th>
            <th>Application Number</th>
            <th>Date Submit</th>
            <th>Date Approved</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>

      <hr />

      <h2>Reports</h2>
      <div>
        <p><b>Number of Males: </b><?php echo $males; ?></p>
        <p><b>Number of Females: </b><?php echo $females; ?></p>
      </div>
    </div>
  </body>
  <div class="modal fade" tabindex="-1" role="dialog" id="viewModal">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">View <span id="application_id"></span></h4>
        </div>
        <div class="modal-body">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#firstPage" aria-controls="home" role="tab" data-toggle="tab">First Page</a></li>
            <li role="presentation"><a href="#secondPage" aria-controls="profile" role="tab" data-toggle="tab">Second Page</a></li>
            <li role="presentation"><a href="#thirdPage" aria-controls="messages" role="tab" data-toggle="tab">Third Page</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="firstPage">
              <br />

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
                      <span id='enum'>enumerator</span><br/>
                      <label><small>ENUMERATOR</small></label>
                    </div>

                    <div class="form-group">
                      <span id='enum_date_accomplished'>enum_date_accomplished</span><br/>
                      <label><small>DATE ACCOMPLISHED</small></label>
                    </div>

                    <div class="form-group">
                      <span id='team_supervisor' >team_supervisor</span><br/>
                      <label><small>TEAM SUPERVISOR</small></label>
                    </div>

                    <div class="form-group">
                      <span id='team_date_reviewed' >team_date_reviewed</span><br/>
                      <label><small>DATE REVIEWED</small></label>
                    </div>

                    <div class="form-group">
                      <span id='cas_acas' >cas_acas</span><br/>
                      <label><small>CAS/ACAS</small></label>
                    </div>

                    <div class="form-group">
                      <span  id='cas_date_reviewed'>cas_date_reviewed</span><br/>
                      <label><small>DATE REVIEWED</small></label>
                    </div>

                    <div class="form-group">
                      <span id='co_ro_po_supervisor'>co_ro_po_supervisor</span><br/>
                      <label><small>CO/RO/PO SUPERVISOR</small></label>
                    </div>

                    <div class="form-group">
                      <span id='co_ro_po_date_reviewed'>co_ro_po_date_reviewed</span><br/>
                      <label><small>DATE REVIEWED</small></label>
                    </div>
                  </div>
                </div>

                <div class='col-md-8 text-center border-left'>
                  <p class='text-center'><b>GEOGRAPHIC IDENTIFICATION</b></p>
                  <hr />
                  <div>
                    <div class="form-group">
                      <span id='province'>province</span><br/>
                      <label><small>PROVINCE</small></label>
                    </div>

                    <div class="form-group">
                      <span id='city'>city</span><br/>
                      <label><small>CITY/MUNICIPALITY</small></label>
                    </div>

                    <div class="form-group">
                      <span id='barangay'>barangay</span><br/>
                      <label><small>BARANGAY</small></label>
                    </div>

                    <div class="form-group">
                      <span id='enumeration_area_number'>enumeration_area_number</span><br/>
                      <label><small>ENUMERATION AREA NUMBER</small></label>
                    </div>

                    <div class="form-group">
                      <span id='building_serial_number'>building_serial_number</span><br/>
                      <label><small>BUILDING SERIAL NUMBER</small></label>
                    </div>

                    <div class="form-group">
                      <span id='housing_unit_serial_number' >housing_unit_serial_number</span><br/>
                      <label><small>HOUSING UNIT SERIAL NUMBER</small></label>
                    </div>

                    <div class="form-group">
                      <span  id='household_serial_number' >household_serial_number</span><br/>
                      <label><small>HOUSEHOLD SERIAL NUMBER</small></label>
                    </div>

                    <div class="form-group">
                      <span  id='line_number_of_respondent' >line_number_of_respondent</span><br/>
                      <label><small>LINE NUMBER OF RESPONDENT</small></label>
                    </div>

                    <div class="form-group">
                      <span id='name_of_household_head'>name_of_household_head</span><br/>
                      <label><small>NAME OF HOUSEHOLD HEAD</small></label>
                    </div>

                    <div class="form-group">
                      <p id='address'>Address</p>
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
                  <div class='col-md-12 text-center'>
                    <p><b>VISIT</b></p>

                    <hr />

                    <div class="form-group">
                      <label><small>RESULT OF VISIT</small></label><br/>
                      <span id='result_visit'></span><br/>
                    </div>

                  </div>

                  <div class='col-md-12 text-center'>
                    <hr />
                    <div class="form-group">
                      <span id='next_visit'></span><br/>
                      <label><small>NEXT VISIT</small></label>
                    </div>
                  </div>
                </div>

                <div class='col-md-6 text-center border-left'>
                  <p><b>SUMMARY OF VISIT</b></p>

                  <hr />

                  <div class="form-group">
                    <span id='next_enumerator_codevisit'></span><br/>
                    <label><small>ENUMERATOR'S CODE</small></label>
                  </div>

                  <div class="form-group">
                    <span id='number_of_visit'></span><br/>
                    <label><small>NUMBER OF VISITS MADE</small></label>
                  </div>

                  <div class="form-group">
                    <span id='result_of_final_visit'></span><br/>
                    <label><small>RESULT OF FINAL VISIT</small></label>
                  </div>

                  <div class="form-group">
                    <span id='number_of_household_members'></span><br/>
                    <label><small>NUMBER OF HOUSEHOLD MEMBERS</small></label>
                  </div>

                  <div class="form-group">
                    <span id='number_of_males'></span><br/>
                    <label><small>NUMBER OF MALES</small></label>
                  </div>

                  <div class="form-group">
                    <span id='number_of_females'></span><br/>
                    <label><small>NUMBER OF FEMALES</small></label>
                  </div>
                </div>
              </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="secondPage">
              <div id='member_div' class='row'>

              </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="thirdPage">
              <br />
              <div class='row'>
                <!--house_type-->
                <div class='col-md-6'>
                  <p class='title'>Type of building/house</p>
                  <span id="house_type"></span><br/>
                </div>
                <!--construction-->
                <div class='col-md-6'>
                  <p class='title'>Construction materials of the roof</p>
                  <span id="construction"></span><br/>
                </div>
                <div class='col-md-12'><br /></div>
                <!--materials-->
                <div class='col-md-6'>
                  <p class='title'>Construction materials of the outer walls</p>
                  <span id="materials"></span><br/>
                </div>
                <!--repair-->
                <div class='col-md-6'>
                  <p class='title'>State of repair of the building/house</p>
                  <span id="repair"></span><br/>
                </div>
                <div class='col-md-12'><br /></div>
                <!--built_year-->
                <div class='col-md-6'>
                  <p class='title'>When was this building/house built?</p>

                  <div class="form-group">
                    <label><small></small></label>
                    <span id="built_year"></span><br/>
                  </div>
                </div>
                <!--floor_area-->
                <div class='col-md-6'>
                  <p class='title'>What is the estimated floor area of this housing unit?</p>
                  <span id="floor_area"></span><br/>
                </div>
                <div class='col-md-12'><br /></div>
                <!--tenure-->
                <div class='col-md-6'>
                  <p class='title'>Did you own or amortize this lot occupied by your household or do you rent it, do you occupy it rent-free with consent of owner, or rent-free without consent of owner?</p>
                  <span id="tenure"></span><br/>
                </div>
                <!--remarks-->
                <div class='col-md-6'>
                  <p class='title'>Remarks</p>
                  <div class="form-group">
                    <label></label>
                    <span id="remarks"></span><br/>
                  </div>
                </div>
              </div>
            </div>
            <br />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close Dialog</button>
          </div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <script src="js/admin.js?2"></script>
</html>
