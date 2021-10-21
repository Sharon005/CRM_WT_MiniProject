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
		<h3 class="text-center">View Customer</h3>
		<table class="table table-bordered table-hover text-center table-responsive">
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