<?php
    if(isset($_POST['btn-login']));
    {
        include 'connection.php';
        $error1 = $error2 = $error3 = $send = '';
        $admin = $_POST['username'];
        $pw = $_POST['password'];
        session_start();

        // if(($un==$admin)&&($pw==$adminpw)){
        //     header("Location:.php");
        // }
        if(empty($admin))
        {
            $error1="empty_u";
        }
        if(empty($pw))
        {
            $error2="empty_p";
        }
       
        if(empty($admin) || empty($pw))
        {   
            header("Location:admin_login.php?err1=$error1&err2=$error2");
            exit();
        }
        else{
            $query="select * from admin where username='$admin'";
            $result=mysqli_query($con,$query);
    
            if($row=mysqli_fetch_assoc($result)){
                $db_password=$row['password'];
                
                if($pw==$db_password){
                    session_start();
                    $_SESSION['admin'] = $admin;
                    if($admin=='admin'&&$db_password=='admin'){
                        header("location:admin.php");
                    }
                }
                else{
                    $error3="empty_i";
                    header("location:admin_login.php?err3=$error3");
                }
            }else{
                $error3="empty_i";
                header("location:admin_login.php?err3=$error3");
            }
        } 
    }
?>