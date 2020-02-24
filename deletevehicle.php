<?php
$error1='';
$error2='';
session_start();
if(isset($_SESSION['admin'])){

}
else{
    header("Location:admin_login.php");
}
if(isset($_GET['err1']))
{
    if($_GET['err1']=='empty_v')
    {
        $error1 = "Vehicle Registration Number required";
    }
    if($_GET['err2']=='empty_l')
    {
        $error2 = "Driver License Number required";
    }
}
?>

<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="registration.css">
        <title>Delete Vehicle</title>
    </head>
    <body>
        <div class="signup">
            <h2>Delete Vehicle</h2>
            <form action="process6.php" method="POST">
                <input type="text" class="txt" name="vregno-delete" id="" placeholder="Vehicle Registration no"><span>*<?php echo $error1; ?></span><br>
                <input type="text" class="txt" name="dlicno-delete" id="" placeholder="Driver License Number"><span>*<?php echo $error2; ?></span><br>
                <input type="submit" class="btn" name="btn-delete"  id="" value="Delete Vehicle"><br>
            </form>
        </div>
    </body>
</html>
