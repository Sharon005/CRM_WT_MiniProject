<?php 
    $data = $_GET['datavalue'];

    $rj = array('Jaipur','Jodhpur','Udaipur','Bikaner','Ajmer');
    $mp = array('Bhopal','Indore','Jabalpur','Gwalior','Ujjain');
    $mh = array('Mumbai','Pune','Nagpur','Nashik','Amravati');
    $up = array('Lucknow','Noida','Prayagraj','Kanpur','Varanasi');
    $gj = array('Ahmedabad','Surat','Rajkot','Vadodara','Junagadh');

    if($data == "Rajasthan"){
        foreach($rj as $rjone){
            echo "<option> $rjone </option>";
        }
    }

    if($data == "Madhya Pradesh"){
        foreach($mp as $mpone){
            echo "<option> $mpone </option>";
        }
    }

    if($data == "Maharashtra"){
        foreach($mh as $mhone){
            echo "<option> $mhone </option>";
        }
    }

    if($data == "Uttar Pradesh"){
        foreach($up as $upone){
            echo "<option> $upone </option>";
        }
    }

    if($data == "Gujarat"){
        foreach($gj as $gjone){
            echo "<option> $gjone </option>";
        }
    }

?>