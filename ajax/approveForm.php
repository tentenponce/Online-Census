<?php
  if (isset($_GET['application_number'])) {
    require "../db.php";

    date_default_timezone_set('Asia/Manila');
    $dateToday = date('Y-m-d H:i:s');

    $db->update("application_form", ["is_approve" => 1, "date_approved" => $dateToday], ["application_number" => $_GET['application_number']]);

    echo 1;
  }
?>
