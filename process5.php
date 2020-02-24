<?php
include('connection.php');
if(isset($_POST['btn-add']))
{
    $vregno=$_POST['vregno-add'];
    $vmodelno=$_POST['vmodelno-add'];
    $dname=$_POST['dname-add'];
    $dlicno=$_POST['dlicno-add'];
    $type=$_POST['type-add'];

    if(empty($vregno)){
        $error1 = "empty_v";
    } 
    if(empty($vmodelno)){
        $error2 = "empty_m";
    } 
    if(empty($dname)){
        $error3 = "empty_d";
    } 
    if(empty($dlicno)){
        $error4 = "empty_l";
    } 
    if(empty($type)){
        $error5 = "empty_t";
    } 
    if(empty($vregno)||empty($dlicno))
    {   
        header("Location:addvehicle.php?err1=$error1&err2=$error2&err3=$error3&err4=$error4&err5=$error5");
        exit();
    }
    else{  
        $status="available";
        $q="insert into vehicles(vehicleregno,vehiclemodelno,drivername,driverlicno,type,status) values('$vregno','$vmodelno','$dname',$dlicno,'$type','$status')";
        $result=mysqli_query($con,$q);
        header('location:vehicleinfo.php');
    }
}
?>