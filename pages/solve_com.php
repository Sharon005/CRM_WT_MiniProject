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
		<h3 class="text-center">Solution !!!</h3>
				<?php
				$id = $_GET['id'];
				$sql = mysqli_query($con,"SELECT complaint  FROM complaint WHERE customer_id = '$id'");
				$row = mysqli_num_rows($sql);
				while($row = mysqli_fetch_array($sql)){
					?>
		<form method="post" action="add_solution.php">
			<div class="form-group">
				<input type="text" name="id" class="form-control" readonly="" value="<?php echo $id;  ?>">
			</div>
			<div class="form-group">
				<textarea class="form-control" rows="10" name="solution" placeholder="Solution....."></textarea>
			</div>
			<button type="submit" class="btn btn-dark">Add Solution</button>
		</form>
		<?php }; ?>
	</div>
</div>
</body>
</html>




