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

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script></head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Employee Dashboard</a>
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
								Complaints
							</button>
							<ul class="dropdown-menu dropdown-menu-dark">
								<li><a class="dropdown-item" href="view_comp_ep.php">View Complaints</a></li>
								<li><a class="dropdown-item" href="solve_comp_rp.php">Solve Complaints</a></li>
							</ul>
						</div>
					</li>
					</ul>
			</div>
		</div>
	<div class="col">
		<h3 class="text-left">Solve Complaint</h3> <br>
		<table id="table" class="table table-bordered table-hover text-center table-responsive">
			<thead class="thead-dark">
				<th>Customer_ID</th>
				<th>Customer_Name</th>
				<th>Complaint</th>
				<th>Date</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
				$sql = mysqli_query($con,"SELECT customer.c_name,complaint.customer_id,complaint.complaint,complaint.com_date FROM complaint	INNER JOIN customer on complaint.customer_id = customer.c_id");
				$row = mysqli_num_rows($sql);
				while($row = mysqli_fetch_array($sql)){
					echo '
						<tr>
						  <td>'.$row['customer_id'].'</td>
						  <td>'.$row['c_name'].'</td>
						  <td>'.$row['complaint'].'</td>
						  <td>'.$row['com_date'].'</td>
						  <td><a href="solve_com.php?id='.$row['customer_id'].'">Solve</a></td>
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



