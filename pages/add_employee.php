<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/add_employee.css">
        <title>Add Plan</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="fade-in" id="mydiv">

            <button id="mybtn">Hide</button>
            
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
                        <h3>Create Plan</h3> <br>
                        <div class="form">
                            <form id = "add_employee_form" method="POST">
                                <div class="form-group">
                                    <label for="p_name">First Name</label>
                                    <input type="text" name="p_name" required="" placeholder="Enter First Name" class="form-control" id="form_fname">
                                    <span class="error_form" id="fname_error_message"></span>
                                </div>
                                <div class="form-group">
                                    <label for="p_speed">Last Name</label>
                                    <input type="text" name="p_speed" required="" placeholder="Enter Last Name" class="form-control" id="form_lname">
                                    <span class="error_form" id="lname_error_message"></span>
                                </div>
                                <div class="form-group">
                                    <label for="p_cost">Email</label>
                                    <input type="text" name="p_cost" required="" placeholder="Enter Email Id" class="form-control" id="form_email">
                                    <span class="error_form" id="email_error_message"></span>
                                </div>

                                <div class="form-group">
                                    <label>Choose State</label>
                                    <select class="form-control" onchange="myfun(this.value)">
                                        <option> Select State </option>
                                        <option> Rajasthan </option>
                                        <option> Madhya Pradesh </option>
                                        <option> Maharashtra </option>
                                        <option> Uttar Pradesh </option>
                                        <option> Gujarat </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Choose City</label>
                                    <select class="form-control" id="city">
                                        <option> Select City  </option>
                                    </select>
                                </div>
                                <div class="create-button">
                                    <button type="submit" class="btn btn-success">Add Employee</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                        
                </div>

                <script type="text/javascript">
                    $(function(){
                        $('#fname_error_message').hide();
                        $('#lname_error_message').hide();
                        $('#email_error_message').hide();
                        $('#region_name_error_message').hide();
    
                        var error_fname = false;
                        var error_lname = false;
                        var error_email = false;
                        var error_rname = false;
    
                        $("#form_fname").focusout(function(){
                            check_fName();
                        });
    
                        $("#form_lname").focusout(function(){
                            check_lName();
                        });
    
                        $("#form_email").focusout(function(){
                            check_email();
                        });
    
                        $("#region_name").focusout(function(){
                            check_rName();
                        });
    
                        function check_fName(){
                            var pattern = /^[a-zA-Z]*$/;
                            var fname = $("#form_fname").val()
                            if (pattern.test(fname) && fname!==''){
                                $('#fname_error_message').hide();
                                $("#form_fname").css("border-bottom", "2px solid #34F458");
                            } else {
                                $('#fname_error_message').html("Should contain only Characters");
                                $('#fname_error_message').show();
                                $("#form_fname").css("border-bottom", "2px solid #F70A0A");
                                error_fname = true;
                            }
                        }
    
                        function check_lName(){
                            var pattern = /^[a-zA-Z]*$/;
                            var lname = $("#form_lname").val()
                            if (pattern.test(lname) && lname!==''){
                                $('#lname_error_message').hide();
                                $("#form_lname").css("border-bottom", "2px solid #34F458");
                            } else {
                                $('#lname_error_message').html("Should contain only Characters");
                                $('#lname_error_message').show();
                                $("#form_lname").css("border-bottom", "2px solid #F70A0A");
                                error_lname = true;
                            }
                        }
    
                        function check_email(){
                            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                            var email = $("#form_email").val()
                            if (pattern.test(email) && email!==''){
                                $('#email_error_message').hide();
                                $("#form_email").css("border-bottom", "2px solid #34F458");
                            } else {
                                $('#email_error_message').html("Invalid Email");
                                $('#email_error_message').show();
                                $("#form_email").css("border-bottom", "2px solid #F90A0A");
                                error_email = true;
                            }
                        }
    
                        function check_rName(){
                                var pattern = /^[a-zA-Z]*$/;
                                var rname = $("#region_name").val()
                                if (pattern.test(rname) && rname!==''){
                                    $('#region_name_error_message').hide();
                                    $("#region_name").css("border-bottom", "2px solid #34F458");
                                } else {
                                    $('#region_name_error_message').html("Should contain only Characters");
                                    $('#region_name_error_message').show();
                                    $("#region_name").css("border-bottom", "2px solid #F70A0A");
                                    error_rname = true;
                                }
                            }
    
                        $("#add_employee_form").submit(function(){
                            error_fname = false;
                            error_lname = false;
                            error_email = false;
                            error_rname = false;
    
                            check_fName();
                            check_lName();
                            check_email();
                            check_rName();
    
                            if(error_fname === false && error_lname === false && error_email === false && error_rname === false){
                                alert("Registration Successfull");
                                return true;
                            }else{
                                alert("Please Fill Form Correctly");
                                return false;
                            }
                        });
    
                    });
                </script>
    
                <script>
                    document.getElementById("mybtn").addEventListener("click", function() {

                    var mybox = document.getElementById("mydiv");
                    if (mybox.style.display == "none") {

                    mybox.style.display = "block";
                    } else {
                    mybox.style.display = "none";

                    }

                    })
                </script>

                <script type="text/javascript">
                    function myfun(data)
                    {
                        var req = new XMLHttpRequest();
                        req.open("GET","http://localhost/CRM/pages/response.php?datavalue="+data,true);
                        req.send();

                        req.onreadystatechange=function(){

                            if(req.readyState==4 && req.status==200){
                                document.getElementById('city').innerHTML = req.responseText;
                            }

                        }
                    }
                </script>
      
        </div>      
    </body>
</html>