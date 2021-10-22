<?php include ('header.php'); ?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$p_name = mysqli_real_escape_string($con,$_POST['p_name']);
	$p_speed = mysqli_real_escape_string($con,$_POST['p_speed']);
	$p_cost = mysqli_real_escape_string($con,$_POST['p_cost']);
	$p_duration = mysqli_real_escape_string($con,$_POST['p_duration']);
	$sql = mysqli_query($con,"INSERT INTO plan(p_name,p_speed,p_cost,p_duration)VALUES('$p_name','$p_speed','$p_cost','$p_duration')");
	
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/add_plan.css">
        <title>Add Plan</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
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
                    <h3>Create Plan</h3> <br>
                    <div class="form">
                        <form id = "create_plan_form" action="./add_plan.php" method="POST">
                            <div class="form-group">
                                <label for="p_name">Plan Name</label>
                                <input type="text" name="p_name" required="" placeholder="Enter Plan Name" class="form-control" id="form_plan_name">
                                <span class="error_form" id="plan_name_error_message"></span>
                            </div>
                            <div class="form-group">
                                <label for="p_speed">Speed Limits</label>
                                <input type="text" name="p_speed" required="" placeholder="Enter Speed Limits" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="p_cost">Cost</label>
                                <input type="text" name="p_cost" required="" placeholder="Enter Cost" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="p_duration">Duration</label>
                                <input type="text" name="p_duration" required="" placeholder="Enter Duration in Days" class="form-control">
                            </div>
                            <div class="create-button">
                                <button type="submit" class="btn btn-success">Create</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
                <script type="text/javascript">
                    $(function(){
                        $('#plan_name_error_message').hide();

                        var error_pname = false;

                        $("#form_plan_name").focusout(function(){
                            check_planName();
                        });

                        function check_planName(){
                            var pattern = /^[a-zA-Z]*$/;
                            var pname = $("#form_plan_name").val()
                            if (pattern.test(pname) && pname!==''){
                                $('#plan_name_error_message').hide();
                                $("#form_plan_name").css("border-bottom", "2px solid #34F458");
                            } else {
                                $('#plan_name_error_message').html("Should contain only Characters");
                                $('#plan_name_error_message').show();
                                $("#form_plan_name").css("border-bottom", "2px solid #F70A0A");
                                error_pname = true;
                            }
                        }

                        $("#create_plan_form").submit(function(){
                            error_pname = false;

                            check_planName();

                            if(error_pname == false){
                                alert("Plan Successfully Created");
                                return true;
                            }else{
                                alert("Please Fill Form Correctly");
                                return false;
                            }
                        });

                    });
                </script>
                
            
    </body>
</html>
