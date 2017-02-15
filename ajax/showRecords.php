<?php
  // data to show here
  require "../db.php";

  $sql = "SELECT * FROM application_form ORDER BY is_approve, date_submit, date_approved DESC";

  $applicationDatas = $db->query($sql)->fetchAll();

  foreach($applicationDatas as &$applicationData) {
    $applicationData['date_submit'] = date("M d, Y h:i A", strtotime($applicationData['date_submit']));

    if ($applicationData['date_approved'] != 0) {
        $applicationData['date_approved'] = date("M d, Y h:i A", strtotime($applicationData['date_approved']));
    } else {
      $applicationData['date_approved'] = "Pending";
    }
  }

  echo json_encode(array("data" => $applicationDatas));
?>
