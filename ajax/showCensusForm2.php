<?php
  require "../db.php";

  $members = $db->select("member", "*", ["application_number" => $_GET['application_number']]);

  foreach ($members as $member) {
    $gender = "";
    if ($member['gender'] == 1) {
      $gender = "Female";
    } else {
      $gender = "Male";
    }

    $member_relationship = "";
    switch ($member['member_relationship']) {
      case 1:
        $member_relationship = "Head";
        break;
      case 2:
        $member_relationship = "Spouse";
        break;
      case 3:
        $member_relationship = "Son";
        break;
      case 4:
        $member_relationship = "Daughter";
        break;
      case 21:
        $member_relationship = "Stepson";
        break;
      case 22:
        $member_relationship = "Stepdaughter";
        break;
      case 23:
        $member_relationship = "Son-in-law";
        break;
      case 24:
        $member_relationship = "Daughter-in-law";
        break;
      case 31:
        $member_relationship = "Grandson";
        break;
      case 32:
        $member_relationship = "Granddaughter";
        break;
      case 33:
        $member_relationship = "Father";
        break;
      case 34:
        $member_relationship = "Mother";
        break;
      case 41:
        $member_relationship = "Brother";
        break;
      case 42:
        $member_relationship = "Sister";
        break;
      case 43:
        $member_relationship = "Uncle";
        break;
      case 44:
        $member_relationship = "Aunt";
        break;
      case 55:
        $member_relationship = "Nephew";
        break;
      case 56:
        $member_relationship = "Niece";
        break;
      case 57:
        $member_relationship = "Other relative";
        break;
      case 58:
        $member_relationship = "Nonrelatie";
        break;
      case 65:
        $member_relationship = "Boarder";
        break;
      case 66:
        $member_relationship = "Domestic Helper";
        break;
    }

    //is registered
    $is_registered = "No";
    if ($member['is_registered'] == 1) {
      $is_registered = "Yes";
    }

    $arrangement = $member['arrangement'];
    switch ($arrangement) {
      case 1:
        $arrangement = "Single";
        break;
      case 2:
        $arrangement = "Married";
        break;
      case 3:
        $arrangement = "Widowed";
        break;
      case 4:
        $arrangement = "Divorced/Separated";
        break;
      case 5:
        $arrangement = "Common-law/Live-in";
        break;
      case 6:
        $arrangement = "Unknown";
        break;
    }

    $citizenship = $member['citizenship'];
    switch ($citizenship) {
      case 1:
        $citizenship = "Yes (Filipino Citizen)";
        break;
      case 2:
        $citizenship = "Yes (Filipino with dual citizenship)";
        $country = $member['country'];
      break;
      case 3:
        $citizenship = "No";
        $country = $member['country'];
        break;
    }

    $ethnicity = $member['ethnicity'];
    switch ($ethnicity) {
      case 1:
        $ethnicity = "O+";
        break;
      case 2:
        $ethnicity = "A+";
        break;
      case 3:
        $ethnicity = "B+";
        break;
      case 4:
        $ethnicity = "AB+";
        break;
      case 5:
        $ethnicity = "O+";
        break;
      case 6:
        $ethnicity = "A+";
        break;
      case 7:
        $ethnicity = "B-";
        break;
      case 8:
        $ethnicity = "AB-";
        break;
    }

    $disability = $member['disability'];
    switch ($disability) {
      case 1:
        $disability = "With Disability";
        break;
      case 2:
        $disability = "Without Disability";
        break;
    }

    $foreign_city = $member['foreign_city'];
    if ($foreign_city == 2) {
      $foreign_city = $member['city_municipality'] . ", " . $member['province'];
    } else {
      $foreign_city = "Same City/Municipality";
    }

    $grade_year = $member['grade_year'];
    $course = "";
    if ($grade_year >= 410) {
      $course = $member['course'];
    }

    switch ($grade_year) {
      case 0:
        $grade_year = "No grade completed";
        break;
      case 10:
        $grade_year = "Preschool";
        break;
      case 210:
        $grade_year = "Grade 1";
        break;
      case 220:
        $grade_year = "Grade 2";
        break;
      case 230:
        $grade_year = "Grade 3";
        break;
      case 240:
        $grade_year = "Grade 4";
        break;
      case 250:
        $grade_year = "Grade 5";
        break;
      case 260:
        $grade_year = "Grade 6";
        break;
      case 270:
        $grade_year = "Grade 7";
        break;
      case 280:
        $grade_year = "Elementary Graduate";
        break;
      case 310:
        $grade_year = "1st Year";
        break;
      case 320:
        $grade_year = "2nd Year";
        break;
      case 330:
        $grade_year = "3rd Year";
        break;
      case 340:
        $grade_year = "4th Year";
        break;
      case 350:
        $grade_year = "High School Graduate";
        break;
      case 410:
        $grade_year = "1st Year Post Secondary";
        break;
      case 420:
        $grade_year = "2nd Year Post Secondary";
        break;
      case 430:
        $grade_year = "3rd Year Post Secondary";
        break;
      case 810:
        $grade_year = "1st Year College";
        break;
      case 820:
        $grade_year = "2nd Year College";
        break;
      case 830:
        $grade_year = "3rd Year College";
        break;
      case 840:
        $grade_year = "4th Year College";
        break;
      case 850:
        $grade_year = "5th Year College";
        break;
      case 860:
        $grade_year = "6th Year College";
        break;
      case 900:
        $grade_year = "Post Baccalaureate";
        break;
    }

    if ($member['overseas'] == 1) {
      $overseas = "Yes";
    } else {
      $overseas = "No";
    }

    echo "
    <div style='padding: 10px;' class='col-md-6'>
      <div class='border-top border-left border-bottom border-right' style='padding: 10px;'>
        <h4><b>" . $member['member_name'] . "</b></h4>
        <p>$member_relationship of the head of the household</p>
        <hr />
        <p>$gender
        <br /><b>Birth Date: </b>" . date("M d, Y", strtotime($member['born_date'])) . "
        <br /><b>Age: </b>" . $member['age'] . "
        <br /><b>Registered with the Civil Registry Office: </b>$is_registered
        <br /><b>$arrangement</b>
        <br /><b>Religion: </b>" . $member['religious'] . "
        <br /><b>Citizenship: </b>$citizenship";

        if (isset($country)) {
          echo "<br /><b>Country: </b>$country";
        }

        echo "
        <br /><b>Blood Type: </b>$ethnicity
        <br />$disability
        </p>
        <p><b>(May 01, 2015) Resides On: </b>$foreign_city</p>
        <p><b>Highest Grade Completed: </b>$grade_year $course</p>
        <p><b>Overseas Worker: </b>$overseas</p>
        <hr />
        <p class='text-left'><b>Difficulty/Problem in:</b></p>
        <ul class='text-left'>";

          $hasDifficulty = false;
          if (isset($member['seeing'])) {
            echo "<li>Seeing, even when wearing eyeglasses</li>";
            $hasDifficulty = true;
          }

          if (isset($member['hearing'])) {
            echo "<li>Hearing, even when using a hearing aid</li>";
            $hasDifficulty = true;
          }

          if (isset($member['walking'])) {
            echo "<li>Walking or climbing steps</li>";
            $hasDifficulty = true;
          }

          if (isset($member['remembering'])) {
            echo "<li>Remembering or concentrating</li>";
            $hasDifficulty = true;
          }

          if (isset($member['self_caring'])) {
            echo "<li>Self-caring (bathing or dressing)</li>";
            $hasDifficulty = true;
          }

          if (isset($member['communicating'])) {
            echo "<li>Communicating using his/her usual language</li>";
            $hasDifficulty = true;
          }

          if (!$hasDifficulty) {
            echo "<li>No Difficulty</li>";
          }

          echo "
        </ul>
      </div>
    </div>";
  }
?>
