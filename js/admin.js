$(document).ready(function() {
    var showRecords = $("#showRecords").DataTable({
        "ajax": "ajax/showRecords.php",
        columns: [{
            "className": 'details-control',
            "orderable": false,
            "data": null,
            "defaultContent": "<button class='btn btn-info print_btn'>Print</button>&nbsp;<button class='btn btn-primary view_btn'>View</button>&nbsp;<button class='btn btn-success check_btn'>Approve</button>&nbsp;<button class='btn btn-danger remove_btn'>Disapprove</button>"
        }, {
            data: "application_number"
        }, {
            data: "date_submit"
        }, {
            data: "date_approved"
        }],
        "order": [
            [2, 'asc']
        ],
        "createdRow": function(row, data, dataIndex) {
            if (data.is_approve == 1) {
              $(row).find(".check_btn").hide();
              $(row).find(".remove_btn").hide();
              $(row).find(".print_btn").show();
            } else {
              $(row).find(".check_btn").show();
              $(row).find(".remove_btn").show();
              $(row).find(".print_btn").hide();
            }
        }
    });

    $("#showRecords").on("click", '.check_btn', function() {
        var data = showRecords.row($(this).closest('tr')).data();

        if (confirm("Approve this application form?")) {
          $.get("ajax/approveForm.php", {application_number : data.application_number}, function(data) {
            var result = parseInt(data);

            if (result == 1) {
              showRecords.ajax.reload(null, false);
            } else {
              console.log(data);
            }
          });
        }
    });

    $("#showRecords").on("click", '.remove_btn', function() {
        var data = showRecords.row($(this).closest('tr')).data();

        if (confirm("Delete this application form?")) {
          $.get("ajax/disapproveForm.php", {application_number : data.application_number}, function(data) {
            var result = parseInt(data);

            if (result == 1) {
              showRecords.ajax.reload(null, false);
            } else {
              console.log(data);
            }
          });
        }
    });

    $("#showRecords").on("click", '.print_btn',function() {
      var datas = showRecords.row($(this).closest('tr')).data();

      var win = window.open("printApplicationNumber.php?application_number=" + datas[0], '_blank');
      if (win) {
          //Browser has allowed it to be opened
          win.focus();
      } else {
          //Browser has blocked it
          alert('Please allow popups for this website');
      }
    });

    $("#showRecords").on("click", '.view_btn', function() {
      var data = showRecords.row($(this).closest('tr')).data();

        $("#application_id").html(data["application_number"]);

        $('#viewModal').modal('show');
        $.get("ajax/showCensusForm2.php", {
            application_number: data["application_number"]
        }, function(data) {
            $("#secondPage").find("#member_div").html(data);
        });
        $.post("ajax/showDatas.php", {
            application_number: data["application_number"]
        }, function(data) {
            var datas = $.parseJSON(data);
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
            switch (parseInt(datas[0].visit_result_1)) {
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
            switch (parseInt(datas[0].visit_result_2)) {
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
            switch (parseInt(datas[0].visit_result_3)) {
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
            if (parseInt(datas[0].house_type) == 1) {
                $("#house_type").html("Single House");
            } else if (parseInt(datas[0].house_type) == 2) {
                $("#house_type").html("Duplex");
            } else if (parseInt(datas[0].house_type) == 3) {
                $("#house_type").html("Multi-unit residential (three units or more)");
            } else if (parseInt(datas[0].house_type) == 4) {
                $("#house_type").html("Commercial/industrial/agricultural (office, factory, and others)");
            } else if (parseInt(datas[0].house_type) == 5) {
                $("#house_type").html("Institutional living quarter (hotel, hospital, and others)");
            } else if (parseInt(datas[0].house_type) == 6) {
                $("#house_type").html("Other housing units (boat, cave, and others)");
            }
            if (parseInt(datas[0].construction) == 1) {
                $("#construction").html("Galvanized iron/aluminum");
            } else if (parseInt(datas[0].construction) == 2) {
                $("#construction").html("Tile concrete/clay tile");
            } else if (parseInt(datas[0].construction) == 3) {
                $("#construction").html("Half galvanized iron and half concrete");
            } else if (parseInt(datas[0].construction) == 4) {
                $("#construction").html("Wood");
            } else if (parseInt(datas[0].construction) == 5) {
                $("#construction").html("Cogon/nipa/anahaw");
            } else if (parseInt(datas[0].construction) == 6) {
                $("#construction").html("Asbestos");
            } else if (parseInt(datas[0].construction) == 7) {
                $("#construction").html("Makeshift/salvaged/improvised materials");
            } else if (parseInt(datas[0].construction) == 8) {
                $("#construction").html("Others");
            }
            if (parseInt(datas[0].materials) == 1) {
                $("#materials").html("Concrete/brick/stone");
            } else if (parseInt(datas[0].materials) == 2) {
                $("#materials").html("Wood");
            } else if (parseInt(datas[0].materials) == 3) {
                $("#materials").html("Half concrete/brick/stone and half wood");
            } else if (parseInt(datas[0].materials) == 4) {
                $("#materials").html("Galvanized iron/aluminum");
            } else if (parseInt(datas[0].materials) == 5) {
                $("#materials").html("Bamboo/sawali/cogon/nipa");
            } else if (parseInt(datas[0].materials) == 6) {
                $("#materials").html("Asbestos");
            } else if (parseInt(datas[0].materials) == 7) {
                $("#materials").html("Glass");
            } else if (parseInt(datas[0].materials) == 8) {
                $("#materials").html("Makeshift/salvaged/improvised materials");
            } else if (parseInt(datas[0].materials) == 9) {
                $("#materials").html("Others/No walls");
            }
            if (parseInt(datas[0].repair) == 1) {
                $("#repair").html("Needs no repair/needs minor repair");
            } else if (parseInt(datas[0].repair) == 2) {
                $("#repair").html("Needs major repair");
            } else if (parseInt(datas[0].repair) == 3) {
                $("#repair").html("Dilapidated/condemned");
            } else if (parseInt(datas[0].repair) == 4) {
                $("#repair").html("Under renovation/being repaired");
            } else if (parseInt(datas[0].repair) == 5) {
                $("#repair").html("Under construction");
            } else if (parseInt(datas[0].repair) == 6) {
                $("#repair").html("Unfinished construction");
            } else if (parseInt(datas[0].repair) == 7) {
                $("#repair").html("Not Applicable");
            }
            if (parseInt(datas[0].tenure) == 1) {
                $("#tenure").html("Owned/being amortized");
            } else if (parseInt(datas[0].tenure) == 2) {
                $("#tenure").html("rented");
            } else if (parseInt(datas[0].tenure) == 3) {
                $("#tenure").html("Rent-free with consent of owner");
            } else if (parseInt(datas[0].tenure) == 4) {
                $("#tenure").html("Rent-free without consent of owner");
            } else if (parseInt(datas[0].tenure) == 5) {
                $("#tenure").html("Not Applicable");
            }
            if (parseInt(datas[0].floor_area) == 1) {
                $("#floor_area").html("Less than 5 sq. m/less than 54 sq. ft.");
            } else if (parseInt(datas[0].floor_area) == 2) {
                $("#floor_area").html("5 - 9 sq. m/54 - 107 sq. ft.");
            } else if (parseInt(datas[0].floor_area) == 3) {
                $("#floor_area").html("10 - 19 sq. m/106 - 209 sq. ft.");
            } else if (parseInt(datas[0].floor_area) == 4) {
                $("#floor_area").html("20 - 29 sq. m/210 - 317 sq. ft.");
            } else if (parseInt(datas[0].floor_area) == 5) {
                $("#floor_area").html("30 - 49 sq. m/318 - 532 sq. ft.");
            } else if (parseInt(datas[0].floor_area) == 6) {
                $("#floor_area").html("50 - 69 sq. m/533 - 748 sq. ft.");
            } else if (parseInt(datas[0].floor_area) == 7) {
                $("#floor_area").html("70 - 89 sq. m/749 - 963 sq. ft.");
            } else if (parseInt(datas[0].floor_area) == 8) {
                $("#floor_area").html("90 - 119 sq. m/964 - 1286 sq. ft.");
            } else if (parseInt(datas[0].floor_area) == 9) {
                $("#floor_area").html("120 - 149 sq. m/1287 - 1609 sq. ft.");
            } else if (parseInt(datas[0].floor_area) == 10) {
                $("#floor_area").html("150 - 199 sq. m/1610 - 2147 sq. ft.");
            } else if (parseInt(datas[0].floor_area) == 11) {
                $("#floor_area").html("200 sq. m - over/2148 sq. ft. - over");
            } else if (parseInt(datas[0].floor_area) == 12) {
                $("#floor_area").html("Not Applicable");
            }
            $("#built_year").html(datas[0].built_year);
            $("#remarks").html(datas[0].remarks);
        });
    });
});
