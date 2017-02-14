function applicationSearch(){
  var application_number = $("#input_search").val();

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

  $.get("ajax/showCensusForm2.php", {application_number : application_number}, function(data) {
    $("#secondPage").find("#member_div").html(data);
  });
}
