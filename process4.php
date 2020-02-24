<?php
    if(isset($_POST['btn-change']));
    {
        include('connection.php');
        $error1 = $error2 = $error3 = $error4 = $uname = $email = "";
        session_start();
        $uname=$_SESSION['username'];
        echo $uname;
        $email=$_SESSION['send'];
        echo $email;
        $oldpassword=mysqli_real_escape_string($con,$_POST['oldpassword-changepassword']);
        $password=mysqli_real_escape_string($con,$_POST['password-changepassword']);
        $cpassword=mysqli_real_escape_string($con,$_POST['cpass-changepassword']);

        if(empty($oldpassword))
        {
            $error1="empty_o";   
        }
        if(empty($password))
        {
            $error2="empty_p";
        }
        if(empty($cpassword))
        {
            $error3="empty_n";
        }
        

        if(empty($oldpassword) || empty($password) || empty($cpassword))
        {
            header("Location:changepassword.php?err1=$error1&err2=$error2&err3=$error3");
            exit();
        }

        $q = "select password from users where username='$uname'";
        $result = mysqli_query($con,$q);
        $row = mysqli_fetch_assoc($result);
        $password1 = $row['password'];
        

        if(strcmp($oldpassword,$password1)==0)
        {
            if(strcmp($password,$cpassword)==0){
            //echo "both passwords are same";
            $q1 = "update users set password='$password',confirmpassword='$password' where username='$uname'";
            mysqli_query($con,$q1);
            header('location:selection.php');
            }
            else{
                $error4="empty_i";
                header("location:changepassword.php?err4=$error4");   
            }
        }
        else{
            $error4="empty_i";
            header("location:changepassword.php?err4=$error4");
        }            
    }
?>