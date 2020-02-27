<?php
session_start();
if(isset($_SESSION["email"])){
	session_destroy();
}
include_once 'dbConnection_online_examination.php';
$ref = @$_GET['q'];
$index_no = $_POST['index_no'];
$birthcert = $_POST['birthcert'];

$index_no = stripslashes($index_no);
$index_no = addslashes($index_no);
$birthcert = stripslashes($birthcert);
$birthcert = addslashes($birthcert);
$birthcert = hash('sha512',$birthcert);

$result = mysqli_query($con,"SELECT * FROM user WHERE index_no = '$index_no' and birthcert = '$birthcert'") or die('Error');
$count = mysqli_num_rows($result);
if($count>=1){
	while($row = mysqli_fetch_array($result)){
		$name = $row['name'];
		$email = $row['email'];
	}
	$_SESSION["name"] = $name;
	$_SESSION["email"] = $email;
	header("location:account.php?q=1");
}
else
	header("location:$ref?w=Wrong Username or Password");
?>