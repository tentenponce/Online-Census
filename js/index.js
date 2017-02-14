function applicationSearch(){
  var application_number = $("#input_search").val();
  $.ajax({
    url : "ajax/showDatas.php",
    async : false,
    type : "POST",
    data : {
      application_number : application_number
    },
    success : function(data)
    {
      var datas = $.parseJSON(data);
      console.log(datas);
      $("#enum").html(datas[0].enumerator);
      $("#enum_date_accomplished").html(datas[0].enum_date_accomplished);
      $("#team_supervisor").html(datas[0].team_supervisor);
      $("#team_date_reviewed").html(datas[0].team_date_reviewed);
      $("#cas_acas").html(datas[0].cas_acas);
      $("#cas_date_reviewed").html(datas[0].cas_date_reviewed);
      $("#co_ro_po_supervisor").html(datas[0].co_ro_po_supervisor);
      $("#co_ro_po_date_reviewed").html(datas[0].co_ro_po_date_reviewed);
      $("#province").html(datas[0].province);
      $("#city").html(datas[0].city);
      $("#barangay").html(datas[0].barangay);
      $("#enumeration_area_number").html(datas[0].enumeration_area_number);
      $("#building_serial_number").html(datas[0].building_serial_number);
      $("#housing_unit_serial_number").html(datas[0].housing_unit_serial_number);
      $("#household_serial_number").html(datas[0].household_serial_number);
      $("#line_number_of_respondent").html(datas[0].line_number_of_respondent);
      $("#name_of_household_head").html(datas[0].name_of_household_head);
      $("#address").html(datas[0].address);
      $("#visit_1").html(datas[0].visit_1);
      switch(parseInt(datas[0].visit_result_1)){
        case 1:
          $("#visit_result_1").html("Completed");
          break;
        case 2:
          $("#visit_result_1").html("Partly completed");
          break;
        case 3:
          $("#visit_result_1").html("Refused");
          break;
        case 4:
          $("#visit_result_1").html("Postponed");
          break;
        case 5:
          $("#visit_result_1").html("House hold is temporarily away/no respondent around");
          break;
        case 6:
          $("#visit_result_1").html("Others");
          break;
      }
      $("#visit_2").html(datas[0].visit_2);
      switch(parseInt(datas[0].visit_result_2)){
        case 1:
          $("#visit_result_2").html("Completed");
          break;
        case 2:
          $("#visit_result_2").html("Partly completed");
          break;
        case 3:
          $("#visit_result_2").html("Refused");
          break;
        case 4:
          $("#visit_result_2").html("Postponed");
          break;
        case 5:
          $("#visit_result_2").html("House hold is temporarily away/no respondent around");
          break;
        case 6:
          $("#visit_result_2").html("Others");
          break;
      }
      $("#visit_3").html(datas[0].visit_3);
      switch(parseInt(datas[0].visit_result_3)){
        case 1:
          $("#visit_result_3").html("Completed");
          break;
        case 2:
          $("#visit_result_3").html("Partly completed");
          break;
        case 3:
          $("#visit_result_3").html("Refused");
          break;
        case 4:
          $("#visit_result_3").html("Postponed");
          break;
        case 5:
          $("#visit_result_3").html("House hold is temporarily away/no respondent around");
          break;
        case 6:
          $("#visit_result_3").html("Others");
          break;
      }
      $("#next_visit").html(datas[0].next_visit);
      $("#next_enumerator_codevisit").html(datas[0].enumerator_code);
      $("#number_of_visit").html(datas[0].number_of_visit);
      $("#result_of_final_visit").html(datas[0].result_of_final_visit);
      $("#number_of_household_members").html(datas[0].number_of_household_members);
      $("#number_of_males").html(datas[0].number_of_males);
      $("#number_of_females").html(datas[0].number_of_females);
      //end of first form
      $("#member_name").html(datas[0].member_name);
      if(parseInt(datas[0].member_relationship) == 1) //up to 66
      {
        $("#member_relationship").html("Head");
      }
      else if (parseInt(datas[0].member_relationship) == 2) {
        $("#member_relationship").html("Spouse");
        $("#member_relationship").html("Head");
        $("#member_relationship").html("Head");
        $("#member_relationship").html("Head");
        $("#member_relationship").html("Head");
        $("#member_relationship").html("Head");
        $("#member_relationship").html("Head");
        $("#member_relationship").html("Head");
        $("#member_relationship").html("Head");
        $("#member_relationship").html("Head");
        $("#member_relationship").html("Head");
        $("#member_relationship").html("Head");
        $("#member_relationship").html("Head");
      }
      else if (parseInt(datas[0].member_relationship) == 3) {
        $("#member_relationship").html("Son");
      }
      else if (parseInt(datas[0].member_relationship) == 4) {
        $("#member_relationship").html("Daughter");
      }
      else if (parseInt(datas[0].member_relationship) == 21) {
        $("#member_relationship").html("Stepson");
      }
      else if (parseInt(datas[0].member_relationship) == 22) {
        $("#member_relationship").html("Stepdaughter");
      }
      else if (parseInt(datas[0].member_relationship) == 23) {
        $("#member_relationship").html("Son-in-law");
      }
      else if (parseInt(datas[0].member_relationship) == 24) {
        $("#member_relationship").html("Daughter-in-law");
      }
      else if (parseInt(datas[0].member_relationship) == 31) {
        $("#member_relationship").html("Grandson");
      }
      else if (parseInt(datas[0].member_relationship) == 32) {
        $("#member_relationship").html("Granddaughter");
      }
      else if (parseInt(datas[0].member_relationship) == 33) {
        $("#member_relationship").html("Father");
      }
      else if (parseInt(datas[0].member_relationship) == 34) {
        $("#member_relationship").html("Mother");
      }
      else if (parseInt(datas[0].member_relationship) == 41) {
        $("#member_relationship").html("Brother");
      }
      else if (parseInt(datas[0].member_relationship) == 42) {
        $("#member_relationship").html("Sister");
      }
      else if (parseInt(datas[0].member_relationship) == 43) {
        $("#member_relationship").html("Uncle");
      }
      else if (parseInt(datas[0].member_relationship) == 44) {
        $("#member_relationship").html("Aunt");
      }
      else if (parseInt(datas[0].member_relationship) == 55) {
        $("#member_relationship").html("Nephew");
      }
      else if (parseInt(datas[0].member_relationship) == 56) {
        $("#member_relationship").html("Niece");

      }
      else if (parseInt(datas[0].member_relationship) == 57) {
        $("#member_relationship").html("Other relative");
      }
      else if (parseInt(datas[0].member_relationship) == 58) {
        $("#member_relationship").html("Nonrelative");
      }
      else if (parseInt(datas[0].member_relationship) == 65) {
        $("#member_relationship").html("Boarder");
      }
      else if (parseInt(datas[0].member_relationship) == 66) {
        $("#member_relationship").html("Domestic Helper");
      }
      switch(parseInt(datas[0].gender)){
        case 1:
          $("#gender").html("Female");
          break;
        case 2:
          $("#gender").html("Male");
          break;
      }
      $("#born_date").html(datas[0].born_date);
      $("#age").html(datas[0].age);
      switch(parseInt(datas[0].is_registered)){
        case 1:
          $("#is_registered").html("Yes");
          break;
        case 2:
          $("#is_registered").html("No");
          break;
        case 3:
          $("#is_registered").html("Don't Know");
          break;
      }
      switch(parseInt(datas[0].arrangement)){
        case 1:
          $("#arrangement").html("Single");
          break;
        case 2:
          $("#arrangement").html("Married");
          break;
        case 3:
          $("#arrangement").html("Widowed");
          break;
        case 4:
          $("#arrangement").html("Divorced/Separated");
          break;
        case 5:
          $("#arrangement").html("Common-law/Live-in");
          break;
        case 6:
          $("#arrangement").html("Unknown");
          break;
      }
      $("#religious").html(datas[0].religious);


      //end of second form
      switch(parseInt(datas[0].citizenship)){
        case 1:
          $("#citizenship").html("Yes (Filipino Citizen)");
          break;
        case 2:
          $("#citizenship").html("Yes (Filipino with dual citizenship)");
          $("#country_div_view").show();
          $("#country").html(datas[0].country);
          break;
        case 3:
          $("#citizenship").html("No");
          $("#country_div_view").show();
          $("#country").html(datas[0].country);
          break;
      }
      if(parseInt(datas[0].ethnicity) == 1)
      {
        $("#ethnicity").html("O+");
      }
      else if(parseInt(datas[0].ethnicity) == 2)
            {
              $("#ethnicity").html("A+");
            }
      else if(parseInt(datas[0].ethnicity) == 3)
            {
              $("#ethnicity").html("B+");
            }
      else if(parseInt(datas[0].ethnicity) == 4)
            {
              $("#ethnicity").html("AB+");
            }
      else if(parseInt(datas[0].ethnicity) == 5)
            {
              $("#ethnicity").html("O-");
            }
      else if(parseInt(datas[0].ethnicity) == 6)
            {
              $("#ethnicity").html("A-");
            }
      else if(parseInt(datas[0].ethnicity) == 7)
            {
              $("#ethnicity").html("B-");
            }
      else if(parseInt(datas[0].ethnicity) == 8)
            {
              $("#ethnicity").html("AB-");
            }
      switch(parseInt(datas[0].disability)){
        case 1:
          $("#disability").html("Yes");
          break;
        case 2:
          $("#disability").html("No");
          break;
      }
      switch(parseInt(datas[0].foreign_city)){
        case 1:
          $("#foreign_city").html("Same City/Municipality");
          break;
        case 2:
          $("#foreign_city").html("Foreign Country");
          $("#city_municipality_div_view").show();
          $("#province").html(datas[0].province);
          $("#city_municipality").html(datas[0].city_municipality);
          break;
      }
      if(parseInt(datas[0].grade_year) == 0){
        $("#grade_year").html("No grade completed");
      }
      else if (parseInt(datas[0].grade_year) == 10) {
        $("#grade_year").html("Preschool");
      }
      else if (parseInt(datas[0].grade_year) == 210) {
        $("#grade_year").html("Grade 1");
      }
      else if (parseInt(datas[0].grade_year) == 220) {
        $("#grade_year").html("Grade 2");
      }
      else if (parseInt(datas[0].grade_year) == 230) {
        $("#grade_year").html("Grade 3");
      }
      else if (parseInt(datas[0].grade_year) == 240) {
        $("#grade_year").html("Grade 4");
      }
      else if (parseInt(datas[0].grade_year) == 250) {
        $("#grade_year").html("Grade 5");

      }
      else if (parseInt(datas[0].grade_year) == 260) {
        $("#grade_year").html("Grade 6");
      }
      else if (parseInt(datas[0].grade_year) == 270) {
        $("#grade_year").html("Grade 7");
      }
      else if (parseInt(datas[0].grade_year) == 280) {
        $("#grade_year").html("Elementary Graduate");
      }
      else if (parseInt(datas[0].grade_year) == 310) {
        $("#grade_year").html("1st Year");
      }
      else if (parseInt(datas[0].grade_year) == 320) {
        $("#grade_year").html("2nd Year");
      }
      else if (parseInt(datas[0].grade_year) == 330) {
        $("#grade_year").html("3rd Year");
      }
      else if (parseInt(datas[0].grade_year) == 340) {
        $("#grade_year").html("4th Year");
      }
      else if (parseInt(datas[0].grade_year) == 350) {
        $("#grade_year").html("High School Graduate");
      }
      else if (parseInt(datas[0].grade_year) == 410) {
        $("#grade_year").html("1st Year Post Secondary");
      }
      else if (parseInt(datas[0].grade_year) == 420) {
        $("#grade_year").html("2nd Year Post Secondary");
      }
      else if (parseInt(datas[0].grade_year) == 430) {
        $("#grade_year").html("3rd Year Post Secondary");
      }
      else if (parseInt(datas[0].grade_year) == 810) {
        $("#grade_year").html("1st Year Colleg");
      }
      else if (parseInt(datas[0].grade_year) == 820) {
        $("#grade_year").html("2nd Year Colleg");
      }
      else if (parseInt(datas[0].grade_year) == 830) {
        $("#grade_year").html("3rd Year Colleg");
      }
      else if (parseInt(datas[0].grade_year) == 840) {
        $("#grade_year").html("4th Year Colleg");
      }
      else if (parseInt(datas[0].grade_year) == 850) {
        $("#grade_year").html("5th Year Colleg");
      }
      else if (parseInt(datas[0].grade_year) == 860) {
        $("#grade_year").html("6th Year Colleg");
      }
      else if (parseInt(datas[0].grade_year) == 990) {
        $("#grade_year").html("Post Baccalaureate");
      }
      if(parseInt(datas[0].age) < 5 && parseInt(datas[0].age) > 9 ){
        $("#5_year_div_view").show();
      }
      else if(parseInt(datas[0].age) >= 9){

          $("#5_year_div_view").show();
          $("#10_year_div_view").show();
          switch(parseInt(datas[0].overseas))
          {
            case 1:
              $("#overseas").html("Yes");
              break;
            case 2:
              $("#overseas").html("No");
              break;
          }
          if(parseInt(datas[0].seeing) == 1)
          {
            $("#seeing").html("Seeing, even when wearing eyeglasses");
          }

          if(parseInt(datas[0].hearinng) == 1)
          {
            $("#hearing").html("Hearing, even when using a hearing aid");
          }

          if(parseInt(datas[0].walking) == 1)
          {
            $("#walking").html("Walking or climbing steps");
          }

          if(parseInt(datas[0].remembering)== 1)
          {
            $("#rememering").html("Remembering or concentrating");
          }

          if(parseInt(datas[0].self_caring )== 1)
          {
            $("#self_caring").html("Self-caring (bathing or dressing)");
          }

          if(parseInt(datas[0].communicating )== 1)
          {
            $("#communicating").html("Communicating using his/her usual language");
          }
        }
    }
  });

  $.get("ajax/showCensusForm3.php", {application_number : application_number}, function(data) {
    var datas = $.parseJSON(data);

    if(parseInt(datas[0].house_type) == 1){
      $("#house_type").html("Single House");
    }
    else if(parseInt(datas[0].house_type) == 2){
      $("#house_type").html("Duplex");
    }
    else if(parseInt(datas[0].house_type) == 3){
      $("#house_type").html("Multi-unit residential (three units or more)");
    }
    else if(parseInt(datas[0].house_type) == 4){
      $("#house_type").html("Commercial/industrial/agricultural (office, factory, and others)");
    }
    else if(parseInt(datas[0].house_type) == 5){
      $("#house_type").html("Institutional living quarter (hotel, hospital, and others)");
    }
    else if(parseInt(datas[0].house_type) == 6){
      $("#house_type").html("Other housing units (boat, cave, and others)");
    }
    if(parseInt(datas[0].construction) == 1){
      $("#construction").html("Galvanized iron/aluminum");
    }
    else if(parseInt(datas[0].construction) == 2){
      $("#construction").html("Tile concrete/clay tile");
    }
    else if(parseInt(datas[0].construction) == 3){
      $("#construction").html("Half galvanized iron and half concrete");
    }
    else if(parseInt(datas[0].construction) == 4){
      $("#construction").html("Wood");
    }
    else if(parseInt(datas[0].construction) == 5){
      $("#construction").html("Cogon/nipa/anahaw");
    }
    else if(parseInt(datas[0].construction) == 6){
      $("#construction").html("Asbestos");
    }
    else if(parseInt(datas[0].construction) == 7){
      $("#construction").html("Makeshift/salvaged/improvised materials");
    }
    else if(parseInt(datas[0].construction) == 8){
      $("#construction").html("Others");
    }
    if(parseInt(datas[0].materials) == 1){
      $("#materials").html("Concrete/brick/stone");
    }
    else if(parseInt(datas[0].materials) == 2){
      $("#materials").html("Wood");
    }
    else if(parseInt(datas[0].materials) == 3){
      $("#materials").html("Half concrete/brick/stone and half wood");
    }
    else if(parseInt(datas[0].materials) == 4){
      $("#materials").html("Galvanized iron/aluminum");
    }
    else if(parseInt(datas[0].materials) == 5){
      $("#materials").html("Bamboo/sawali/cogon/nipa");
    }
    else if(parseInt(datas[0].materials) == 6){
      $("#materials").html("Asbestos");
    }
    else if(parseInt(datas[0].materials) == 7){
      $("#materials").html("Glass");
    }
    else if(parseInt(datas[0].materials) == 8){
      $("#materials").html("Makeshift/salvaged/improvised materials");
    }
    else if(parseInt(datas[0].materials) == 9){
      $("#materials").html("Others/No walls");
    }
    if(parseInt(datas[0].repair) == 1){
      $("#repair").html("Needs no repair/needs minor repair");
    }
    else if(parseInt(datas[0].repair) == 2){
      $("#repair").html("Needs major repair");
    }
    else if(parseInt(datas[0].repair) == 3){
      $("#repair").html("Dilapidated/condemned");
    }
    else if(parseInt(datas[0].repair) == 4){
      $("#repair").html("Under renovation/being repaired");
    }
    else if(parseInt(datas[0].repair) == 5){
      $("#repair").html("Under construction");
    }
    else if(parseInt(datas[0].repair) == 6){
      $("#repair").html("Unfinished construction");
    }
    else if(parseInt(datas[0].repair) == 7){
      $("#repair").html("Not Applicable");
    }
    if(parseInt(datas[0].tenure) == 1){
      $("#tenure").html("Owned/being amortized");
    }
    else if(parseInt(datas[0].tenure) == 2){
      $("#tenure").html("rented");
    }
    else if(parseInt(datas[0].tenure) == 3){
      $("#tenure").html("Rent-free with consent of owner");
    }
    else if(parseInt(datas[0].tenure) == 4){
      $("#tenure").html("Rent-free without consent of owner");
    }
    else if(parseInt(datas[0].tenure) == 5){
      $("#tenure").html("Not Applicable");
    }
    if(parseInt(datas[0].floor_area) == 1){
      $("#floor_area").html("Less than 5 sq. m/less than 54 sq. ft.");
    }
    else if(parseInt(datas[0].floor_area) == 2){
      $("#floor_area").html("5 - 9 sq. m/54 - 107 sq. ft.");
    }
    else if(parseInt(datas[0].floor_area) == 3){
      $("#floor_area").html("10 - 19 sq. m/106 - 209 sq. ft.");
    }
    else if(parseInt(datas[0].floor_area) == 4){
      $("#floor_area").html("20 - 29 sq. m/210 - 317 sq. ft.");
    }
    else if(parseInt(datas[0].floor_area) == 5){
      $("#floor_area").html("30 - 49 sq. m/318 - 532 sq. ft.");
    }
    else if(parseInt(datas[0].floor_area) == 6){
      $("#floor_area").html("50 - 69 sq. m/533 - 748 sq. ft.");
    }
    else if(parseInt(datas[0].floor_area) == 7){
      $("#floor_area").html("70 - 89 sq. m/749 - 963 sq. ft.");
    }
    else if(parseInt(datas[0].floor_area) == 8){
      $("#floor_area").html("90 - 119 sq. m/964 - 1286 sq. ft.");
    }
    else if(parseInt(datas[0].floor_area) == 9){
      $("#floor_area").html("120 - 149 sq. m/1287 - 1609 sq. ft.");
    }
    else if(parseInt(datas[0].floor_area) == 10){
      $("#floor_area").html("150 - 199 sq. m/1610 - 2147 sq. ft.");
    }
    else if(parseInt(datas[0].floor_area) == 11){
      $("#floor_area").html("200 sq. m - over/2148 sq. ft. - over");
    }
    else if(parseInt(datas[0].floor_area) == 12){
      $("#floor_area").html("Not Applicable");
    }
    $("#built_year").html(datas[0].built_year);
    $("#remarks").html(datas[0].remarks);
  });
}
