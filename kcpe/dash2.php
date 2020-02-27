<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>KCPE Online | ADMIN</title>
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
	pointer-events : none;
	cursor : default;
}
</style>

<?php
    $con = mysqli_connect("localhost","root","","onlineexamination");
    
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

            <?php
              $sql = "SELECT gender, count(*) as number FROM user GROUP BY gender";
              $result = mysqli_query($con,$sql);
              
            ?>
            google.charts.load("current", {packages:["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['gender', 'number'],  
                <?php  
                while($row = mysqli_fetch_array($result))  
                {  
                      echo "['".$row["gender"]."', ".$row["number"]."],";  
                }  
                ?>
        ]);

        var options = {
          title: 'Students Gender Ratio',
          slices: {0: {color: '#E62B9C'}, 1:{color: '#0000FF'}},
          is3D: true,
        };
        

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

</head>
<body style="background:#eee">
	<div class="header">
		<div class="row">
			<div class="col-lg-6">
				<span class="logo">Admin Page</span>
			</div>
			<?php
			include_once 'dbConnection_online_examination.php';
			session_start();
			$email = $_SESSION['email'];
			if(!(isset($_SESSION['email']))){
				header("location:index_online_examination.php");
			}
			else{
				$name = $_SESSION['name'];
				include_once 'dbConnection_online_examination.php';
				echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="dash.php" class="log log1">'.$name.'</a>&nbsp;|&nbsp;<a href="logout.php?q=dash.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</button></a></span>';
			}
			?>
		</div>
	</div>
	<div class="bg">
		<div class="row">
	

	<nav class="navbar navbar-default title1">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" area-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a href="dash.php?q=0" class="navbar-brand"><b>Dashboard</b></a>
			</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li <?php if(@$_GET['q']==0) echo 'class="active"';?>><a href="dash.php?q=0"><span class="glyphicon glyphicon-home"></span>&nbsp;Home<span class="sr-only">(current)</span></a></li>
						<li class="dropdown <?php if(@$_GET['q']==4 || @$_GET['q']==5) echo '"active"';?>">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" area-haspopup="true" area-expanded="false"><span class="glyphicon glyphicon-user"></span>&nbsp;Students<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="dash2.php?q=1">View Students</a></li>
								<li><a href="dash.php?q=5">Add Student</a></li>
							</ul>
						<li <?php if(@$_GET['q']==2) echo 'class="active"';?>><a href="dash.php?q=2"><span class="glyphicon glyphicon-stats"></span>&nbsp;Ranking</a></li>
						<li <?php if(@$_GET['q']==3) echo 'class="active"';?>><a href="dash.php?q=3"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Feedback</a></li>
						<li <?php if(@$_GET['q']==6) echo 'class="active"';?>><a href="dash.php?q=6"><span class="glyphicon glyphicon-book"></span>&nbsp;History</a></li>
						<li <?php if(@$_GET['q']==4) echo 'class="active"';?>><a href="dash.php?q=4"><span class="glyphicon glyphicon-book"></span>&nbsp;Add Exam</a></li>


						
				</div>
		</div>
	</nav>
	
	<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">
<!--home start-->

<?php if(@$_GET['q']==0) {

$result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
echo  '<div class="panel"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Topic</b></td><td><b>Total question</b></td><td><b>Marks</b></td><td><b>Time limit</b></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$total = $row['total'];
	$sahi = $row['sahi'];
    $time = $row['time'];
	$eid = $row['eid'];
	echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.'&nbsp;min</td>
	<td><b><a href="update.php?q=rmquiz&eid='.$eid.'" class="pull-right btn sub1" style="margin:0px;background:red"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Remove</b></span></a></b></td></tr>';
}
$c=0;
echo '</table></div>';

}



