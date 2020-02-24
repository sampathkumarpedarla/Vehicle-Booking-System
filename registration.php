<?php
$error1 ='';
$error2 ='';
$error3 ='';
$error4 ='';
$error5 ='';
$error6 ='';
$error7 ='';
if(isset($_GET['err1']))
{
    if($_GET['err1']=='empty_u')
    {
        $error1 = "Username Required";
    }
    if($_GET['err2']=='empty_e')
    {
        $error2 = "Email Required";
    }
    if($_GET['err3']=='empty_p')
    {
        $error3 = "Password Required";
    }
    if($_GET['err4']=='empty_cp')
    {
        $error4 = "Confirm Password Required";
    }
    if($_GET['err5']=='empty_m')
    {
        $error5 = "Contact Required";
    }
    if($_GET['err6']=='empty_a')
    {
        $error6 = "Answer Required";
    }
}
if(isset($_GET['err7']))
{
    if($_GET['err7']=='already')
    {
        $error7 = "User Already Exists";
    }
    if($_GET['err7']=='empty_i')
    {
        $error7 = "Incorrect Password";
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
            <h1>Registration</h1>
            <form action="process.php" method="POST">
                <input type="text" class="txt" name="username" id="" placeholder="Username"><span>*<?php echo $error1; ?></span><br>
                <input type="email" class="txt" name="email" id="" placeholder="Email"><span>*<?php echo $error2; ?></span><br>
                <input type="password" class="txt" name="password" id="" placeholder="Password"><span>*<?php echo $error3; ?></span><br>
                <input type="password" class="txt" name="cpass" id="cpword" placeholder="Confirm Password"><span>*<?php echo $error4; ?></span><br>
                <input type="tel" class="txt" name="contact" id="" placeholder="Phonenumber" maxlength="15"><span>*<?php echo $error5; ?></span><br>
                <p>Favourite question</p>
                <select name="question">
                    <option value="1">What's Your Favourite animal?</option>
                    <option value="2">What's Your Favourite color?</option>
                    <option value="3">What's Your Favourite City?</option>
                </select><br>
                <input type="text" class="txt" name="answer" id="" placeholder="answer"><span>*<?php echo $error6; ?></span><br>
                <input type="submit" class="txt btn" name="btn-save"  id="" value="Create Account"><br>
                <div><span>*<?php echo $error7; ?></span></div>
                <a href="login.php">Already Have a Account</a>
            </form>
        </div>
    </body>
</html>