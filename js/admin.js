$(document).ready(function(){
  var showRecords = $("#showRecords").DataTable({
    "ajax": "ajax/showRecords.php",
    columns: [{
        "className": 'details-control',
        "orderable": false,
        "data": null,
        "defaultContent": "<button class='btn btn-success check_btn'>Approve</button>&nbsp;<button class='btn btn-danger check_btn'>Disapprove</button>"
    }, {
        data: "application_number"
    }, {
        data: "date_submit"
    }, {
        data: "date_approved"
    }],
    "order": [
        [2, 'asc']
    ]
  });
  // setInterval(function() {
  //   showRecords.ajax.reload(null,false);
  //   console.log(1);
  // }, 10000);

});
