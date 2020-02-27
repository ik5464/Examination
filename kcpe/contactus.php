<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>KCPE Online | Contact Us</title>
	<link  rel="stylesheet" href="css/bootstrap.min.css"/>
	<link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
	<link rel="stylesheet" href="css/main2.css">
	<link  rel="stylesheet" href="css/font.css">
	<link rel="shortcut icon" href="image/favicon.ico" type="image/ico" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<style>
body{
	margin:0px;
	padding:0px;
}
.fa-github {
  background: black;
  color: white;
}
</style>
</head>
<body style="background-color:#CECECE">
	
	<div class="header">
		<div class="row">
			<div class="col-lg-6">
				<span class="logo">Contact Us</span>
			</div>
			<div class="control-group">
				<!--<div class="controls">					
					<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in" area-hidden="true"></span>&nbsp;<span class="title1"><b>Login</b></span></a>
					<a href="signup.php" class="pull-right btn sub1"><span class="glyphicon glyphicon-plus-sign" area-hidden="true"></span>&nbsp;<span class="title1"><b>Signup</b></span></a>
				</div>-->
			</div>
	
	
	
	</div>
		<div class="body">
		<h2 style="text-align:center;color:white; font-size:36px">We'd&nbsp;<span class="glyphicon glyphicon-heart-empty"></span> to help!</h2>
		<div class="container">
		<div class="row">
		<div class="col-md-6">
		
		<div class="col-md-12">
		<br/>
		<br/>
		<br/>
		<br/>
			<form class="form-horizontal" name="form" method="POST" action="contact.php?q=contactus.php">
				<fieldset>
					<div class="form-group ">
						<label class="col-md-12 control-label" for="name"></label>
						<div class="col-md-12">
							<input class="form-control input-md" name="name" id="name" placeholder="Your name" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12 control-label" for="email"></label>
						<div class="col-md-12">
							<input class="form-control input-md" name="email" id="email" placeholder="Your email" type="email">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12 control-label" for="message"></label>
						<div class="col-md-12">
							<textarea rows="7" cols="6" class="form-control" name="message" placeholder="Message"></textarea>
						</div>
					</div>
					<div class="form-group "align="center">
						<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			
		</div>
		</div>
		
		<div class="container">
		<div class="row">
		<div class="col-md-6">
		<div class="col-md-10">
			<br/>
			<br/>
			<br/>
			<br/>
			<span class="glyphicon glyphicon-user" style="font-size:22px;color:black">&nbsp;&nbsp;&nbsp;&nbsp;<a href="" style="color:white"  target="_blank" title="">KNEC</a></span>
			<br/><br/><br/>
			<span class="glyphicon glyphicon-home" style="font-size:22px;color:black">&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.knec.ac.ke" target="_blank" style="color:white" title="Kenya National Examinations Council">Visit Our Website</a></span>
			<br/><br/><br/>
			<span class="glyphicon glyphicon-earphone" style="font-size:22px;color:black">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:white">0712345678</span></span>
			<br/><br/><br/>
			<span class="glyphicon glyphicon-envelope" style="font-size:22px;color:black">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:white">helpdesk@knec.ac.ke</span></span>
			<hr>
			
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			<hr>
	

	<div class="container">
  
  
<div class="row footer">
	<h4 class="footer-header">Other Links</h4>
		<hr />
		<div class="col-md-2 box">
		<a href="http://knec.ac.ke" target="_blank">KCPE Online</a>
		</div>
		<div class="col-md-2 box">
		<a href="" ></a>
		</div>
		<div class="col-md-2 box">
		<a href="feedback_online_examination.php" target="_blank">Feedback</a>
		</div>
		<div class="col-md-2 box">
		<a href=""></a>
		</div>
		
		<div class="col-md-2 box">
		<a href="contactus.php" target="_blank" class="disabled">Contact Us</a>
		</div>
		<div id="google_translate_element" class="col-md-2 "></div>
			<script type="text/javascript">
			function googleTranslateElementInit() {
			new google.translate.TranslateElement({pageLanguage: 'en', multilanguagePage: true}, 'google_translate_element');
			}
			</script>
				<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		<br/>
		<br/>
		<br/>
		<br/>
		<p class="copy">Copyright &copy; 2019  <span class="glyphicon glyphicon-hand-right" style="color:red"></span>Ian Kagoiya | All rights reserved.  | <a href="#">Home</a> | <a href="#">Disclaimer</a> | </p>
	</div>
	
	
</body>
</html>