//ranking start
if(@$_GET['q']== 2) 
{
$q=mysqli_query($con,"SELECT * FROM rank  ORDER BY score DESC " )or die('Error223');
echo  '<div class="panel title">
<table class="table table-striped title1" >
<tr style="color:black"><td><b>Rank</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>School</b></td><td><b>Score</b></td></tr>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$e=$row['email'];
$s=$row['score'];
$q12=mysqli_query($con,"SELECT * FROM user WHERE email='$e' " )or die('Error231');
while($row=mysqli_fetch_array($q12) )
{
$name=$row['name'];
$gender=$row['gender'];
$school=$row['school'];
}
$c++;
echo '<tr><td style="color:#99cc32"><b>'.$c.'</b></td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$school.'</td><td>'.$s.'</td><td>';
}
echo '</table></div>';}

?>


<!--home closed-->
<!--users start-->
<?php if(@$_GET['q']==1) {

$result = mysqli_query($con,"SELECT * FROM user") or die('Error');
echo  '<div class="panel"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>School</b></td><td><b>Email</b></td><td><b>Index Number</b></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
	$mob = $row['index_no'];
	$gender = $row['gender'];
    $email = $row['email'];
	$school = $row['school'];

	echo '<tr><td>'.$c++.'</td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$school.'</td><td>'.$email.'</td><td>'.$mob.'</td>
	<td><a title="Delete User" href="update.php?demail='.$email.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td></tr>';
}
$c=0;
echo '</table></div>';

}?>

<div id="piechart_3d" style="width: 900px; height: 500px;"></div>';

<!--user end-->

<!--feedback start-->
<?php if(@$_GET['q']==3) {
$result = mysqli_query($con,"SELECT * FROM `feedback` ORDER BY `feedback`.`date` DESC") or die('Error');
echo  '<div class="panel"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Subject</b></td><td><b>Email</b></td><td><b>Date</b></td><td><b>Time</b></td><td><b>By</b></td><td></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$date = $row['date'];
	$date= date("d-m-Y",strtotime($date));
	$time = $row['time'];
	$subject = $row['subject'];
	$name = $row['name'];
	$email = $row['email'];
	$id = $row['id'];
	 echo '<tr><td>'.$c++.'</td>';
	echo '<td><a title="Click to open feedback" href="dash.php?q=3&fid='.$id.'">'.$subject.'</a></td><td>'.$email.'</td><td>'.$date.'</td><td>'.$time.'</td><td>'.$name.'</td>
	<td><a title="Open Feedback" href="dash.php?q=3&fid='.$id.'"><b><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></b></a></td>';
	echo '<td><a title="Delete Feedback" href="update.php?fdid='.$id.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>

	</tr>';
}
echo '</table></div>';
}
?>
<!--feedback closed-->

<!--feedback reading portion start-->
<?php if(@$_GET['fid']) {
echo '<br />';
$id=@$_GET['fid'];
$result = mysqli_query($con,"SELECT * FROM feedback WHERE id='$id' ") or die('Error');
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
	$subject = $row['subject'];
	$date = $row['date'];
	$date= date("d-m-Y",strtotime($date));
	$time = $row['time'];
	$feedback = $row['feedback'];
	
echo '<div class="panel"<a title="Back to Archive" href="update.php?q1=2"><b><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span></b></a><h2 style="text-align:center; margin-top:-15px;font-family: "Ubuntu", sans-serif;"><b>'.$subject.'</b></h1>';
 echo '<div class="mCustomScrollbar" data-mcs-theme="dark" style="margin-left:10px;margin-right:10px; max-height:450px; line-height:35px;padding:5px;"><span style="line-height:35px;padding:5px;">-&nbsp;<b>DATE:</b>&nbsp;'.$date.'</span>
<span style="line-height:35px;padding:5px;">&nbsp;<b>Time:</b>&nbsp;'.$time.'</span><span style="line-height:35px;padding:5px;">&nbsp;<b>By:</b>&nbsp;'.$name.'</span><br />'.$feedback.'</div></div>';}
}?>
<!--Feedback reading portion closed-->

