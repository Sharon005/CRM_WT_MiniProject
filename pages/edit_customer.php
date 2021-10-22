<?php include ('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
			*{
		margin: 0%;
		padding: 0%;
		margin: 0%;
	}

	.v-nav{
		background-color: rgb(55, 54, 56);
		width: 28%;
		height: 100vh;
	}

	#b1{
		background-color: rgb(130, 34, 219);
		width: 5cm;
		text-align: left;
		padding-top: 0.6cm;
		padding-bottom: 0.6cm;
		
	}

	.create-button {
	margin-top: 25px;
	}

	.row {
	background-color: #a7c1cc;
	}

	*{
	margin: 0%;
	padding: 0%;
	}

	.v-nav{
	background-color: rgb(87, 87, 87);
	width: 30%;
	height: 100vh;
	}

	#b1{
	background-color: blueviolet;
	width: 5cm;
	text-align: left;
	padding-top: 0.5cm;
	padding-bottom: 0.5cm;
	
	}
	.form{
	margin-left: -5cm;
	}

	input[type="text"],
	select,
	textarea {
	width: 15cm;
	padding: 10px;
	border: 1px solid #ccc;
	border-radius: 4px;
	}

	#table{
		margin-left: -7cm;
		border: 3px solid;
		background-color: lightgrey;
	}

		
		</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Admin Dashboard</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			
			<form class="d-flex">
				<button class="btn btn-outline-success" type="submit">Logout</button>
			</form>
			</div>
  	</nav>
	<div class="row">
		<div class="col">
			<div class="v-nav">
				<ul class="nav flex-column">
					<li class="nav-item">
						<div class="btn-group">
							<button id="b1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
								Plans
							</button>
							<span class="visually-hidden">Toggle Dropdown</span>
							<ul class="dropdown-menu dropdown-menu-dark">
								<li><a class="dropdown-item" href="add_plan.php">Add Plans</a></li>
								<li><a class="dropdown-item" href="plan_edit.php">Edit Plans</a></li>
								<li><a class="dropdown-item" href="plan_view.php">View Plans</a></li>
								<li><a class="dropdown-item" href="plan_delete.php">Delete Plans</a></li>
							</ul>
						</div>
					</li>
					<br>

					<li class="nav-item">
						<div class="btn-group ">
							<button id="b1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
								Employees
							</button>
							<ul class="dropdown-menu dropdown-menu-dark">
								<li><a class="dropdown-item" href="add_employee.php">Add Employee</a></li>
								<li><a class="dropdown-item" href="viewemp.php">View Employee</a></li>
								<li><a class="dropdown-item" href="editemp.php">Edit Employee</a></li>
								<li><a class="dropdown-item" href="delete_emp.php">Delete Employee</a></li>
							</ul>
						</div>
					</li>
					<br>

					<li class="nav-item">
						<div class="btn-group">
							<button id="b1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
								Customers
							</button>
							<ul class="dropdown-menu dropdown-menu-dark">
								<li><a class="dropdown-item" href="add_customer.php">Add Customers</a></li>
								<li><a class="dropdown-item" href="view_customer.php">View Customers</a></li>
								<li><a class="dropdown-item" href="edit_customer.php">Edit Customers</a></li>
								<li><a class="dropdown-item" href="delete_customer.php">Delete Customers</a></li>
							</ul>
						</div>
					</li>

					<br>
					<li class="nav-item">
						<div class="btn-group">
							<button id="b1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
								Complaints
							</button>
							<ul class="dropdown-menu dropdown-menu-dark">
								<li><a class="dropdown-item" href="add_complaint.php">Add Complaints</a></li>
								<li><a class="dropdown-item" href="view_complaint.php">View Complaints</a></li>
								<li><a class="dropdown-item" href="solve_complaint.php">Solve Complaints</a></li>
							</ul>
						</div>
					</li>
					</ul>
			</div>
		</div>
		<div class="col">
		<h3 class="text-left">Edit Customer</h3> <br>
		<table id="table" class="table table-bordered table-hover text-center table-responsive">
			<thead class="thead-dark">
				<th>ID</th>
				<th>Name</th>
				<th>Cotact</th>
				<th>Age</th>
				<th>Gender</th>
				<th>Business</th>
				<th>Type</th>
				<th>Region</th>
				<th>Plan</th>
				<th>Edit</th>
			</thead>
			<tbody>
				<?php
				$sql = mysqli_query($con,"SELECT * FROM customer");
				while($row = mysqli_fetch_array($sql)){
					echo '
						<tr>
						  <td>'.$row['c_id'].'</td>
						  <td>'.$row['c_name'].'</td>
						  <td>'.$row['c_contact'].'</td>
						  <td>'.$row['c_age'].'</td>
						  <td>'.$row['c_gender'].'</td>
						  <td>'.$row['c_business'].'</td>
						  <td>'.$row['c_type'].'</td>
						  <td>'.$row['c_region'].'</td>
						  <td>'.$row['c_plan'].'</td>
						  <td><a href="edit_c.php?id='.$row['c_id'].'">Edit</a></td>
						</tr>
					';
				}
				?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$c_name = mysqli_real_escape_string($con,$_POST['c_name']);
	$c_contact = mysqli_real_escape_string($con,$_POST['c_contact']);
	$c_email = mysqli_real_escape_string($con,$_POST['c_email']);
	$c_age = mysqli_real_escape_string($con,$_POST['c_age']);
	$gender = $_POST['gender'];
	$business = $_POST['c_business'];
	$type = $_POST['c_type'];
	$c_region = mysqli_real_escape_string($con,$_POST['c_region']);
	$sql = mysqli_query($con,"INSERT INTO customer(c_name,c_contact,c_email,c_age,c_gender,c_business,c_type,c_plan)
		VALUES('$c_name','$c_contact','$c_email','$c_age','$gender','$business','$type','$c_region')");
	if($sql){
		echo "<h3 style='color:green;'>Customer Addedc.</h3>";
	}else{
		echo "<h3 style='color:red;'>Failed !!..</h3>";
	}
	
}
?>