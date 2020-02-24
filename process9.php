<?php
    if(isset($_POST['btn-cancel']));
    {
        include 'connection.php';
        session_start();
        $error1 = $error2 = $em = $send = '';
        $drivernam=$_POST['drivername-cancel'];
        $driverlicn=$_POST['driverlicno-cancel'];
        $em = $_SESSION['send'];
        if(empty($drivernam))
        {
            $error1 = "empty_d";
        } 
        if(empty($driverlicn))
        {
            $error2 = "empty_l";
        }
 
        if(empty($drivernam) || empty($driverlicn))
        {   
            header("Location:cancelation.php?err1=$error1&err2=$error2");
            exit();
        }           
        else{
            $q1 = "update vehicles set status='available' where drivername='$drivernam' and driverlicno=$driverlicn";
            $result1 = mysqli_query($con,$q1);
            header("location:email1.php");
        }
    }
?>