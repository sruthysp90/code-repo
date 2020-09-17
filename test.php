<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form method="post">
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>
<?php
// phpinfo();
if(isset($_POST['submit'])){
	$host        = "host = 127.0.0.1";
   	$port        = "port = 5432";
   	$dbname      = "dbname = company";
   	$credentials = "user = postgres password=root123";
	$con = pg_connect( "$host $port $dbname $credentials");
	
	if(!$con) {
      	echo "Error : Unable to open database\n";
		exit;
   	} else {
      	echo "Opened database successfully\n";
   	}
	
	$sql =<<<EOF
		INSERT INTO employee.developer (id, employee_name, employee_salary, employee_age) VALUES (1, 'Name1', 1000,);
	EOF; 
	 
	$result = pg_query($con,$sql);
	if(!$result) {
      echo pg_last_error($db);
   } else {
      echo "Records created successfully\n";
   }
	pg_close($con);
}
?>