<?php //FRONT END
  //centralized nav, dito rin ung search para kahit san pde mag search agad ng census form

  /*<li class="<?php if($thisPage=='ApplicationForm'){echo 'active'; }?>"><a href="census.php">Application Form</a></li>*/
?>
<nav class="navbar navbar-default navbar-fixed-top " >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
      <p class="navbar-text" style="font-weight:bold;">Online Census</p>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav" id="myNavbar">
      <li class="<?php if($thisPage=='Home'){echo 'active'; }?>"><a href="<?php if($thisPage=='Home'){echo '#section1';} elseif($thisPage=='ApplicationForm'){echo 'index.php';}?>">Home</a></li>
      <li <?php if($thisPage=='ApplicationForm'){echo 'style="display:none;"';}?>><a href="#section2">Announcements</a></li>
      <li <?php if($thisPage=='ApplicationForm'){echo 'style="display:none;"';}?>><a href="#section41">E-Census</a></li>
      <li class="<?php if($thisPage=='ApplicationForm'){echo 'active'; }?>" <?php if($thisPage=='Home'){echo 'style="display:none;"';}?>><a href="census.php">Application Form</a></li>

      <li><a href="#"></a></li>
    </ul>
    <div class="navbar-right input-group">
      <div class="navbar-form">
         <input type="text" class="form-control" placeholder="Search" id="input_search">
         <div class="input-group-btn">
           <button class="btn btn-default" type="submit" data-toggle="modal" data-target="#searchModal"  onClick="applicationSearch();">
             <i class="glyphicon glyphicon-search"></i>
           </button>
         </div>
       </div>
     </div>
    </div>
  </div>
