<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>
    <!--Admin css-->
    <link rel="stylesheet" href="css/admin.css">

    <!--Bootsrap -->
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
  </nav>   
  
  
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
      
</body>
</html>

