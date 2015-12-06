

<html>
<head>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/respond.js"></script>
<style type="text/css">

   

body {
    background-color: #000000;
}

#wrapper {
	
	 width:1024px;
	 height:auto;
	 padding: 13px;
	 margin-right:auto;
	 margin-left:auto;
	 background-color:#fff;
}



#goback {
	position: relative;
    bottom: 0;
    left: 900px;
    right: 0;
}

</style>
</head>
<?php 

	$fid = $_GET['id'];

?>
<body bgcolor="#e1e1e1">

<div id="wrapper">
	<div class="row">

<center><font face="Andalus" size="5"></font></center>
<br />
<br />
<?php
	session_start();
	$_SESSION['testcomplete'] = 'yes';

	$fname= $_POST['fname'];
	$lname= $_POST['lname'];
	$email= $_POST['email'];
	$start_time=$_POST['start_time'];

	date_default_timezone_set("America/Los_Angeles");

	$PTZ = new DateTimeZone('America/Los_Angeles');
    $dt = new DateTime(date("m/d/Y h:i:sa"),$PTZ);
    $finish_time = $dt->format('m/d/Y h:i:sa'); 

    $ipaddress = $_SERVER["REMOTE_ADDR"];

    $answer1= $_POST['answer_1'];
	$answer2= $_POST['answer_2'];
	$answer3= $_POST['answer_3'];
	$answer4= $_POST['answer_4'];
	$answer5 = $_POST['answer_5'];
	$answer6 = $_POST['answer_6'];
	$answer7 = $_POST['answer_7'];
	$answer8 = $_POST['answer_8'];
	$answer9 = $_POST['answer_9'];
	$answer10 = $_POST['answer_10'];
	$answer11 = $_POST['answer_11'];
	$answer12 = $_POST['answer_12'];

	$answer13 = $_POST['answer_13'];
	$answer14 = $_POST['answer_14'];
	$answer15 = $_POST['answer_15'];
	$answer16 = $_POST['answer_16'];
	$answer17 = $_POST['answer_17'];
	$answer18 = $_POST['answer_18'];
	$answer19 = $_POST['answer_19'];
	$answer20 = $_POST['answer_20'];

	$answer21 = $_POST['answer_21'];
	$answer22 = $_POST['answer_22'];
	$answer23 = $_POST['answer_23'];
	$answer24 = $_POST['answer_24'];
	$answer25 = $_POST['answer_25'];
	$answer26 = $_POST['answer_26'];
	$answer27 = $_POST['answer_27'];
	$answer28 = $_POST['answer_28'];
	$answer29 = $_POST['answer_29'];
	$answer30 = $_POST['answer_30'];

	if ($fid==2){
		$answer31 = $_POST['answer_31'];
	}
	

	$ans_test = $_POST['answer_5'];
	

	$s1=0;
	$s2=0;
	$s3=0;
	$s4=0;
	$s5=0;
	$s6=0;
	$s7=0;
	$s8=0;
	$s9=0;
	$s10=0;

	$s11=0;
	$s12=0;
	$s13=0;
	$s14=0;
	$s15=0;
	$s16=0;
	$s17=0;
	$s18=0;
	$s19=0;
	$s20=0;

	$s21=0;
	$s22=0;
	$s23=0;
	$s24=0;
	$s25=0;
	$s26=0;
	$s27=0;
	$s28=0;
	$s29=0;
	$s30=0;
	$s31=0;

//	if(!empty($_POST['answer_5'])) {
//    foreach($_POST['answer_5'] as $check) {
//            echo $check; //echoes the value set in the HTML form for each checked checkbox.
                         //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                         //in your case, it would echo whatever $row['Report ID'] is equivalent to.