<!--add quiz start-->
<?php
if(@$_GET['q']==4 && !(@$_GET['step']) ) {
echo ' 
<div class="row">
<span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Exam Details</b></span><br /><br />
 <div class="col-md-3"></div><div class="col-md-6">   <form class="form-horizontal title1" name="form" action="update.php?q=addquiz"  method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <!--<div class="col-md-12">
  <input id="name" name="name" placeholder="Enter Exam title" class="form-control input-md" type="text">
    
  </div>-->
  <div class="col-md-12">
    <select id="name" name="name" class="form-control input-md" required>
      <option value="">Select Subject</option>
      <option value="Mathematics">Mathematics</option>
      <option value="English">English</option>
      <option value="Kiswahili">Kiswahili</option> 
      <option value="Science">Science</option>
      <option value="Social Studies">Social Studies</option> </select>
  </div>


</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="total"></label>  
  <div class="col-md-12">
  <input id="total" name="total" placeholder="Enter number of questions" class="form-control input-md" type="number" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="right"></label>  
  <div class="col-md-12">
  <input id="right" name="right" placeholder="Enter marks on correct answers" class="form-control input-md" min="0" type="number" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="time"></label>  
  <div class="col-md-12">
  <input id="time" name="time" placeholder="Enter time limit for exam in minutes" class="form-control input-md" min="1" type="number" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="desc"></label>  
  <div class="col-md-12">
  <textarea rows="8" cols="8" name="desc" class="form-control" placeholder="Additional Instructions..."></textarea>  
	</div>
	<label class="col-md-12 control-label" for="desc">(Optional)</label>  

</div>


<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form></div>';



}
?>
<!--add quiz end-->

<!--add quiz step2 start-->
<?php
if(@$_GET['q']==4 && (@$_GET['step'])==2 ) {
echo ' 
<div class="row">
<span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Question Details</b></span><br /><br />
 <div class="col-md-3"></div><div class="col-md-6"><form class="form-horizontal title1" name="form" action="update.php?q=addqns&n='.@$_GET['n'].'&eid='.@$_GET['eid'].'&ch=4 "  method="POST">
<fieldset>
';
 
 for($i=1;$i<=@$_GET['n'];$i++)
 {
echo '<b>Question number&nbsp;'.$i.'&nbsp;:</><br /><!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="qns'.$i.' "></label>  
  <div class="col-md-12">
  <textarea rows="3" cols="5" name="qns'.$i.'" class="form-control" placeholder="Enter question number '.$i.' here..."></textarea>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'1"></label>  
  <div class="col-md-12">
  <input id="'.$i.'1" name="'.$i.'1" placeholder="A" class="form-control input-md" type="text">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'2"></label>  
  <div class="col-md-12">
  <input id="'.$i.'2" name="'.$i.'2" placeholder="B" class="form-control input-md" type="text">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'3"></label>  
  <div class="col-md-12">
  <input id="'.$i.'3" name="'.$i.'3" placeholder="C" class="form-control input-md" type="text">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'4"></label>  
  <div class="col-md-12">
  <input id="'.$i.'4" name="'.$i.'4" placeholder="D" class="form-control input-md" type="text">
    
  </div>
</div>
<br />
<b>Correct answer</b>:<br />
<select id="ans'.$i.'" name="ans'.$i.'" placeholder="Select correct answer " class="form-control input-md" >
   <option value="a">Select answer for question '.$i.'</option>
  <option value="a">A</option>
  <option value="b">B</option>
  <option value="c">C</option>
  <option value="d">D</option> </select><br /><br />'; 
 }
    
echo '<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form></div>';



}
?><!--add quiz step 2 end-->

