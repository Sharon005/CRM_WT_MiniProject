<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Customer</title>
        <link rel="stylesheet" href="css/add_customer.css">

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
                    <h2>Add Customer</h2>
                    <div class="form">
                        <form id = "add_customer_form" method="POST">
                            <div class="form-group">
                                <label for="c_name">Enter Name</label>
                                <input type="text" name="c_name" required="" placeholder="Enter Customer Name" class="form-control" id="form_name">
                                <span class="error_form" id="name_error_message"></span>
                            </div>
                            <div class="form-group">
                                <label for="c_contact">Contact Number</label>
                                <input type="text" name="c_contact" required="" placeholder="Enter Contact " class="form-control" id="form_contact">
                                <span class="error_form" id="contact_error_message"></span>
                            </div>
                            <div class="form-group">
                                <label for="c_email">Email ID</label>
                                <input type="text" name="c_email" required="" placeholder="Enter Email Id" class="form-control" id="form_email">
                                <span class="error_form" id="email_error_message"></span>
                            </div>
                            <div class="form-group personal_details">
                                <label for="c_age">Date Of Birth</label>
                                <input id="box" type="date" name="c_age" required="" placeholder="Enter Date of Birth" class="form-control">
                            </div>
                            <div class="form-group personal_details">
                                <select id="box" name="gender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
    
                            <div class="form-group personal_details">
                                <select id="box" name="c_type" class="form-control">
                                    <option>Business Type</option>
                                    <option value="no">No Business</option>
                                    <option value="small">Small</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Large">Large</option>
                                </select>
                            </div>
                            <div class="form-group personal_details">
                                <input type="text" name="c_region" class="form-control" placeholder="Region" required="" id="region_name">
                                <span class="error_form" id="region_name_error_message"></span>
                            </div>
                            <div class="form-group personal_details">
                                <select id="box" name="c_plan" class="form-control">
                                    <option>Select Plan</option>
                                    <option value="Fast Speed internet">Fast Speed Internet</option>
                                    <option value="ultra 600">Ultra 600</option>
                                    <option value="Turbo 1mbp SME">Turbo 1mbp SME</option>
                                </select>
                            </div>
                            <div class="create-button">
                                <button type="submit" class="btn btn-success">Add Customer</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div> 
        </div>   
            
            <script type="text/javascript">
                $(function(){
                    $('#name_error_message').hide();
                    $('#email_error_message').hide();
                    $('#region_name_error_message').hide();
                    $('#contact_error_message').hide();
    
                    var error_name = false;
                    var error_email = false;
                    var error_rname = false;
                    var error_contact = false;
    
                    $("#form_name").focusout(function(){
                        check_Name();
                    });
    
                    $("#form_contact").focusout(function(){
                        check_Contact();
                    });
    
                    $("#form_email").focusout(function(){
                        check_email();
                    });
    
                    $("#region_name").focusout(function(){
                        check_rName();
                    });
    
                    function check_Name(){
                        var pattern = /^[a-zA-Z]*$/;
                        var fname = $("#form_name").val()
                        if (pattern.test(fname) && fname!==''){
                            $('#name_error_message').hide();
                            $("#form_name").css("border-bottom", "2px solid #34F458");
                        } else {
                            $('#name_error_message').html("Should contain only Characters");
                            $('#name_error_message').show();
                            $("#form_name").css("border-bottom", "2px solid #F70A0A");
                            error_name = true;
                        }
                    }
    
                    function check_Contact(){
                        var pattern = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
                        var contact = $("#form_contact").val()
                        if (pattern.test(contact) && contact!==''){
                            $('#contact_error_message').hide();
                            $("#form_contact").css("border-bottom", "2px solid #34F458");
                        } else {
                            $('#contact_error_message').html("Invalid Contact Number");
                            $('#contact_error_message').show();
                            $("#form_contact").css("border-bottom", "2px solid #F90A0A");
                            error_contact = true;
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
    
                    $("#add_customer_form").submit(function(){
                        error_name = false;
                        error_email = false;
                        error_rname = false;
                        error_contact = false;
    
                        check_Name();
                        check_email();
                        check_rName();
                        check_Contact();
    
                        if(error_name === false && error_contact === false && error_email === false && error_rname === false){
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
              <?php include ('../includes/app.php');?>
            <?php include('../includes/footer.php'); ?>
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
	$c_plan = $_POST['c_plan'];
	$sql = mysqli_query($con,"INSERT INTO customer(c_name,c_contact,c_email,c_age,c_gender,c_business,c_type,c_region,c_plan)
		VALUES('$c_name','$c_contact','$c_email','$c_age','$gender','$business','$type','$c_region','$c_plan')");
	if($sql){
		echo "<h3 style='color:green;'>Customer Added..</h3>";
	}else{
		echo "<h3 style='color:red;'>Failed !!..</h3>";
	}
	
}
?>
    </body>
</html>