<?php
  // data to show here
  require "../db.php";

  $applicationDatas = $db->select("application_form", "*");

  echo json_encode(array("data" => $applicationDatas));
?>