//    		}
//	}

	$score = 0;
	if ($fid==1){
		$ans_2=array("A","B","C","F","G","I");	
		$ans_3=array("B","E","G","H","I");	
		if ($answer1=='B') {$score++;$s1=1;}
		if ($answer2==$ans_2) {$score++;$s2=1;}////////5
		if ($answer3==$ans_3) {$score++;$s3=1;}////////6
		if ($answer4=='C') {$score++;$s4=1;}
		if ($answer5=='A') {$score++;$s5=1;}
		if ($answer6=='C') {$score++;$s6=1;}
		if ($answer7=='B') {$score++;$s7=1;}
		if ($answer8=='B') {$score++;$s8=1;}
		if ($answer9=='D') {$score++;$s9=1;}
		if ($answer10=='A') {$score++;$s10=1;}

		if ($answer11=='B') {$score++;$s11=1;}
		if ($answer12=='B') {$score++;$s12=1;}
		if ($answer13=='A') {$score++;$s13=1;}
		if ($answer14=='A') {$score++;$s14=1;}
		if ($answer15=='A') {$score++;$s15=1;}
		if ($answer16=='B') {$score++;$s16=1;}
		if ($answer17=='B') {$score++;$s17=1;}
		if ($answer18=='E') {$score++;$s18=1;}
		if ($answer19=='H') {$score++;$s19=1;}
		if ($answer20=='J') {$score++;$s20=1;}

		if ($answer21=='D') {$score++;$s21=1;}
		if ($answer22=='G') {$score++;$s22=1;}
		if ($answer23=='E') {$score++;$s23=1;}
		if ($answer24=='A') {$score++;$s24=1;}
		if ($answer25=='C') {$score++;$s25=1;}
		if ($answer26=='F') {$score++;$s26=1;}
		if ($answer27=='A') {$score++;$s27=1;}
		if ($answer28=='B') {$score++;$s28=1;}
		if ($answer29=='H') {$score++;$s29=1;}
		if ($answer30=='B') {$score++;$s30=1;}

		$answer2_string = implode("", $answer2);
		$answer3_string = implode("", $answer3);

		echo "<center><font face='Berlin Sans FB' size='8'>Your Score is <br> $score/30</font></center>";

		$percent = number_format(($score/30),2);

		$con=mysqli_connect("127.0.0.1","root","tiger","quiz");
		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		mysqli_query($con,"INSERT INTO `quiz`.`quiz_1` (`FirstName`, `LastName`, `Percentage`, `Points_Received`, `Points_Available`, 
			`start_time`, `finish_time`, `Email`, `IP_Address`, `Q1`, `Q1_S`, `Q2`, `Q2_S`, `Q3`, `Q3_S`, `Q4`, `Q4_S`, `Q5`, `Q5_S`, `Q6`, `Q6_S`, 
			`Q7`, `Q7_S`, `Q8`, `Q8_S`, `Q9`, `Q9_S`, `Q10`, `Q10_S`, `Q11`, `Q11_S`, `Q12`, `Q12_S`, `Q13`, `Q13_S`, `Q14`, `Q14_S`, `Q15`, `Q15_S`,
			 `Q16`, `Q16_S`, `Q17`, `Q17_S`, `Q18`, `Q18_S`, `Q19`, `Q19_S`, `Q20`, `Q20_S`, `Q21`, `Q21_S`, `Q22`, `Q22_S`, `Q23`, `Q23_S`, `Q24`, 
			 `Q24_S`, `Q25`, `Q25_S`, `Q26`, `Q26_S`, `Q27`, `Q27_S`, `Q28`, `Q28_S`, `Q29`, `Q29_S`, `Q30`, `Q30_S`) 
VALUES ('".$fname."', '".$lname."', '".$percent."', '".$score."', '30', '".$start_time."', '".$finish_time."', '".$email."', '".$ipaddress."', 
	'".$answer1."', '".$s1."', '".$answer2_string."', '".$s2."', '".$answer3_string."', '".$s3."', '".$answer4."', '".$s4."', '".$answer5."', 
	'".$s5."', '".$answer6."', '".$s6."', '".$answer7."', '".$s7."', '".$answer8."', '".$s8."', '".$answer9."', '".$s9."', '".$answer10."', 
	'".$s10."', '".$answer11."', '".$s11."', '".$answer12."', '".$s12."', '".$answer13."', '".$s13."', '".$answer14."', '".$s14."', '".$answer15."', 
	'".$s15."', '".$answer16."', '".$s16."', '".$answer17."', '".$s17."', '".$answer18."', '".$s18."', '".$answer19."', '".$s19."', '".$answer20."', 
	'".$s20."', '".$answer21."', '".$s21."', '".$answer22."', '".$s22."', '".$answer23."', '".$s23."', '".$answer24."', '".$s24."', '".$answer25."', 
	'".$s25."', '".$answer26."', '".$s26."', '".$answer27."', '".$s27."', '".$answer28."', '".$s28."', '".$answer29."', '".$s29."', '".$answer30."', 
	'".$s30."');");

		mysqli_close($con);

	}else if ($fid==2){
		$ans_23=array("B","C","D");	
	//echo "<script type='text/javascript'>alert('$ans_test[0]');</script>";

		if ($answer1=='H') {$score++;$s1=1;}
		if ($answer2=='H') {$score++;$s2=1;}
		if ($answer3=='A') {$score++;$s3=1;}
		if ($answer4=='D') {$score++;$s4=1;}
		if ($answer5=='B') {$score++;$s5=1;}
		if ($answer6=='C') {$score++;$s6=1;}
		if ($answer7=='H') {$score++;$s7=1;}
		if ($answer8=='D') {$score++;$s8=1;}
		if ($answer9=='J') {$score++;$s9=1;}
		if ($answer10=='F') {$score++;$s10=1;}

		if ($answer11=='I') {$score++;$s11=1;}
		if ($answer12=='C') {$score++;$s12=1;}
		if ($answer13=='A') {$score++;$s13=1;}
		if ($answer14=='J') {$score++;$s14=1;}
		if ($answer15=='B') {$score++;$s15=1;}
		if ($answer16=='B') {$score++;$s16=1;}
		if ($answer17=='B') {$score++;$s17=1;}
		if ($answer18=='E') {$score++;$s18=1;}
		if ($answer19=='E') {$score++;$s19=1;}
		if ($answer20=='B') {$score++;$s20=1;}

		if ($answer21=='B') {$score++;$s21=1;}
		if ($answer22=='B') {$score++;$s22=1;}
		//if ($answer23=='BCD') {$score++;}
		if ($answer24=='D') {$score++;$s24=1;}
		if ($answer25=='D') {$score++;$s25=1;}
		if ($answer26=='B') {$score++;$s26=1;}
		if ($answer27=='D') {$score++;$s27=1;}
		if ($answer28=='D') {$score++;$s28=1;}
		if ($answer29=='B') {$score++;$s29=1;}

		if ($answer30=='B') {$score++;$s30=1;}
		if ($answer31=='A') {$score++;$s31=1;}
		if ($_POST['answer_23'] == $ans_23){$score++;$s23=1;}
		$answer23_string = implode("", $answer23);

		echo "<center><font face='Berlin Sans FB' size='8'>Your Score is <br> $score/31</font></center>";

		$percent = number_format(($score/31),2);

		$con=mysqli_connect("127.0.0.1","root","tiger","quiz");
		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		mysqli_query($con,"INSERT INTO `quiz`.`quiz_2` (`FirstName`, `LastName`, `Percentage`, `Points_Received`, `Points_Available`, 
			`start_time`, `finish_time`, `Email`, `IP_Address`, `Q1`, `Q1_S`, `Q2`, `Q2_S`, `Q3`, `Q3_S`, `Q4`, `Q4_S`, `Q5`, `Q5_S`, 
			`Q6`, `Q6_S`, `Q7`, `Q7_S`, `Q8`, `Q8_S`, `Q9`, `Q9_S`, `Q10`, `Q10_S`, `Q11`, `Q11_S`, `Q12`, `Q12_S`, `Q13`, `Q13_S`, 
			`Q14`, `Q14_S`, `Q15`, `Q15_S`, `Q16`, `Q16_S`, `Q17`, `Q17_S`, `Q18`, `Q18_S`, `Q19`, `Q19_S`, `Q20`, `Q20_S`, `Q21`, 
			`Q21_S`, `Q22`, `Q22_S`, `Q23`, `Q23_S`, `Q24`, `Q24_S`, `Q25`, `Q25_S`, `Q26`, `Q26_S`, `Q27`, `Q27_S`, `Q28`, `Q28_S`, 
			`Q29`, `Q29_S`, `Q30`, `Q30_S`, `Q31`, `Q31_S`) 
			VALUES ('".$fname."', '".$lname."', '".$percent."', '".$score."', '31', '".$start_time."', '".$finish_time."', '".$email."', '".
				$ipaddress."', '".$answer1."', '".$s1."', '".$answer2."', '".$s2."', '".$answer3."', '".$s3."', '".$answer4."', '".$s4."', '".
				$answer5."', '".$s5."', '".$answer6."', '".$s6."', '".$answer7."', '".$s7."', '".$answer8."', '".$s8."', '".$answer9."', '".
				$s9."', '".$answer10."', '".$s10."', '".$answer11."', '".$s11."', '".$answer12."', '".$s12."', '".$answer13."', '".$s13."', '".
				$answer14."', '".$s14."', '".$answer15."', '".$s15."', '".$answer16."', '".$s16."', '".$answer17."', '".$s17."', '".$answer18
				."', '".$s18."', '".$answer19."', '".$s19."', '".$answer20."', '".$s20."', '".$answer21."', '".$s21."', '".$answer22."', '"
				.$s22."', '".$answer23_string."', '".$s23."', '".$answer24."', '".$s24."', '".$answer25."', '".$s25."', '".$answer26."', '".$s26
				."', '".$answer27."', '".$s27."', '".$answer28."', '".$s28."', '".$answer29."', '".$s29."', '".$answer30."', '".$s30."', '".
				$answer31."', '".$s31."');");

		mysqli_close($con);
	}else if ($fid==3){	
		$ans_14=array("A","B","C","D","E","F","G");	
		$ans_15=array("H","I","J");
		if ($answer1=='A') {$score++;$s1=1;}
		if ($answer2=='B') {$score++;$s2=1;}
		if ($answer3=='C') {$score++;$s3=1;}
		if ($answer4=='D') {$score++;$s4=1;}
		if ($answer5=='E') {$score++;$s5=1;}
		if ($answer6=='F') {$score++;$s6=1;}
		if ($answer7=='G') {$score++;$s7=1;}
		if ($answer8=='H') {$score++;$s8=1;}
		if ($answer9=='I') {$score++;$s9=1;}
		if ($answer10=='J') {$score++;$s10=1;}

		if ($answer11=='I') {$score++;$s11=1;}
		if ($answer12=='A') {$score++;$s12=1;}
		if ($answer13=='F') {$score++;$s13=1;}
		if ($answer14==$ans_14) {$score++;$s14=1;}
		if ($answer15==$ans_15) {$score++;$s15=1;}
		if ($answer16=='B') {$score++;$s16=1;}
		if ($answer17=='A') {$score++;$s17=1;}
		if ($answer18=='A') {$score++;$s18=1;}
		//if ($answer19=='B') {$score++;$s19=1;}///20
		if ($answer20=='A') {$score++;$s20=1;}///21

		if ($answer21=='A') {$score++;$s21=1;}///22
		if ($answer22=='B') {$score++;$s22=1;}///23
		// if ($answer23=='A') {$score++;$s23=1;}///42
		if ($answer24=='A') {$score++;$s24=1;}///32
		if ($answer25=='B') {$score++;$s25=1;}///33
		if ($answer26=='A') {$score++;$s26=1;}///34
		if ($answer27=='A') {$score++;$s27=1;}///37
		if ($answer28=='A') {$score++;$s28=1;}///38
		//if ($answer29=='B') {$score++;$s29=1;}///41
		if ($answer30=='C') {$score++;$s30=1;}///42

		$answer14_string = implode("", $answer14);
		$answer15_string = implode("", $answer15);

		echo "<center><font face='Berlin Sans FB' size='8'>Your Score is <br> $score/27</font></center>";

		$percent = number_format(($score/27),2);

		$con=mysqli_connect("127.0.0.1","root","tiger","quiz");
		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		mysqli_query($con,"INSERT INTO `quiz`.`quiz_3` (`FirstName`, `LastName`, `Percentage`, `Points_Received`, `Points_Available`, 
			`start_time`, `finish_time`, `Email`, `IP_Address`, `Q1`, `Q1_S`, `Q2`, `Q2_S`, `Q3`, `Q3_S`, `Q4`, `Q4_S`, `Q5`, `Q5_S`, `Q6`, `Q6_S`, 
			`Q7`, `Q7_S`, `Q8`, `Q8_S`, `Q9`, `Q9_S`, `Q10`, `Q10_S`, `Q11`, `Q11_S`, `Q12`, `Q12_S`, `Q13`, `Q13_S`, `Q14`, `Q14_S`, `Q15`, `Q15_S`,
			 `Q16`, `Q16_S`, `Q17`, `Q17_S`, `Q18`, `Q18_S`, `Q19`, `Q19_S`, `Q20`, `Q20_S`, `Q21`, `Q21_S`, `Q22`, `Q22_S`, `Q23`, `Q23_S`, `Q24`, 
			 `Q24_S`, `Q25`, `Q25_S`, `Q26`, `Q26_S`, `Q27`, `Q27_S`) 
VALUES ('".$fname."', '".$lname."', '".$percent."', '".$score."', '27', '".$start_time."', '".$finish_time."', '".$email."', '".$ipaddress."', 
	'".$answer1."', '".$s1."', '".$answer2."', '".$s2."', '".$answer3."', '".$s3."', '".$answer4."', '".$s4."', '".$answer5."', 
	'".$s5."', '".$answer6."', '".$s6."', '".$answer7."', '".$s7."', '".$answer8."', '".$s8."', '".$answer9."', '".$s9."', '".$answer10."', 
	'".$s10."', '".$answer11."', '".$s11."', '".$answer12."', '".$s12."', '".$answer13."', '".$s13."', '".$answer14_string."', '".$s14."', '".$answer15_string."', 
	'".$s15."', '".$answer16."', '".$s16."', '".$answer17."', '".$s17."', '".$answer18."', '".$s18."', '".$answer20."', 
	'".$s20."', '".$answer21."', '".$s21."', '".$answer22."', '".$s22."', '".$answer24."', '".$s24."', '".$answer25."', 
	'".$s25."', '".$answer26."', '".$s26."', '".$answer27."', '".$s27."', '".$answer28."', '".$s28."', '".$answer30."', 
	'".$s30."');
");

		mysqli_close($con);

	}
?>
	
	<script language='javascript'>
	function confirmSubmit(){
			if(confirm('Are you sure?')==true){
					document.location.href = 'index.php';
				}
			}
	</script>

	<button id='goback' class='btn btn-primary btn-lg' onclick='return confirmSubmit()'>Go Back</button>


	</div>
</div><!--- end of wrapper div -->


<footer class="row">
    <div class="footer">
        ©Copyright 2014 My Eye Media | <a href="http://www.myeyemedia.com/main.html">Site Map</a> | <a href="http://www.myeyemedia.com/privacy.html">Privacy Policy</a> | 
        <a href="http://www.myeyemedia.com/terms.html">Terms &amp; Conditions</a> | Site by 2014 summer interns of My Eye Media, LLC.
    </div>
</footer>


</body>
</html>