</nav>
<div class="modal fade" tabindex="-1" role="dialog" id="searchModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
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
                <div class='col-md-4 text-center'>
                  <p><b>VISIT NUMBER 1</b></p>

                  <hr />

                  <div class="form-group">
                    <span  id='visit_1'></span><br/>
                    <label><small>DATE OF VISIT</small></label>
                  </div>

                  <div class="form-group">
                    <label><small>RESULT OF VISIT</small></label><br/>
                    <span id='visit_result_1'></span><br/>
                    <!-- <select class='form-control' name='visit_result_1'>
                      <option value='1'>Completed</option>
                      <option value='2'>Partly completed</option>
                      <option value='3'>Refused</option>
                      <option value='4'>Postponed</option>
                      <option value='5'>House hold is temporarily away/no respondent around</option>
                      <option value='6'>Others</option>
                    </select> -->
                  </div>

                </div>

                <div class='col-md-4 text-center border-left'>
                  <p><b>VISIT NUMBER 2</b></p>

                  <hr />

                  <div class="form-group">
                    <span id='visit_2'></span><br/>
                    <label><small>DATE OF VISIT</small></label>
                  </div>

                  <div class="form-group">
                    <label><small>RESULT OF VISIT</small></label><br/>
                    <span id='visit_result_2'></span><br/>
                    <!-- <select class='form-control' name='visit_result_2' required>
                      <option value='1'>Completed</option>
                      <option value='2'>Partly completed</option>
                      <option value='3'>Refused</option>
                      <option value='4'>Postponed</option>
                      <option value='5'>House hold is temporarily away/no respondent around</option>
                      <option value='6'>Others</option>
                    </select> -->
                  </div>

                </div>

                <div class='col-md-4 text-center border-left'>
                  <p><b>VISIT NUMBER 3</b></p>

                  <hr />

                  <div class="form-group">
                    <span id='visit_3'></span><br/>
                    <label><small>DATE OF VISIT</small></label>
                  </div>

                  <div class="form-group">
                    <label><small>RESULT OF VISIT</small></label><br/>
                    <span id='visit_result_3'></span><br/>
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

            <hr />

            <div>
              <p class='text-center'><b>HOUSEHOLD DEFINITION</b></p>

              <p class='text-center'>
                A <b>household</b> is a social unit consisting of a person living alone or a group of persons who sleep in the same housing unit and have a common arrangement in the preparation and consumption of food.
              </p>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="secondPage">
            <div id='member_div' class='row'>

            </div>
          </div>

          <div role="tabpanel" class="tab-pane" id="thirdPage">
              <h4 class='text-center'><b>Form 2D</b></h4>
              <hr />
              <div class='row'>
                <!--house_type-->
                <div class='col-md-6'>
                  <p class='title'>Type of building/house</p>

                  <div class="radio">
                    <label><input type="radio" name="house_type" value='1' required>Single House</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="house_type" value='2' required>Duplex</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="house_type" value='3' required>Multi-unit residential (three units or more)</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="house_type" value='4' required>Commercial/industrial/agricultural (office, factory, and others)</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="house_type" value='5' required>Institutional living quarter (hotel, hospital, and others)</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="house_type" value='6' required>Other housing units (boat, cave, and others)</label>
                  </div>
                </div>
                <!--construction-->
                <div class='col-md-6'>
                  <p class='title'>Construction materials of the roof</p>

                  <div class="radio">
                    <label><input type="radio" name="construction" value='1' required>Galvanized iron/aluminum</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="construction" value='2' required>Tile concrete/clay tile</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="construction" value='3' required>Half galvanized iron and half concrete</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="construction" value='4' required>Wood</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="construction" value='5' required>Cogon/nipa/anahaw</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="construction" value='6' required>Asbestos</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="construction" value='7' required>Makeshift/salvaged/improvised materials</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="construction" value='8' required>Others</label>
                  </div>
                </div>
                <div class='col-md-12'><br /></div>
                <!--materials-->
                <div class='col-md-6'>
                  <p class='title'>Construction materials of the outer walls</p>

                  <div class="radio">
                    <label><input type="radio" name="materials" value='1' required>Concrete/brick/stone</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="materials" value='2' required>Wood</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="materials" value='3' required>Half concrete/brick/stone and half wood</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="materials" value='4' required>Galvanized iron/aluminum</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="materials" value='5' required>Bamboo/sawali/cogon/nipa</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="materials" value='6' required>Asbestos</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="materials" value='7' required>Glass</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="materials" value='8' required>Makeshift/salvaged/improvised materials</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="materials" value='9' required>Others</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="materials" value='9' required>No Walls</label>
                  </div>
                </div>
                <!--repair-->
                <div class='col-md-6'>
                  <p class='title'>State of repair of the building/house</p>

                  <div class="radio">
                    <label><input type="radio" name="repair" value='1' required>Needs no repair/needs minor repair</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="repair" value='2' required>Needs major repair</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="repair" value='3' required>Dilapidated/condemned</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="repair" value='4' required>Under renovation/being repaired</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="repair" value='5' required>Under construction</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="repair" value='6' required>Unfinished construction</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="repair" value='7' required>Not Applicable</label>
                  </div>
                </div>
                <div class='col-md-12'><br /></div>
                <!--built_year-->
                <div class='col-md-6'>
                  <p class='title'>When was this building/house built?</p>

                  <div class="form-group">
                    <label><small></small></label>
                    <input id='built_year_input' class="form-control" type='date' name='built_year' required>
                  </div>
                </div>
                <!--floor_area-->
                <div class='col-md-6'>
                  <p class='title'>What is the estimated floor area of this housing unit?</p>

                  <div class="radio">
                    <label><input type="radio" name="floor_area" value='1' required>Less than 5 sq. m/less than 54 sq. ft.</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="floor_area" value='2' required>5 - 9 sq. m/54 - 107 sq. ft.</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="floor_area" value='3' required>10 - 19 sq. m/106 - 209 sq. ft.</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="floor_area" value='4' required>20 - 29 sq. m/210 - 317 sq. ft.</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="floor_area" value='5' required>30 - 49 sq. m/318 - 532 sq. ft.</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="floor_area" value='6' required>50 - 69 sq. m/533 - 748 sq. ft.</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="floor_area" value='7' required>70 - 89 sq. m/749 - 963 sq. ft.</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="floor_area" value='8' required>90 - 119 sq. m/964 - 1286 sq. ft.</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="floor_area" value='9' required>120 - 149 sq. m/1287 - 1609 sq. ft.</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="floor_area" value='10' required>150 - 199 sq. m/1610 - 2147 sq. ft.</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="floor_area" value='11' required>200 sq. m - over/2148 sq. ft. - over</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="floor_area" value='12' required>Not Applicable</label>
                  </div>
                </div>
                <div class='col-md-12'><br /></div>
                <!--tenure-->
                <div class='col-md-6'>
                  <p class='title'>Did you own or amortize this lot occupied by your household or do you rent it, do you occupy it rent-free with consent of owner, or rent-free without consent of owner?</p>

                  <div class="radio">
                    <label><input type="radio" name="tenure" value='1' required>Owned/being amortized</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="tenure" value='2' required>rented</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="tenure" value='3' required>Rent-free with consent of owner</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="tenure" value='4' required>Rent-free without consent of owner</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="tenure" value='5' required>Not Applicable</label>
                  </div>
                </div>
                <!--remarks-->
                <div class='col-md-6'>
                  <p class='title'>Remarks</p>

                  <div class="form-group">
                    <label></label>
                    <textarea class="form-control" rows="5" name='remarks' required></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
