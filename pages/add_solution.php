<?php
require("connect.php");
session_start();
if($_SESSION['name']){

}else{
    header("index.php");
}
$id = $_POST['id'];


$solution = $_POST['solution'];
echo $id. $solution;

$sql = mysqli_query($con,"UPDATE complaint set com_solution = '$solution' where customer_id = '$id'");
if($sql){
    header("location:view_complaint.php");
}else{
    header("location:view_complaint.php");
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Solution Page</title>

        <link rel="stylesheet" href="css/add_solution.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="row justify-content-center">
            <div class="col-sm-9  pb-4">
                <h3 class="text-center">Solution !!!</h3>

                <form method="post">
                    <div class="form-group">
                        <input type="text" name="id" class="form-control" readonly="" value="">
                    </div>
                    <div class="form-group solution_field">
                        <textarea class="form-control" rows="10" name="solution" placeholder="Solution....."></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success">Add Solution</button>
                    </div>
                </form>
            </div>
        </div>
       
    </body>
</html> 