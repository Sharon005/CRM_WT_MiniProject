<?php include ('header.php'); ?>
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
		<h3 class="text-center">Edit Employee</h3>
				<?php
				$id = $_GET['id'];
				$sql = mysqli_query($con,"SELECT * FROM employee where e_id = '$id'");
				$row = mysqli_fetch_array($sql);			
				?>
		<form method="POST">
			<div class="form-group">
				<label for="e_name"></label>
				<input type="text" name="e_name" required="" class="form-control" value="<?php echo $row['e_name'] ?>">
			</div>
			<div class="form-group">
				<label for="e_contact"></label>
				<input type="text" name="e_contact" required="" class="form-control" value="<?php echo $row['e_contact'] ?>">
			</div>
			<div class="form-group">
				<label for="e_email"></label>
				<input type="email" name="email" required="" class="form-control" value="<?php echo $row['e_mail'] ?>">
			</div>
			<div class="form-group">
				<label for="e_region"></label>
				<input type="text" name="e_region" required="" class="form-control" value="<?php echo $row['e_region'] ?>">
			</div>
			<button type="submit" class="btn btn-dark">UPDATE</button>
		</form>
	</div>
</div>
</body>
</html>


<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	$e_name = mysqli_real_escape_string($con,$_POST['e_name']);
	$e_contact = mysqli_real_escape_string($con,$_POST['e_contact']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$e_region = mysqli_real_escape_string($con,$_POST['e_region']);
	$sql = mysqli_query($con,"
		UPDATE employee SET e_name='$e_name',e_contact = '$e_contact',e_mail = '$email',e_region = '$e_region' where e_id = '$id'");
	if($sql){
		header("location:editemp.php");
	}else{
		echo "Something Wrong".mysqli_error($con);
	}
}

?>