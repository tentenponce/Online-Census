<?php
  session_start();
  require "../db.php";

  //generate application number
  $seed = str_split('abcdefghijkmnopqrstuvwxyz'
                     .'ABCDEFGHJKLMNPQRSTUVWXYZ'
                     .'123456789'); // and any other characters
  shuffle($seed); // probably optional since array_is randomized; this may be redundant
  $rand = '';
  foreach (array_rand($seed, 2) as $k) $rand .= $seed[$k];
  $rand2 = '';
  foreach (array_rand($seed, 2) as $k) $rand2 .= $seed[$k];
  $application_number = $rand2 . date('siHdmy') . $rand;

  $db->insert("certification", [
    "application_number" => $application_number,
    "enumerator" => $_SESSION['enumerator'],
    "enum_date_accomplished" => $_SESSION['enum_date_accomplished'],
    "team_supervisor" => $_SESSION['team_supervisor'],
    "team_date_reviewed" => $_SESSION['team_date_reviewed'],
    "cas_acas" => $_SESSION['cas_acas'],
    "cas_date_reviewed" => $_SESSION['cas_date_reviewed'],
    "co_ro_po_supervisor" => $_SESSION['co_ro_po_supervisor'],
    "co_ro_po_date_reviewed" => $_SESSION['co_ro_po_date_reviewed']
  ]);

  $db->insert("geographic_information", [
    "application_number" => $application_number,
    "province" => $_SESSION['province'],
    "city" => $_SESSION['city'],
    "barangay" => $_SESSION['barangay'],
    "enumeration_area_number" => $_SESSION['enumeration_area_number'],
    "building_serial_number" => $_SESSION['building_serial_number'],
    "housing_unit_serial_number" => $_SESSION['housing_unit_serial_number'],
    "household_serial_number" => $_SESSION['household_serial_number'],
    "line_number_of_respondent" => $_SESSION['line_number_of_respondent'],
    "name_of_household_head" => $_SESSION['name_of_household_head'],
    "address" => $_SESSION['address']
  ]);

  $db->insert("visit", [
    "application_number" => $application_number,
    "visit_1" => $_SESSION['visit_1'],
    "visit_result_1" => $_SESSION['visit_result_1'],
    "visit_2" => $_SESSION['visit_2'],
    "visit_result_2" => $_SESSION['visit_result_2'],
    "visit_3" => $_SESSION['visit_3'],
    "visit_result_3" => $_SESSION['visit_result_3'],
    "next_visit" => $_SESSION['next_visit']
  ]);

  $db->insert("summary_of_visit", [
    "application_number" => $application_number,
    "enumerator_code" => $_SESSION['enumerator_code'],
    "number_of_visit" => $_SESSION['number_of_visit'],
    "result_of_final_visit" => $_SESSION['result_of_final_visit'],
    "number_of_household_members" => $_SESSION['number_of_household_members'],
    "number_of_males" => $_SESSION['number_of_males'],
    "visit_result_3" => $_SESSION['visit_result_3'],
    "number_of_females" => $_SESSION['number_of_females']
  ]);

  $members = $_SESSION['members'];
  foreach ($members as $member) {
    $db->insert("member", [
      "application_number" => $application_number,
      "member_name" => $member->{'member_name'},
      "member_relationship" => $member->{'member_relationship'},
      "gender" => $member->{'gender'},
      "born_date" => $member->{'born_date'},
      "age" => $member->{'age'},
      "is_registered" => $member->{'is_registered'},
      "arrangement" => $member->{'arrangement'},
      "religious" => $member->{'religious'},
      "citizenship" => $member->{'citizenship'},
      "country" => $member->{'country'},
      "ethnicity" => $member->{'ethnicity'},
      "disability" => $member->{'disability'},
      "seeing" => $member->{'seeing'},
      "hearing" => $member->{'hearing'},
      "walking" => $member->{'walking'},
      "remembering" => $member->{'remembering'},
      "self_caring" => $member->{'self_caring'},
      "communicating" => $member->{'communicating'},
      "foreign_city" => $member->{'foreign_city'},
      "province" => $member->{'province'},
      "city_municipality" => $member->{'city_municipality'},
      "grade_year" => $member->{'grade_year'},
      "course" => $member->{'course'},
      "overseas" => $member->{'overseas'}
    ]);
  }

  $db->insert("house", [
    "application_number" => $application_number,
    "house_type" => $_POST['house_type'],
    "construction" => $_POST['construction'],
    "materials" => $_POST['materials'],
    "repair" => $_POST['repair'],
    "built_year" => $_POST['built_year'],
    "floor_area" => $_POST['floor_area'],
    "tenure" => $_POST['tenure'],
    "remarks" => $_POST['remarks']
  ]);
?>
