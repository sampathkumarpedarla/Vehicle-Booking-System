<?php
$error1='';
$error2='';
$error3='';
$error4='';
$error5='';
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
    if($_GET['err2']=='empty_m')
    {
        $error2 = "Model Number required";
    }
    if($_GET['err3']=='empty_d')
    {
        $error3 = "Driver Name required";
    }
    if($_GET['err4']=='empty_l')
    {
        $error4 = "Driver License Number required";
    }
    if($_GET['err5']=='empty_t')
    {
        $error5 = "Type of vehicle required";
    }
}
?>


<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="registration.css">
        <title>Add Vehicle</title>
    </head>
    <body>
        <div class="signup">
            <h2>Add Vehicle</h2>
            <form action="process5.php" method="POST">
                <input type="text" class="txt" name="vregno-add" id="" placeholder="Vehicle Registration no"><span>*<?php echo $error1; ?></span><br>
                <input type="text" class="txt" name="vmodelno-add" id="" placeholder="Vehicle Chasis Number"><span>*<?php echo $error2; ?></span><br>
                <input type="text" class="txt" name="dname-add" id="" placeholder="Driver name"><span>*<?php echo $error3; ?></span><br>
                <input type="text" class="txt" name="dlicno-add" id="" placeholder="Driver License Number" maxlength="12"><span>*<?php echo $error4; ?></span><br><br>
                <select name="type-add" style="width: 150px;font-size: 15px;">
                    <option value="">select</option>
                    <option value="car">CAR</option>
                    <option value="auto">AUTO</option>
                    <option value="bike">BIKE</option>
                    <option value="suv">SUV</option>
                </select>
                <br><br>
                <span>*<?php echo $error5; ?></span>
                <input type="submit" class="btn" name="btn-add"  id="" value="Add Vehicle"><br>
            </form>
        </div>
    </body>
</html> 