<!--Add Student-->
<?php
if(@$_GET['q']==5) 
{
		
	echo ' 
<form class="form-horizontal" name="form" action="sign.php?q=dash.php" onSubmit="return validateForm()" method="POST">
<span class="title1" style="margin-left:40%;font-size:30px"><b>Enter Student Details</b></span><br /><br />
 <div class="col-md-3"></div>

 <div class="col-md-6">  
<form class="form-horizontal title1" name="form" action="update.php?q=addquiz"  method="POST">
<fieldset>


  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-12 control-label" for="name"></label>  
    <div class="col-md-12">
    <input id="name" name="name" placeholder="Enter Student name" class="form-control input-md" type="text" minlength="8" maxlength="20" required pattern="[A-Za-z]">
    
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-12 control-label" for="index_no"></label>  
    <div class="col-md-12">
      <input id="index_no" name="index_no" placeholder="Enter Index number" class="form-control input-md" min="0" minlength="8" maxlength="20" type="text" required pattern="([0-1]))">
    
    </div>
  </div>

<div class="form-group">
  <label class="col-md-5 control-label" for="bdate">Enter your date of birth</label> 
  <label class="col-md-12 control-label" for="bdate"></label> 
  <div class="col-md-12">
  <input id="bdate" name="bdate"  class="form-control input-md"  type="date" max="2019-05-19" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="birthcert"></label>  
  <div class="col-md-12">
  <input id="birthcert" name="birthcert" placeholder="Birth Certificate Number" class="form-control input-md" min="0" type="number" minlength="8"   required title="Birth Certificate Should be a minimum of 8 numbers">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="email"></label>  
  <div class="col-md-12">
  <input id="email" name="email" placeholder="Enter Student email" class="form-control input-md" type="email" required>
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Enter gender" class="form-control input-md" required>
   <option value="">Select Gender</option>
  <option value="M">Male</option>
  <option value="F">Female</option> </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="county"></label>  
  <div class="col-md-12">
    <select id="county" name="county" placeholder="Select County" class="form-control input-md" required>
   <option value="">Select County</option>
  <option value="Mombasa">Mombasa</option>
  <option value="Nairobi">Nairobi</option> 
  <option value="Nyeri">Nyeri</option>
  <option value="Murang\'a">Murang\'a</option>
  <option value="Embu">Embu</option> 
  <option value="Meru">Meru</option></select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="school"></label>  
  <div class="col-md-12">
  <input id="school" name="school" placeholder="Enter School Name" class="form-control input-md" type="text" required>
  </div>
</div>



<div class="form-group p-3">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" style="margin-left:45%"  value="Submit" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form>


</div>';
		
}
?>

<!--History-->
<?php if(@$_GET['q']== 6) 
{
$q=mysqli_query($con,"SELECT * FROM history " )or die('Error223');
echo  '<div class="panel title">
<table class="table table-striped title1" >
<tr style="color:black"><td><b>Name</b></td><td><b>School</b></td><td><b>Exam</b></td><td><b>Total Questions</b></td><td><b>Correct Answers</b></td><td><b>Wrong Answers</b></td><td><b>Score</b></td></tr>';
while($row=mysqli_fetch_array($q) )
{
$eid = $row['eid'];
$e=$row['email'];
$s=$row['score'];
$qa=$row['level'];
$w=$row['wrong'];
$r=$row['sahi'];
$q13=mysqli_query($con,"SELECT title FROM quiz WHERE eid='$eid' " )or die('Error21');
while($row=mysqli_fetch_array($q13)){
$title=$row['title'];
}
$q12=mysqli_query($con,"SELECT * FROM user WHERE email='$e' " )or die('Error231');

while($row=mysqli_fetch_array($q12) )
{
$name=$row['name'];
$school=$row['school'];
}
echo '<tr><td style="color:#99cc32"><b>'.$name.'</b></td><td>'.$school.'</td><td>'.$title.'</td><td>'.$qa.'</td><td>'.$r.'</td><td>'.$w.'</td><td>'.$s.'</td><td>';
}
echo '</table></div>';}

?>

</div><!--container closed-->
</div>
</div>

</body>
</html>