<?php include ('header.php'); ?>
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
		<h3 class="text-center">View Complaint</h3>
		<table class="table table-bordered table-hover text-center">
			<thead class="thead-dark">
				<th>Customer_ID</th>
				<th>Customer_Name</th>
				<th>Complaint</th>
				<th>Date</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
				$sql = mysqli_query($con,'SELECT customer.c_name,complaint.customer_id,complaint.complaint,complaint.com_date,complaint.com_solution FROM complaint	INNER JOIN customer on complaint.customer_id = customer.c_id');
				$row = mysqli_num_rows($sql);
				while($row = mysqli_fetch_array($sql)){
					echo '
						<tr>
						  <td>'.$row['customer_id'].'</td>
						  <td>'.$row['c_name'].'</td>
						  <td>'.$row['complaint'].'</td>
						  <td>'.$row['com_date'].'</td>
						  <td>'.$row['com_solution'].'</td>
						</tr>
					';
				}
				?>
			</tbody>
		</table>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>




