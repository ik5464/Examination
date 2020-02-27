<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>KCPE Online</title>
	<link  rel="stylesheet" href="css/bootstrap.min.css"/>
	<link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
	<link rel="stylesheet" href="css/main2.css">
	<link  rel="stylesheet" href="css/font.css">
	<link rel="shortcut icon" href="image/favicon.ico" type="image/ico" />
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
</head>
<body>
	<div class="header">
		<div class="row">
			<div class="col-lg-6">
				<span class="logo">KCPE Online</span>
			</div>
			<div class="control-group">
				<div class="controls">					
					<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in" area-hidden="true"></span>&nbsp;<span class="title1"><b>Login</b></span></a>
					<!--<a href="signup.php" class="pull-right btn sub1"><span class="glyphicon glyphicon-plus-sign" area-hidden="true"></span>&nbsp;<span class="title1"><b>Signup</b></span></a>-->
				</div>
			</div>
	
	<div class="modal fade" id="loginModal">
		<div class="modal-dialog">
			<div class="modal-content title1">
				<div class="modal-header">
					<button class="close" type="button" data-dismiss="modal" area-label="Close"><span area-hidden="true">&times;</span></button>
					<h3 class="modal-title title1"><span style="color:black">Log In</span></h3>
				</div>
					<div class="modal-body">
					<form class="form-horizontal" method="POST" action="login.php?q=index_online_examination.php">
						<fieldset>
							<div class="form-group">
								<label class="col-md-2 control-label" for="index_no"></label>
									<div class="col-md-8">
										<input id="index_no" name="index_no" placeholder="Enter your Index Number" class="form-control input-md" type="number">
									</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label" for="birthcert"></label>
									<div class="col-md-8">
										<input id="birthcert" name="birthcert" placeholder="Enter your Password" class="form-control input-md" type="password">
									</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary" >Login</button>
						</fieldset>
					</form>
						</div>
			</div>
		</div>
	</div>
			
		</div>
	</div>
	
	
	<div class="bg1">
<div class="row">

<div class="col-md-7"></div>

<div class="col-md-4 panel">

<fieldset>	
		<h3>Instructions</h3>
		<ul class = "list-group">
			<li class = "list-group-item">1. Use Your Index Number and your Birth Certificate Number as a password to login.</li>
			<li class = "list-group-item">2. Select the exam you are supposed to take from the list once logged in.</li>
			<li class = "list-group-item">3. Make sure to select an answer for each question. Unanswered questions will be marked as wrong.</li>
			<li class = "list-group-item">4. After completion you will be able to view the results</li>
			<li class = "list-group-item">5. Make sure you answer every question even if you do not know the answer.</li>
			<li class = "list-group-item">6. Your answers are marked according to accuracy. Make sure you select the correct answer.</li>
		</ul>

</fieldset>
</div><!--col-md-6 end-->
</div></div>
</div><!--container end-->

	<div class="row footer">
	<h4 class="footer-header">All Links</h4>
		<hr>
		<div class="col-md-2 box">
		<a href="" target="_blank">KCPE Online</a>
		</div>
		<div class="col-md-2 box">
		<a href=http://www.knec.ac.ke >KNEC Website</a>
		</div>
		<div class="col-md-2 box">
		<a href="#" data-toggle="modal" data-target="#login">Admin</a>
		</div>
		<div class="col-md-2 box">
		<a href="feedback_online_examination.php" target="_blank">Feedback</a>
		</div>
		<div class="col-md-2 box">
		<a href="contactus.php" target="_blank">Contact Us</a>
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
		<p class="copy">Copyright &copy; 2019  <span class="glyphicon glyphicon-heart-empty" style="color:red"></span>KNEC All rights reserved.  | <a href="#">Home</a> | <a href="#">Disclaimer</a>  </p>-->
	</div>
	
	
	
	<div class="modal fade title1" id="login">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span are-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title"><span style="color:#343638">Admin Login</span></h4>
				</div>
				<div class="modal-body title1">
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-8">
							<form action="admin.php?q=index_online_examination.php" method="POST">
								<div class="form-group">
									<input id="uname" name="uname" type="email" placeholder="Admin UserID" class="form-control input-md">
								</div>
								<div class="form-group">
									<input id="password" name="password" type="password" placeholder="Password" class="form-control input-md">
								</div>
								<div class="form-group" align="center">
									<button type="submit" name="login" value="Login" class="btn btn-primary">Login</button>
								</div>
							</form>
						</div>
						<div class="col-md-2">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>	