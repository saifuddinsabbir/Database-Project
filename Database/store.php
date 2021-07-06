<?php

// var_dump($_POST);

// session_start();

include 'config.php';

if($conn -> connect_error){
	echo "Connection Failed";
}
else {
	// echo "Connection Successful";
}

$Name = $_POST["name"];
$Designation = $_POST["designation"];
$Working_unit = $_POST["working_unit"];
$Permanent = $_POST["permanent"];
$National_id = $_POST["national_id"];
$Number = $_POST["number"];
$Mail = $_POST["mail"];
$Spouse_name = $_POST["spouse_name"];
$Child_1_name = $_POST["child_1_name"];
$Child_2_name = $_POST["chile_2_name"];
$Noc_version = $_POST["noc_version"];
$Relation = $_POST["relation"];
$Child_1 = $_POST["child_1"];
$Child_2= $_POST["child_2"];
$Child_1_age = $_POST["child_1_age"];
$Child_2_age = $_POST["child_2_age"];
$Image = $_POST["image"];

$query = "INSERT INTO applicant (name, designation, working_unit, permanent, national_id, number, mail, spouse_name, child_1_name, chile_2_name, noc_version, relation, child_1, child_2, child_1_age, child_2_age, image) VALUES (\"$Name\", \"$Designation\", \"$Working_unit\", \"$Permanent\",
	\"$National_id\", \"$Number\", \"$Mail\", \"$Spouse_name\", \"$Child_1_name\", \"$Child_2_name\", \"$Noc_version\", \"$Relation\", \"$Child_1\", \"$Child_2\", \"$Child_1_age,\", \"$Child_2_age\", \"$Image\")";

$conn -> query($query);

// header("Location: application_form.php?success=true");
?>