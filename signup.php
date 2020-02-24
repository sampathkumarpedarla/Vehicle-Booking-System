<?php
    $uname="";
    $ema="";
    $pass="";
    $conpass="";
    $ph="";
    $answer="";

    if(isset($_POST['submit'])){
    
    include 'connection.php';
        $un = mysqli_real_escape_string($conn,$_POST['username']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $pw = mysqli_real_escape_string($conn,$_POST['password']);
        $cpw = mysqli_real_escape_string($conn,$_POST['cpass']);
        $phone = mysqli_real_escape_string($conn,$_POST['contact']);
        $ques = mysqli_real_escape_string($conn,$_POST['question']);
        $ans = mysqli_real_escape_string($conn,$_POST['answer']);

    $s = "select * from userdetails where username ='$un' ";
    $result = mysqli_query($conn,$s);
    $num = mysqli_num_rows($result);
    
    if(empty($un)||empty($email)||empty($pw)||empty($cpw)||empty($phone)||empty($ques)||empty($ans)){
        if(empty($un))
        $uname = "username is required";
        if(empty($email))
        $ema = "email is required";
        if(empty($pw))
        $pass = " Password is required";
        if(empty($cpw))
        $conpass = "confirmpassword is required";
        if(empty($phone))
        $ph =  "phone is required";
        if(empty($ans))
        $answer = "answer is required";
    }
    else{
        if($num==1){
            $un = "UserName Already Taken Choose other UserName";
        }
        else{
            $sql="INSERT INTO users (username,email,password,confirmpassword,contactnumber,answer,question) VALUES ('$un','$email','$pw','$cpw',$phone,'$ans','$ques')";
            mysqli_query($conn, $sql);
        }
    }
}
?> 


<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="registration.css">
        <title>Sign-Up</title>
    </head>
    <body>
        <div class="signup">
            <img src="" alt="Taxi Image">
            <form action="signup.php" method="POST">
                <input type="text" class="txt" name="username" id="" placeholder="Username">
                <div><span>*<?php echo $uname; ?></span></div>
                <input type="email" class="txt" name="email" id="" placeholder="Email"><span>*<?php echo $ema; ?></span><br>
                <input type="password" class="txt" name="password" id="" placeholder="Password"><span>*<?php echo $pass; ?></span><br>
                <input type="password" class="txt" name="cpass" id="cpword" placeholder="Confirm Password"><span>*<?php echo $conpass; ?></span><br>
                <input type="tel" class="txt" name="contact" id="" placeholder="Phonenumber" maxlength="15"><span>*<?php echo $ph; ?></span><br>
                <select name="question">
                    <option value="1">What is animal?</option>
                    <option value="2">What is color?</option>
                    <option value="3">What is green?</option>
                </select><br>
                <input type="text" class="txt" name="answer" id="" placeholder="answer"><span>*<?php echo $answer; ?></span><br>
                <input type="submit" class="txt" name="submit"  id="" value="Create Account"><br>
                <a href="login.php">Already Have a Account</a>
            </form>
        </div>
    </body>
</html>