<?php
    if(isset($_POST['btn-login']));
    {
        include 'connection.php';
        $error1 = $error2 = $error3 = $send = '';
        $un = $_POST['username'];
        $pw = $_POST['password'];
        if(empty($un))
        {
            $error1="empty_u";
        }
        if(empty($pw))
        {
            $error2="empty_p";
        }
       
        if(empty($un) || empty($pw))
        {   
            header("Location:login.php?err1=$error1&err2=$error2");
            exit();
        }
        else{
            if(($un=='admin')&&($pw=='admin123')){
                header("location:admin.php");
                exit();
            }

            $query="select * from users where username='$un'";
            $result=mysqli_query($con,$query);
    
            if($row=mysqli_fetch_assoc($result)){
                $db_password=$row['password'];
                $_SESSION['send']=$row['email'];
                $_SESSION['username']=$row['username'];
                
                if($pw==$db_password){
                    session_start();
                    $_SESSION['username'] = $un;
                    header("location:selection.php");
                }
                else{
                    $error3="empty_i";
                    header("location:login.php?err3=$error3");
                }
            }else{
                $error3="empty_i";
                header("location:login.php?err3=$error3");
            }
        } 
    }
?>