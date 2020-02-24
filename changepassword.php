<?php
$error1='';
$error2='';
$error3='';
$error4='';
session_start();
if(isset($_SESSION['username'])){

}
else{
    header("Location:login.php");
}
if(isset($_GET['err1']))
{
    if($_GET['err1']=='empty_o')
    {
        $error1 = "Enter old password Correctly";
    }
    if($_GET['err2']=='empty_p')
    {
        $error2 = "Enter new password";
    }
    if($_GET['err3']=='empty_n')
    {
        $error3 = "Enter new password";
    }    
}
elseif (isset($_GET['err4'])) {
    if($_GET['err4']=='empty_i')
    {
        $error4 = "Username or password Invalid";
    }
}
?>

<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="registration.css">
        <title>ChangePassword</title>
    </head>
    <body>
        <div class="signup">
            <img src="" alt="">
            <form action="process4.php" method="POST">
                <input type="password" class="txt" name="oldpassword-changepassword" id="" placeholder="Old Password"><span>*<?php echo $error1; ?></span><br>
                <input type="password" class="txt" name="password-changepassword" id="" placeholder="New Password"><span>*<?php echo $error2; ?></span><br>
                <input type="password" class="txt" name="cpass-changepassword" id="cpword" placeholder="Confirm Password"><span>*<?php echo $error3; ?></span><br>
                <input type="submit" class="txt" name="btn-change"  id="" value="Change Password"><br>
            </form>
        </div>
    </body>
</html>