<?php
  if (isset($_GET['application_number'])) {
    require "../db.php";

    $db->delete("application_form", ["application_number" => $_GET['application_number']]);
    $db->delete("certification", ["application_number" => $_GET['application_number']]);
    $db->delete("geographic_information", ["application_number" => $_GET['application_number']]);
    $db->delete("house", ["application_number" => $_GET['application_number']]);
    $db->delete("member", ["application_number" => $_GET['application_number']]);
    $db->delete("summary_of_visit", ["application_number" => $_GET['application_number']]);
    $db->delete("visit", ["application_number" => $_GET['application_number']]);

    echo 1;
  }
?>
