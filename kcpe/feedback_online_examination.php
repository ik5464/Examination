<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>KCPE Online | Feedback</title>
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
<style>
.disabled{
	pointer-events:none;
	cursor:default;
}
</style>
</head>
		<body>
			<div class="row header">
				<div class="col-lg-6">
					<span class="logo">KCPE Online</span>
				</div>
				<div class="col-lg-2"></div>
					<div class="col-lg-4">
						<?php 
							include_once 'dbConnection_online_examination.php';
							session_start();
							if(!isset($_SESSION['email'])){
							echo '<a href="#" class="pull-right btn sub1 title3" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in" area-hidden="true"></span>&nbsp;Login</a>&nbsp;';
							}
							else{
								echo '<a href="logout.php?q=feedback_online_examination.php" class="pull-right sub1 btn title3"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</a>&nbsp;';
							}
						?>
					<a href="index_online_examination.php" class="pull-right btn sub1 title3"><span class="glyphicon glyphicon-home" area-hidden="true"></span>&nbsp;Home</a>&nbsp;
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
								<label class="col-md-2 control-label" for="email"></label>
									<div class="col-md-8">
										<input id="email" name="email" placeholder="Enter your E-mail" class="form-control input-md" type="email">
									</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label" for="password"></label>
									<div class="col-md-8">
										<input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
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
			
			
			<div class="bg1">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-5 panel" style="background-image(image/feedback.jpg); min-height:430px">
						<h2 align="center" style="color:#000066">FEEDBACK/REPORT A PROBLEM</h2>
						<div style="font-size:14px">
							<?php
								if (@$_GET['q'])echo '<span style="font-size:18px"><span class="glyphicon glyphicon-ok" area-hidden="true"></span>&nbsp;'.@$_GET['q'].'</span>';
								else{
									echo'
								<p><h4 align="center" style="color:#000066"><b>Submit your Feedback:</b></h4></p><br/><br/>
									<form role="form" method="POST" action="feed.php?q=feedback_online_examination.php">
									<div class="row">
										<div class="col-md-3"><b>Name:</b><br/><br/><br/><b>Subject:</b></div>
										<div class="col-md-9">
											<div class="form-group">
											<input id="name" name="name" placeholder="Enter your Name" class="form-control input-md" type="text"/><br/>
											<input id="name" name="subject" placeholder="Subject" class="form-control input-md" type="text"/>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3"><b>E-mail Address:</b></div>
										<div class="col-md-9">
											<div class="form-group">
											<input id="email" name="email" placeholder="Enter your E-mail address" class="form-control input-md" type="email"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<textarea rows="6" cols="8" name="feedback" class="form-control" placeholder="Your Feedback here...."></textarea>
									</div>
									<div class="form-group" align="center">
										<input type="submit" name="submit" value="Submit" class="btn btn-primary"/>
									</div>
									</form>';
								}
							?>
						</div>
					</div>
				</div>
			</div>
		
		<div class="row footer">
	<h4 class="footer-header">Other Links</h4>
		<hr />
		<div class="col-md-2 box">
		<a href="http://knec.ac.ke" target="_blank">KNEC Website</a>
		</div>
		<div class="col-md-2 box">
		<a href="#" data-toggle="modal" data-target="#login" class="disabled"></a>
		</div>
		<div class="col-md-2 box">
		<a href="feedback_online_examination.php" target="_blank">Feedback</a>
		</div>
		<div class="col-md-2 box">
		<a href=""></a>
		</div>
		<div class="col-md-2 box">
		<a href="contactus.php" target="_blank">Contact Us</a>
		</div>
		<div id="google_translate_element" class="col-md-2 box"></div>
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
		
		<p class="copy">Copyright &copy; 2019  <span class="glyphicon glyphicon-hand-right" style="color:red"></span>Ian Kagoiya | All rights reserved.  | <a href="#">Home</a> | <a href="#">Disclaimer</a> </p>
	</div>
		
		</body>
	

</html>