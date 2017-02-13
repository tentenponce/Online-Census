<?php
  require("../db.php");
  $array = array();
  $application_number = $_POST['application_number'];
  $dataselected = $db->select("certification(a)",
  ["[><]geographic_information(b)"=>"application_number",
  "[><]visit(c)"=>"application_number",
  "[><]summary_of_visit(d)"=>"application_number",
  "[><]member(e)"=>"application_number",
  "[><]house(f)"=>"application_number"
],"*",["application_number"=>$application_number]);

  echo json_encode($dataselected);
?>
