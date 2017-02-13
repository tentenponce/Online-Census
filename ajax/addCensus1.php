<?php
  if (isset($_POST['census1Btn'])) {
    session_start();
    require "../db.php";

    $_SESSION['census_1'] = 1; //census application form 1 is finsihed answering

    //=====CERTIFICATION======//
    $_SESSION['enumerator'] = $_POST['enumerator'];
    $_SESSION['enum_date_accomplished'] = $_POST['enum_date_accomplished'];
    $_SESSION['team_supervisor'] = $_POST['team_supervisor'];
    $_SESSION['team_date_reviewed'] = $_POST['team_date_reviewed'];
    $_SESSION['cas_acas'] = $_POST['cas_acas'];
    $_SESSION['cas_date_reviewed'] = $_POST['cas_date_reviewed'];
    $_SESSION['co_ro_po_supervisor'] = $_POST['co_ro_po_supervisor'];
    $_SESSION['co_ro_po_date_reviewed'] = $_POST['co_ro_po_date_reviewed'];

    //======GEOGRAPHIC IDENTIFIATION======//
    $_SESSION['province'] = $_POST['province'];
    $_SESSION['city'] = $_POST['city'];
    $_SESSION['barangay'] = $_POST['barangay'];
    $_SESSION['enumeration_area_number'] = $_POST['enumeration_area_number'];
    $_SESSION['building_serial_number'] = $_POST['building_serial_number'];
    $_SESSION['housing_unit_serial_number'] = $_POST['housing_unit_serial_number'];
    $_SESSION['household_serial_number'] = $_POST['household_serial_number'];
    $_SESSION['line_number_of_respondent'] = $_POST['line_number_of_respondent'];
    $_SESSION['name_of_household_head'] = $_POST['name_of_household_head'];
    $_SESSION['address'] = $_POST['address'];

    //============VISIT===============/
    $_SESSION['visit_1'] = $_POST['visit_1'];
    $_SESSION['visit_result_1'] = $_POST['visit_result_1'];
    $_SESSION['visit_2'] = $_POST['visit_2'];
    $_SESSION['visit_result_2'] = $_POST['visit_result_2'];
    $_SESSION['visit_3'] = $_POST['visit_3'];
    $_SESSION['visit_result_3'] = $_POST['visit_result_3'];
    $_SESSION['next_visit'] = $_POST['next_visit'];

    //=============SUMMARY OF VISIT==============//
    $_SESSION['enumerator_code'] = $_POST['enumerator_code'];
    $_SESSION['number_of_visit'] = $_POST['number_of_visit'];
    $_SESSION['result_of_final_visit'] = $_POST['result_of_final_visit'];
    $_SESSION['number_of_household_members'] = $_POST['number_of_household_members'];
    $_SESSION['number_of_males'] = $_POST['number_of_males'];
    $_SESSION['number_of_females'] = $_POST['number_of_females'];

    header("Location: ../census2.php");
  }
?>
