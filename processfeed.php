<?php    
    if(isset($_POST['btn-feed']))
    {
        include('connection.php');
        $error1 = $error2 = $error3 = $error4 = $ema = ''; 
        $rating=$_POST['rating'];
        $experience=$_POST['experience'];
        $communication=$_POST['communication'];
        $condition=$_POST['condition'];
        session_start();
        if(empty($rating))
        {
            $error1 = "empty_r";
        } 
        if(empty($experience))
        {
            $error2 = "empty_e";
        } 
        if(empty($communication))
        {
            $error3 = "empty_c";
        } 
        if(empty($condition))
        {
            $error4 = "empty_con";
        }
         
        if(empty($rating) || empty($experience)|| empty($communication) || empty($condition))
        {   
            header("Location:feedmain.php?err1=$error1&err2=$error2&err3=$error3&err4=$error4");
            exit();
        }
        else{   
            $ema = $_SESSION['send'];
            // echo $ema;
            $q1="select drivername from book where email='$ema'";
            $result1=mysqli_query($con,$q1);
            if ($result1->num_rows > 0) {
                while($row = $result1->fetch_assoc()) {
                    $driver = $row['drivername'];
                }
            }

            $q="INSERT into feedback(drivername,rating,rideexperience,wayofcommn,vehiclecon) values('$driver','$rating','$experience','$communication','$condition')";
            $result=mysqli_query($con,$q);
            header("Location:selection.php");
        }
    }
?>