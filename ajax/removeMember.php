<?php
  if (isset($_GET['member_name'])) {
    session_start();

    $members = $_SESSION['members'];

    foreach ($members as $key => $member) {
      if ($member->{'member_name'} == $_GET['member_name']) {
        unset($members[$key]);

        $_SESSION['members'] = $members; //update members
        echo 1;
        return;
      }
    }
  }
?>
