<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Employee </title>

        <link rel="stylesheet" href="./css/employee.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="./emloyee.html">Employee Dashboard</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              
                <form class="d-flex">
                  <button class="btn btn-outline-success" type="submit">Logout</button>
                </form>
              </div>
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
                <h3>View Complaints</h3> <br>
                <table class="table table-bordered table-hover table-responsive form ">
                    <thead class="thead-dark">
                        <th>complaint_id</th>
                        <th>complaint_name</th>
                        <th>customer_contact</th>
                        <th>customer_email</th>
                        <th>customer_Region</th>
                    </thead>
                </table>
            </div>
        </div>

    </body>
</html>

<?php include ('header.php'); ?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$e_name = mysqli_real_escape_string($con,$_POST['e_name']);
	$e_contact = mysqli_real_escape_string($con,$_POST['e_contact']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$e_region = mysqli_real_escape_string($con,$_POST['e_region']);
	$sql = mysqli_query($con,"INSERT INTO employee(e_name,e_contact,e_mail,e_region)VALUES('$e_name','$e_contact','$email','$e_region')");
	if($sql){
		echo "<h2 style='margin:3% 0% 0% 15%;color:green;'>Successfully Added...</h2>";
	}else{
		echo "Error: ".mysqli_error($con);
		echo "<script type='text/javascript'>alert('Something Wrong');</script>";
	}
}

?>