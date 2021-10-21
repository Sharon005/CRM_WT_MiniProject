<?php include ('header.php'); ?>
<?php include ('../includes/app.php');?>
<div class="row justify-content-center">
	<div class="col-sm-9  pb-4">
		<h3 class="text-center">Edit Employee</h3>
		<table class="table table-bordered table-hover text-center table-responsive">
			<thead class="thead-dark">
				<th>Emp_id</th>
				<th>Emp_name</th>
				<th>Emp_contact</th>
				<th>Emp_email</th>
				<th>Emp_Region</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
				$sql = mysqli_query($con,"SELECT * FROM employee");
				while($row = mysqli_fetch_array($sql)){
					echo '
						<tr>
						  <td>'.$row['e_id'].'</td>
						  <td>'.$row['e_name'].'</td>
						  <td>'.$row['e_contact'].'</td>
						  <td>'.$row['e_mail'].'</td>
						  <td>'.$row['e_region'].'</td>
						  <td><a href="delete_emp.php?id='.$row['e_id'].'">Delete</a></td>
						</tr>
					';
				}
				?>
			</tbody>
		</table>
	</div>
</div>
<?php include('../includes/footer.php'); ?>