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
