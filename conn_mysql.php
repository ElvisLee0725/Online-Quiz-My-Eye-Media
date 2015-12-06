<html>
<head>
</head>
<body>

<?php 

	echo "Hello PHP and MySQL";
	echo "<br/>";

$con=mysqli_connect("127.0.0.1","root","swordfish","test");  //localhost is using 3333 port, so we use 127.0.0.1
//account, password and database name(test).

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($con,"INSERT INTO test.PHP_SQL (FirstName, LastName)
VALUES ('Elvis','Lee')");
//PHP_SQL is the table

mysqli_query($con,"INSERT INTO test.PHP_SQL (FirstName, LastName)
VALUES ('Toby', 'Quagmire')");

mysqli_close($con);



?>

</body>
</html>