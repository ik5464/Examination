<?php
include_once 'dbConnection_online_examination.php';
ob_start();
$name = $_POST['name'];
$name = ucwords(strtolower($name));
$index_no = $_POST['index_no'];
$bdate = $_POST['bdate'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$school = $_POST['school'];
$county = $_POST['county'];
$birthcert = $_POST['birthcert'];
$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));
$index_no = stripslashes($index_no);
$index_no = addslashes($index_no);
$gender = stripslashes($gender);
$gender = addslashes($gender);
$email = stripslashes($email);
$email = addslashes($email);
$school = stripslashes($school);
$school = addslashes($school);
$county = stripslashes($county);
$county = addslashes($county);
$birthcert = stripslashes($birthcert);
$birthcert = addslashes($birthcert);
$birthcert = hash('sha512',$birthcert);

$q3 = mysqli_query($con,"INSERT INTO user VALUES ('$name','$index_no','$bdate','$gender','$school','$email','$county', '$birthcert')");
if($q3){
	session_start();
	$_SESSION["email"] = $email;
	$_SESSION["name"] = $name;
	
	header("location:dash.php?q=1");
}
else{
header("location:signup.php?q7=Email already registered!!");
}
ob_end_flush();
?>