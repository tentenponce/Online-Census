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
  $member->{'religious'} = $_POST['religious'];
  $member->{'citizenship'} = $_POST['citizenship'];
  $member->{'country'} = $_POST['country'];
  $member->{'ethnicity'} = $_POST['ethnicity'];
  $member->{'disability'} = $_POST['disability'];
  $member->{'seeing'} = $_POST['seeing'];
  $member->{'hearing'} = $_POST['hearing'];
  $member->{'walking'} = $_POST['walking'];
  $member->{'remembering'} = $_POST['remembering'];
  $member->{'self_caring'} = $_POST['self_caring'];
  $member->{'communicating'} = $_POST['communicating'];
  $member->{'foreign_city'} = $_POST['foreign_city'];
  $member->{'province'} = $_POST['province'];
  $member->{'city_municipality'} = $_POST['city_municipality'];
  $member->{'grade_year'} = $_POST['grade_year'];
  $member->{'course'} = $_POST['course'];
  $member->{'overseas'} = $_POST['overseas'];

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
