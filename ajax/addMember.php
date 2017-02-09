<?php
  session_start();

  $member = new stdClass();

  $member->{'member_name'} = $_POST['member_name'];
  $member->{'member_relationship'} = $_POST['member_relationship'];
  $member->{'gender'} = $_POST['gender'];
  $member->{'born_date'} = $_POST['born_date'];
  $member->{'age'} = $_POST['age'];
  $member->{'is_registered'} = $_POST['is_registered'];
  $member->{'arrangement'} = $_POST['arrangement'];

  if (!isset($_SESSION['members'])) {
    $members = array();
  } else {
    $members = $_SESSION['members'];
  }

  foreach ($members as $memberData) {
    if ($member->{'member_name'} == $memberData->{'member_name'}) {
      header ("Location: ../census2.php");
      return;
    }
  }

  $members[] = $member;
  $_SESSION['members'] = $members;
  header ("Location: ../census2.php");

?>
