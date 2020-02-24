<?php
$error1='';
$error2='';
session_start();
if(isset($_SESSION['username'])){

}
else{
    header("Location:login.php");
}
if(isset($_GET['err1']))
{
    if($_GET['err1']=='empty_d')
    {
        $error1 = "Driver Name required";
    }
    if($_GET['err2']=='empty_l')
    {
        $error2 = "Driver License Number required";
    }
}
?>

<html>
    <head>
        <link rel="stylesheet" href="registration.css">
        <title>Cancellation</title>
    </head>
    <body>
        <div class="signup">
            <form action="process9.php" method="POST">
                <h1>Booking Cancellation</h1>
                <input type="text" name="drivername-cancel" id="" placeholder="Driver Name"><span>*<?php echo $error1; ?></span><br><br>
                <input type="text" name="driverlicno-cancel" id="" placeholder="Driver License Number"><span>*<?php echo $error2; ?></span><br><br>
                <input type="submit" class="txt btn" name="btn-cancel"  id="" value="Cancel"><br>
            </form>
        </div>
    </body>
</html>