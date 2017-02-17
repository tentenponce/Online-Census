$(document).ready(function() {
  updateHousehold();
});

function addMemberSubmit() {
  $("#age_input").removeAttr("disabled");
}

function addMember() {
  updateHousehold();
  return false;
}

function householdName() {
  $(".household_member_name_span").html($("#member_name_input").val());
}

function updateHousehold() {
  var household = "";
  var childCount = $("#household_div > div").length;
  if (childCount == 0) {
    household = "Head";
  } else if (childCount == 1) {
    household = "Spouse of the head";
  } else if (childCount == 2) {
    household = "Never-married children of head/spouse from oldest to the youngest";
  } else if (childCount == 3) {
    household = "Ever-married children of head/spouse and their families from oldest to the youngest";
  } else if (childCount == 4) {
    household = "Other Relatives";
  } else if (childCount == 5) {
    household = "Non Relatives";
  }

  $("#household_member_span").html(household);
}

function removeMember(member_name) {
  $.get("ajax/removeMember.php", {member_name : member_name}, function(data) {
    var result = parseInt(data);

    if (result == 1) {
      location.reload();
    } else {
      console.log(data);
    }
  });
}

function nextPage() {
  var memberCount = $("#household_div > div").length;

  if (memberCount > 0) {
    window.location.href = "census3.php";
  }
}

function citizenshipChange() {
  var citizenship_select = $("#citizenship_select").val();

  if (parseInt(citizenship_select) == 1) {
    $("#country_div").hide();
  } else {
    $("#country_div").show();
  }
}

function cityMunicipalityChange() {
  var city_municipality_select = $("#city_municipality_select").val();

  if (parseInt(city_municipality_select) == 1) {
    $("#city_municipality_div").hide();
  } else {
    $("#city_municipality_div").show();
  }
}

function gradeYearChange() {
  var grade_year_select = $("#grade_year_select").val();

  if (parseInt(grade_year_select) >= 410) {
    $("#course_div").show();
  } else {
    $("#course_div").hide();
  }
}

function ageKeyUp() {
  var age_input = $("#age_input").val();

  $("#5_year_div").hide();
  $("#10_year_div").hide();
  if (parseInt(age_input) >= 5) {
    $("#5_year_div").show();
  }

  if (parseInt(age_input) >= 10) {
    $("#10_year_div").show();
  }
}

function bornDateChange() {
  var bornDate = $("#born_date_input").val();

  bornDate = new Date(bornDate);
  var today = new Date();
  var age = Math.floor((today-bornDate) / (365.25 * 24 * 60 * 60 * 1000));

  $('#age_input').val(age);
  ageKeyUp();
}
