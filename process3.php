<?php
    include('connection.php');
    if(isset($_POST['btn-forgot']));
    {
        $uname=$_POST['username-forgot'];
        $pass=$_POST['password-forgot'];
        $cpass=$_POST['cpassword-forgot'];
        if(empty($uname))
        {
            $error1="empty_u";      
        }
        if(empty($pass))
        {
            $error2="empty_p";
        }
        if(empty($cpass))
        {
            $error3="empty_cp";
        }
       
        if(empty($uname) || empty($pass)|| empty($cpass))
        {   
            header("Location:forgot.php?err1=$error1&err2=$error2&err3=$error3");
            exit();
        }
        
        if($pass!=$cpass)
        {
            echo 'Password not Matched';
        }
        else if(empty($uname) || empty($pass) || empty($cpass))
        {
            $error1= 'Fill the fields';
        }
        else{
            $query="update users set password='$pass',confirmpassword='$cpass' where username='$uname'";
            $result=mysqli_query($con,$query);
            header("Location:login.php");
        } 
    }
?>