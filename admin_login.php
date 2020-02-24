<?php
$error1='';
$error2='';
$error3='';
if(isset($_GET['err1']))
{
    if($_GET['err1']=='empty_u')
    {
        $error1 = "Username required";
    }
    if($_GET['err2']=='empty_p')
    {
        $error2 = "Password required";
    }   
}
elseif (isset($_GET['err3'])) {
    if($_GET['err3']=='empty_i')
    {
        $error3 = "Username or password Invalid";
    }
}
?>

<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="registration.css">
        <title>Login</title>
    </head>
    <body>
        <div class="signup">
            <h2>Admin Login</h2>
            <form action="process12.php" method="POST">
                <input type="text" class="txt" name="username" placeholder="Username or Email"><span>*<?php echo $error1; ?></span><br>
                <input type="password" class="txt" name="password" placeholder="Password"><span>*<?php echo $error2; ?><br>
                <span><?php echo $error3; ?><br>
                <input type="submit" class="btn" name="btn-login" value="Login">
                <a href="forgot.php">Forgot Password?</a>
            </form>
        </div>
    </body>
</html>