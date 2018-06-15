<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Application form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

	 <div id = "intro">
					
		<div id = "page Header">
			<a href = "/users/dashboard"><img src = "header.gif" height = "150" width="1300" alt = " " /></a>
         </div>
	<div>

	
	<a class="navbar-brand" href="index.html">Apply</a>
<div class="page-header">
     <h2>Accommodation application process!</h2>
</div>


<?php
error_reporting(E_ALL ^ E_DEPRECATED);
define ('DB_NAME', 'unzadb');
define ('DB_USER', 'root');
define ('DB_PASSWORD', '');
define ('DB_HOST', 'localhost');

$link =mysql_connect(DB_HOST, DB_USER,DB_PASSWORD);
if (!$link){
	die ('Could not connect : '. mysql_error());
}
$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected){
	die ('Can\'t use '. DB_NAME. ':'.mysql_error());
}
echo $_POST['studentId']. ' Successfully submitted your form!';

$value1 = $_POST['last-name'];
$value2 = $_POST['first-name'];
$value3 = $_POST['birth-date'];
$value5 = $_POST['nationality'];
$value6 = $_POST['gender'];
$value66 = $_POST['marital'];
$value7 = $_POST['address'];
$value8 = $_POST['province'];
$value99 = $_POST['email'];
$value10 = $_POST['studentId'];
$value11 = $_POST['year'];
$value12 = $_POST['program'];
$value13 = $_POST['duration'];
$value15 = $_POST['sponsorship'];
$value14 = $_POST['school'];
$value16 = $_POST['medical'];





$sql = "INSERT INTO student_details (student_id,last_name,other_names,date_of_birth ,nationality,gender,marital_status, address,province, email, year_of_study,program_of_study,program_duration,sponsorship,school,medical_condition) 
		VALUES ('$value10','$value1','$value2', '$value3','$value5','$value6' ,'$value66','$value7','$value8','$value99','$value11','$value12','$value13','$value15','$value14','$value16' )";
if (!mysql_query($sql)){
	die ('Error: ' . mysql_error());
}

mysql_close();

?>