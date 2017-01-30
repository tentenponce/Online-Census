$(document).ready(function() {
  updateHousehold();
});

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
