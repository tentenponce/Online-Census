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
            <p class='text-center'><b>HOUSEHOLD MEMBERSHIP</b></p>

            <p><small>LIST THE PERSONS OR HOUSEHOLD MEMBERS IN THIS ORDER:</small></p>

              <ul>
                <li>Head</li>
                <li>Spouse of the head</li>
                <li>Never-married children of head/spouse from oldest to the youngest</li>
                <li>Ever-married children of head/spouse and their families from oldest to the youngest</li>
                <li>Other relatives</li>
                <li>Nonrelatives</li>
              </ul>

              <hr/>
          <div class='row text-center'>
            <!--Page 2-->
            <!--member_name-->
            <div class='col-md-3'>
              <p class='title'>Who is the <span id='household_member_span'></span> of this household?</p>

              <div class="form-group">
                <label><small>Household Member Name</small></label><br/>
                <span id="member_name"></span>
              </div>
            </div>
            <!--member_relationship-->
            <div class='col-md-3'>
              <p class='title'>What is <span class='household_member_name_span'></span> relationship to the head of the household?</p>

              <div class="form-group">
                <label><small>Choices</small></label><br/>
                <span id="member_relationship"></span>
              </div>
            </div>
            <!--gender-->
            <div class='col-md-3'>
              <p class='title'>Is <span class='household_member_name_span'></span> male or female?</p>

              <div class="form-group">
                <label><small>Gender</small></label><br/>
                <span id="gender"></span>
              </div>
            </div>
            <!--born_date-->
            <div class='col-md-3'>
              <p class='title'>In what date was <span class='household_member_name_span'></span> born?</p>

              <div class="form-group">
                <span id="born_date"></span>

              </div>
            </div>
            <div class='col-md-12'><br /></div>
            <!--age-->
            <div class='col-md-3'>
              <p class='title'>What is <span class='household_member_name_span'></span>'s age as of his/her last birthday?</p>

              <div class="form-group">
                <span id="age"></span>
                <label><small></small></label>
              </div>
            </div>
            <!--is_registered-->
            <div class='col-md-3'>
              <p class='title'>Was <span class='household_member_name_span'></span>'s birth registered with the Civil Registry Office?</p>

              <div class="form-group">
                <span id="is_registered"></span>
              </div>
            </div>
            <!--arrangement-->
            <div class='col-md-3'>
              <p class='title'>Is <span class='household_member_name_span'></span> single, married, widowed, divorced/separated, or in a comon-law/live-in arrangement?</p>

              <div class="form-group">
                <span id="arrangement"></span>
              </div>
            </div>
            <!--religious-->
            <div class='col-md-3'>
              <p class='title'>What is <span class='household_member_name_span'></span> religious affliation?</p>

              <div class="form-group">
                <label><small>Religion</small></label><br/>
                <span id="religious"></span>
              </div>
            </div>
            <!--Page 3-->
            <div class='col-md-12'><br /></div>
            <!--citizenship-->
            <div class='col-md-4'>
              <p class='title'>Is <span class='household_member_name_span'></span> a citizen of the Philippines?</p>

              <div class="form-group">
                <span id="citizenship"></span>
              </div>

              <div id='country_div_view' style='display: none;'>
                <p class='title'>What country/other country is <span id='household_member_span'></span> a citizen of?</p>

                <div class="form-group">
                  <label><small>Country</small></label><br/>
                  <span id="country"></span>
                </div>
              </div>
            </div>
            <!--ethnicity-->
            <div class='col-md-4'>
              <p class='title'>What is <span class='household_member_name_span'></span>'s ethnicity by blood? Is he/she a/an </p>

              <div class="form-group">
                <span id="ethnicity"></span>
              </div>
            </div>
            <!--disability-->
            <div class='col-md-4'>
              <p class='title'>Does <span class='household_member_name_span'></span> have any physical or mental disability?</p>

              <div class="form-group">
                <span id="disability"></span>
              </div>
            </div>

            <div class='col-md-12'>
              <br />
            </div>

            <div id='5_year_div_view' class='col-md-8 row' style='display: none;'>
              <hr class='col-md-12' />
              <h4 class='col-md-12'><b>For All 5 Years Old and Over</b></h4>
              <hr class='col-md-12' />

              <!--difficulty: seeing, hearing, walking, remembering, self_caring, communicating-->
              <div class='col-md-4'>
                <p class='title'>Does <span class='household_member_name_span'></span> have any difficulty/problem in:</p>
                  <span id="seeing"></span><br/>
                  <span id="hearing"></span><br/>
                  <span id="walking"></span><br/>
                  <span id="remembering"></span><br/>
                  <span id="self_caring"></span><br/>
                  <span id="communicating"></span><br/>
              </div>
              <!--city_municipality-->
              <div class='col-md-4'>
                <p class='title'>In what City/Municipality did <span class='household_member_name_span'></span> reside on May 1, 2005?</p>

                <div class="form-group">
                  <span id="foreign_city"></span><br/>

                </div>

                <div id='city_municipality_div_view' style='display: none;'>
                  <div class="form-group">
                    <label><small>Province</small></label>
                    <span id="province"></span><br/>
                  </div>

                  <div class="form-group">
                    <label><small>City/Municipality</small></label>
                    <span id="city_municipality"></span><br/>
                  </div>
                </div>
              </div>
              <!--grade_year-->
              <div class='col-md-4'>
                <p class='title'>What is the heighest grade/year completed by <span class='household_member_name_span'></span>?</p>
                <span id="grade_year"></span><br/>
                <br />
                <div id='course_div' class="form-group" style='display: none'>
                  <label><small>Course</small></label>
                  <input id='course_input' class="form-control" name='course'>
                </div>
              </div>
            </div>
            <div id='10_year_div_view' class='col-md-4 row' style='display: none;'>
              <hr class='col-md-12' />
              <h4 class='col-md-12'><b>For All 10 Years Old and Over</b></h4>
              <hr class='col-md-12' />

              <!--overseas-->
              <div class='col-md-12'>
                <p class='title'>Is <span class='household_member_name_span'></span> an overseas worker?</p>

                <div class="form-group">
                  <span id="overseas"></span><br/>
                </div>
            </div>
            </div>


          <!--list of the added members-->
          <br />
            </div>
        </div>

          <div role="tabpanel" class="tab-pane" id="thirdPage">
            <h4 class='text-center'><b>Form 2D</b></h4>
            <hr />
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
                  <input id='built_year_input' class="form-control" type='date' name='built_year' required>
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
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
