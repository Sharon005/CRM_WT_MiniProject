<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="row justify-content-center">
	<div class="col-sm-9  pb-4">
		<h3 class="text-center">Solve Complaint</h3>
		<table class="table table-bordered table-hover text-center table-responsive">
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



