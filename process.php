<?php
    if(isset($_POST['btn-save']));
    {
        include 'connection.php';
        $error1 = $error2 = $error3 = $error4 = $error5 = $error6 = $error7 = '';
        $un = $_POST['username'];
        $email = $_POST['email'];
        $pw = $_POST['password'];
        $cpw = $_POST['cpass'];
        $phone = $_POST['contact'];
        $ques = $_POST['question'];
        $ans = $_POST['answer'];

        if(empty($un))
        {
            $error1 = "empty_u";     
        }
        if(empty($email)){
            $error2 = "empty_e";
        }
        if(empty($pw))
        {
            $error3 = "empty_p";
        }
        if(empty($cpw))
        {
            $error4 = "empty_cp";
        }
        if(empty($phone)){
            $error5 = "empty_m";
        }
        if(empty($ans)){
            $error6 = "empty_a";
        }

        $s = "select * from users where username ='$un'";
        $result = mysqli_query($con,$s);
        $num = mysqli_num_rows($result);
        echo $num;
        
        if(empty($un) || empty($email)|| empty($pw) || empty($cpw) || empty($phone) || empty($ques) || empty($ans))
        {   
            header("Location:registration.php?err1=$error1&err2=$error2&err3=$error3&err4=$error4&err5=$error5&err6=$error6");
            exit();
        }
        else{
            if($num==1){
                $error7 = 'already';
                header("location:registration.php?err7=$error7");
                exit();
            }
            else{
                if($pw!=$cpw){
                        $error7 = 'empty_i';
                    header("location:registration.php?err7=$error7");
                }
                else{
                    $pass=$password;
                    $sql="INSERT INTO users (username,email,password,confirmpassword,contactnumber,answer,question) VALUES ('$un','$email','$pw','$cpw',$phone,'$ans','$ques')";
                    if(mysqli_query($con,$sql))
                    {
                        header('location:login.php');
                    }
                    else
                    {
                        $error7 = 'already';
                        header("location:registration.php?err7=$error7");
                    }
                }
            }
        }
    }
?>