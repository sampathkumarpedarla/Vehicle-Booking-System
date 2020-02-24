<?php
include('connection.php');
// $username = '';
// session_start();
// if(isset($_SESSION['user']))
// $username = $_SESSION['user'];
// else{
//     header('location: login.php');
// } 
if(isset($_POST['btn-delete']))
{
    $vregno=$_POST['vregno-delete'];
    $dlicno=$_POST['dlicno-delete'];

    if(empty($vregno)){
        $error1 = "empty_v";
    }  
    if(empty($dlicno)){
        $error2 = "empty_l";
    }  
    if(empty($vregno)||empty($dlicno))
    {   
        header("Location:deletevehicle.php?err1=$error1&err2=$error2");
        exit();
    }
    else{   
        $q="delete from vehicles where driverlicno=$dlicno and vehicleregno='$vregno'";
        $result=mysqli_query($con,$q);
        header('location:vehicleinfo.php');
    }
}
?>