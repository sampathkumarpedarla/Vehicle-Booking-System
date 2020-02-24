<?php 
if(isset($_POST['btn-update']))
{
    include('connection.php');
    $error1 = $error2 = $error3 = $error4 = $error5 = $error6 = '';
    $vregno=$_POST['vregno-update'];
    $vmodelno=$_POST['vmodelno-update'];
    $dname=$_POST['dname-update'];
    $dlicno=$_POST['dlicno-update'];
    $type=$_POST['type-update'];

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
    if(empty($vregno)|| empty($vmodelno)|| empty($dname)|| empty($dlicno) || empty($type))
    {   
        header("Location:updatevehicle.php?err1=$error1&err2=$error2&err3=$error3&err4=$error4&err5=$error5");
        exit();
    }
    else{  
        $query="select vehicleregno from vehicles where driverlicno='$dlicno'";
        $result=mysqli_query($con,$query);
    
            if($row=mysqli_fetch_assoc($result)){
                $db_vehicle=$row['vehicleregno'];
                if($vregno==$db_vehicle){
                    $q="update vehicles set vehicleregno='$vregno',vehiclemodelno='$vmodelno',drivername='$dname',driverlicno=$dlicno,type='$type' where driverlicno=$dlicno";
                    $result=mysqli_query($con,$q);
                    header("location:selection.php");
                }
                else{
                    $error6="empty_i";
                    header("location:updatevehicle.php?err6=$error6");
                }
            }else{
                $error6="empty_i";
                header("location:updatevehicle.php?err6=$error6");
            }
       }
    }
?>