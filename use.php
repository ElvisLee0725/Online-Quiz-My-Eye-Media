
<html>
<head>
<style type='text/css'>

</style>
</head>

<body>

<?php
	
	$email=$_POST['email'];
	$quizNum=$_POST['quizNum'];

	$DB="quiz";

	mysql_connect("127.0.0.1","root","tiger") or die(mysql_error());
	mysql_select_db($DB) or die(mysql_error());


	if($_POST['quizNum']=='quiz1'){

		$query="select email from quiz_1 where email='{$email}'";
		$result=mysql_query($query);

		if(mysql_num_rows($result)==0)
		{
			header('Location: 
			quiz_1.php?lname='.$_POST['lname'].'&fname='.$_POST['fname'].'&email='.$_POST['email']);
			exit;
		}
		else
		{
			echo "<script language='javascript'>
			if(confirm('you already took the test')==true){
					document.location.href = 'index.php';
				}
					</script>";
		}

	}

	else if($_POST['quizNum']=='quiz2'){

		$query="select email from quiz_2 where email='{$email}'";
		$result=mysql_query($query);

		if(mysql_num_rows($result)==0)
		{
			header('Location: 
			quiz_2.php?lname='.$_POST['lname'].'&fname='.$_POST['fname'].'&email='.$_POST['email']);
			exit;
		}
		else
		{
			echo "<script language='javascript'>
			if(confirm('you already took the test')==true){
					document.location.href = 'index.php';
				}
					</script>";
		}

	}

	else if($_POST['quizNum']=='quiz3'){

		$query="select email from quiz_3 where email='{$email}'";
		$result=mysql_query($query);

		if(mysql_num_rows($result)==0)
		{
			header('Location: 
			quiz_3.php?lname='.$_POST['lname'].'&fname='.$_POST['fname'].'&email='.$_POST['email']);
			exit;
		}
		else
		{
			echo "<script language='javascript'>
			if(confirm('you already took the test')==true){
					document.location.href = 'index.php';
				}
					</script>";
		}

	}


?>

</body>
</html>