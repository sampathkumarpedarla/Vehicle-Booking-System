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
    if($_GET['err1']=='empty_r')
    {
        $error1 = "Please Give Rating";
    }
    if($_GET['err2']=='empty_e')
    {
        $error2 = "Please Enter Your Experience";
    }
    if($_GET['err3']=='empty_c')
    {
        $error3 = "Driver communication";
    }
    if($_GET['err4']=='empty_con')
    {
        $error4 = "Vehicle Condition";
    }
}
?>


<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
        <title>Feedback form</title>
        <link rel="stylesheet" type="text/css" href="feedmain.css">
    </head>
    <body>
        <div class="container">
            <h1>Feedback</h1>
            <form action="processfeed.php" method="POST">
                <label style="font-family: Arial;"><b>Rating:</b></label>
                <select name="rating">
                    <option value="0"> </option>
                    <option value="1">★</option>
                    <option value="2">★★</option>
                    <option value="3">★★★</option>
                    <option value="4">★★★★</option>
                    <option value="5">★★★★★</option>        
                </select>
                <span style="color:red";>*<?php echo $error1; ?></span>
                <br><br>
                <strong>How was your experience with our Ride?</strong>
                <br>
                <textarea type="text" rows="3" cols="75" name="experience" id="" placeholder="Ride Experience"></textarea>
                <span style="color:red";>*<?php echo $error2; ?></span>
                <br><br>
                <strong>How was driver communicating to you:?</strong>
                <br>
                <textarea type="text" rows="3" cols="75" name="communication" id="" placeholder="Driver Communication"></textarea>
                <span style="color:red";>*<?php echo $error3; ?></span>
                <br><br>
                <strong>How was the Vehicle Condition?</strong>
                <br>
                <textarea type="text" rows="5" cols="75" name="condition" id="" placeholder="Vehicle Maintenance" maxlength="12"></textarea>
                <span style="color:red";>*<?php echo $error4; ?></span>
                <br><br>
                <input type="submit" class="btn" name="btn-feed"  id="" value="SUBMIT">
                <br><br><br>
            </form>
        </div>
    </body>
</html> 