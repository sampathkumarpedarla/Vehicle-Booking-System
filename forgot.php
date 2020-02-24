<?php
$error1='';
$error2='';
$error3='';
$error4='';
if(isset($_GET['err1']))
{
    if($_GET['err1']=='empty_u')
    {
        $error1 = "username required";
    }
    if($_GET['err2']=='empty_p')
    {
        $error2 = "password required";
    }
    if($_GET['err3']=='empty_cp')
    {
        $error3 = "confirm password required";
    }
}
?>

<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="registration.css">
        <title>Forgot</title>
    </head>
    <body>
        <div class="signup">
            <img src="" alt="">
            <form action="process3.php" method="POST">
                <input type="text" class="txt" name="username-forgot" id="" placeholder="Username or Email"><span>*<?php echo $error1 ?></span><br>
                <!-- <label for=""><span>* <?php echo $error1; ?></span></label><br> -->
                <input type="text" class="txt" name="question-ans" id="" placeholder="Enter your question answer"><span>*<?php echo $error4 ?></span><br>
                <input type="password" class="txt" name="password-forgot" id="" placeholder="Password"><span>*<?php echo $error2 ?></span><br>
                <input type="password" class="txt" name="cpassword-forgot" id="" placeholder="Confirm Password"><span>*<?php echo $error3 ?></span><br>
                <!-- <label for=""><span>* <?php echo $error2; ?></span></label><br> -->
                <input type="submit" class="btn" name="btn-forgot"  id="" value="SUBMIT">
            </form>
        </div>

    </body>
</html>