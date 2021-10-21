<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Complaint</title>

        <link rel="stylesheet" href="css/add_complaint.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
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
                                    <li><a class="dropdown-item" href="add_plan.html">Add Plans</a></li>
                                    <li><a class="dropdown-item" href="">Delete Plans</a></li>
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
                                    <li><a class="dropdown-item" href="add_employee.html">Add Employee</a></li>
                                    <li><a class="dropdown-item" href="view_emplyee.html">View Employee</a></li>
                                    <li><a class="dropdown-item" href="#">Edit Employee</a></li>
                                    <li><a class="dropdown-item" href="#">Delete Employee</a></li>
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
                                    <li><a class="dropdown-item" href="add_customer.html">Add Customers</a></li>
                                    <li><a class="dropdown-item" href="#">View Customers</a></li>
                                    <li><a class="dropdown-item" href="#">Edit Customers</a></li>
                                    <li><a class="dropdown-item" href="#">Delete Customers</a></li>
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
                                  <li><a class="dropdown-item" href="add_complaint.html">Add Complaints</a></li>
                                  <li><a class="dropdown-item" href="#">View Complaints</a></li>
                                  <li><a class="dropdown-item" href="#">Edit Complaints</a></li>
                                  <li><a class="dropdown-item" href="#">Delete Complaints</a></li>
                                </ul>
                            </div>
                        </li>
                      </ul>
                </div>
            </div>

            <div class="col">
                <h3>Add Complaint</h3> <br>
                <div class="form">
                    <form method="POST">
                        <div class="form-group">
                            <select id="box" name="cm_id" class="form-control" required="">
                                <option>Select Customer Id</option>
                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="p_name"></label>
                            <textarea id="box" class="form-control" rows="8" name="cm_name" placeholder="Write your Complaint..." required=""></textarea>
                        </div>
                        <div class="form-group select_date">
                            <input id="box" type="date" name="cm_date" required="" class="form-control">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success">Add Complaint</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div> 
        
        <?php include ('../includes/app.php');?>
        <?php include('../includes/footer.php'); ?>
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $cm_id = $_POST['cm_id'];
            $cm_name = mysqli_real_escape_string($con,$_POST['cm_name']);
            $cm_date = mysqli_real_escape_string($con,$_POST['cm_date']);
            $solution = "Unsolverd";
            $sql = mysqli_query($con,"INSERT INTO complaint(customer_id,complaint,com_date,com_solution)VALUES('$cm_id','$cm_name','$cm_date','$solution')");
            if($sql){
                echo "<h2 style='margin:3% 0% 0% 15%;color:green;'>Complaint Successfully Added...</h2>";
            }else{
                echo "Error: ".mysqli_error($con);
                echo "<script type='text/javascript'>alert('Something Wrong');</script>";
            }
        }

        ?>


    </body>
</html>