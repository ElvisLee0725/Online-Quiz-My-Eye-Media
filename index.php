
<html>
<head>
<title>Quiz</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<style type='text/css'>

body {
	background-color: #000000;
}
#logo{
	position: relative;
	float: left;
	margin-left: 100px;
	margin-bottom: 30px;
	margin-top: 20px;
	width: 300px;
	height: 61px;
}

#wrapper{
	 width: 974px;
     height:auto;
     margin-right:auto;
     margin-left:auto;
     background-color:#fff;
     padding: 20px 0px 10px 0px;
 }

#picture {
	position: relative;
	height:auto;
    margin-right:auto;
    margin-left:auto;
	background: url(http://www.myeyemedia.com/slide-photos/1-t3.jpg);
	height: 235px;
	width: 974px;
}
</style>

<!--Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
<script src="js/respond.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- jQuery UI -->
	<link rel="stylesheet" href="jquery-ui-1.11.0.custom/jquery-ui.min.css">
	<script type="text/javascript" src="jquery-ui-1.11.0.custom/external/jquery/jquery.js"></script>
	<script type="text/javascript" src="jquery-ui-1.11.0.custom/jquery-ui.min.js"></script>
	<script>
  		$(function() {
  			

    		$( "#dialog" ).dialog({
		        autoOpen: false,
		        maxWidth:340,
       		 	maxHeight: 380,
       		    width: 340,
        	    height: 380,
		      show: {
		        effect: "blind",
		        duration: 500
		      },
		      hide: {
		        effect: "fold",
		        duration: 1000
		      }
   		 });
 
	    $( "#opener" ).click(function() {
	      $( "#dialog" ).dialog( "open" );
	    });
	  });
 	 </script>

 <script>
function validateInput(){
	var lastName = document.forms["personal_profile"]["lname"].value;
	var firstName = document.forms["personal_profile"]["fname"].value;
	var email = document.forms["personal_profile"]["email"].value;

	if(lastName == null || lastName == ""){
		alert("Please fill in your last name.");
		return false;
	}
	else if(firstName == null || firstName == ""){
		alert("Please fill in your first name.");
		return false;
	}
	else if(email == null || email ==""){
		alert("Please fill in your email address.");
		return false;
	}

}

</script>

</head>


<body>
<div class="container">
	<header class="row">
		
		<div id="logo">
		<a href="http://www.myeyemedia.com"><img src="http://www.myeyemedia.com/_img/logo.png" alt="MyEyeMedia"></a>
		</div>

	</header>

	<div class="row">
		<div id="picture">
		</div>


		<div id="wrapper">

		<?php
			session_start();
			$_SESSION['testcomplete'] = 'no';

			echo "

			<form action='use.php' method='post' id='userInfo' name='personal_profile' onsubmit='return validateInput()'>

			&nbsp;&nbsp;&nbsp;Last name : <input type='text' name='lname' id='lname' value='' /><br><br/>
			&nbsp;&nbsp;&nbsp;First name : <input type='text' name='fname' id='fname' value='' /><br><br/>
			&nbsp;&nbsp;&nbsp;Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='email' id='email' value='' /></br><br/>

			&nbsp;&nbsp;&nbsp;<select name='quizNum'>
			  <option value='quiz1'>quiz1 audio</option>
			  <option value='quiz2'>quiz2 caption</option>
			  <option value='quiz3'>quiz3 video</option>
			</select>

			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type='submit' value='Start' class='btn btn-primary btn-large'/>
			</form>


			"
		?>


		</div>
	</div>
</div>
	
	<div id="dialog" title="My Eye Media summer interns 2014">
		<img src="img/MEM_Interns.jpg">
		<div>L: Kim Myunggun&nbsp;&nbsp;&nbsp;&nbsp;C: Jack Li&nbsp;&nbsp;&nbsp;&nbsp;R: Elvis Lee</div>
	</div>

<footer class="row">
	<div class="footer">
		©Copyright 2014 My Eye Media | <a href="http://www.myeyemedia.com/main.html">Site Map</a> | <a href="http://www.myeyemedia.com/privacy.html">Privacy Policy</a> | 
  		<a href="http://www.myeyemedia.com/terms.html">Terms &amp; Conditions</a> | <a href="#" id="opener">Site by 2014 summer interns of My Eye Media, LLC.</a>
		
	</div>
</footer>

	

</body>
</html>