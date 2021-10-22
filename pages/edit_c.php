<?php include ('header.php'); ?>
<?php
$id = $_GET['id'];
$sql = mysqli_query($con,"SELECT * FROM customer where c_id = '$id'");
while($row = mysqli_fetch_array($sql)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<div class="row justify-content-center">
	<div class="col-sm-9  pb-4">
		<h3 class="text-center">Edit Customer</h3>
		<form method="POST" action="edit_cum.php">
			<div class="form-group">
				<label for="c_id"></label>
				<input type="text" name="c_id" required="" readonly="" class="form-control" value="<?php echo $row['c_id'];?>">
			</div>
			<div class="form-group">
				<label for="c_name"></label>
				<input type="text" name="c_name" required="" placeholder="Enter Customer Name" class="form-control" value="<?php echo $row['c_name'];?>">
			</div>
			<div class="form-group">
				<label for="c_contact"></label>
				<input type="text" name="c_contact" required="" placeholder="Enter Contact " class="form-control" value="<?php echo $row['c_contact']; ?>">
			</div>
			<div class="form-group">
				<label for="c_email"></label>
				<input type="text" name="c_email" required="" placeholder="Enter Email Id" class="form-control"  value="<?php echo $row['c_email']; ?>">
			</div>
			<div class="form-group">
				<label for="c_age"></label>
				<input type="date" name="c_age" required="" placeholder="Enter Date of Birth" class="form-control"  value="<?php echo $row['c_age']; ?>">
			</div>
			<div class="form-group">
				<select name="c_gender" class="form-control">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
			</div>
			<div class="form-group">
				<select name="c_business" class="form-control" required="">
					<option>Select Business</option>
					<option value="No">No</option>
					<option value="Yes">Yes</option>
				</select>
			</div>
			<div class="form-group">
				<select name="c_type" class="form-control">
					<option>Business Type</option>
					<option value="no">No Business</option>
					<option value="small">Small</option>
					<option value="Medium">Medium</option>
					<option value="Large">Large</option>
				</select>
			</div>
			<div class="form-group">
				<input type="text" name="c_region" class="form-control" placeholder="Region" required=""  value="<?php echo $row['c_region']; ?>">
			</div>
			<div class="form-group">
				<select name="c_plan" class="form-control">
					<option>Select Plan</option>
					<option value="Fast Speed internet">Fast Speed Internet</option>
					<option value="ultra 600">Ultra 600</option>
					<option value="Turbo 1mbp SME">Turbo 1mbp SME</option>
				</select>
			</div>
			<button type="submit" class="btn btn-success">Create</button>
		</form>
	<?php }?>
	</div>
</div>
</body>
</html>
