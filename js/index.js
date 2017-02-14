function applicationSearch(){
  var application_number = $("#input_search").val();

  $.get("ajax/showCensusForm2.php", {application_number : application_number}, function(data) {
    $("#secondPage").find("#member_div").html(data);
  });
}
