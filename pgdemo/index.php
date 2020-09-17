<?php
    include("response.php");
    $newObj = new Employee();
    $emps = $newObj->getEmployees();
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
	<table id="employee_grid" class="table" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>Name</th>
			<th>Salary</th>
			<th>Age</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($emps as $key => $emp) :?>
		<tr>
			<td><?php echo $emp['employee_name'] ?></td>
			<td><?php echo $emp['employee_salary'] ?></td>
			<td><?php echo $emp['employee_age'] ?></td>
			<td><div class="btn-group" data-toggle="buttons"><a href="#" target="_blank" class="btn btn-warning btn-xs">Edit</a><a href="#" target="_blank" class="btn btn-danger btn-xs">Delete</a><a href="#" target="_blank" class="btn btn-primary btn-xs">View</a></div></td>
		</tr>
	<?php endforeach;?>
	</tbody>
</table>
</body>
</html>
