<?php  
    include('connection.php');
    session_start();
    if(isset($_SESSION['admin'])){

    }
    else{
        header("Location:admin_login.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Home Page </title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class='nav'>
        <div class="togglearea">
            <label for="toggle">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>
        
        <input type="checkbox" id="toggle">
        <div class="navbar">
            <a href="admin.php"  name="">Home</a>
            <a href="vehicleinfo.php"  name="vinfo">VehicleInfo</a>
            <a href="feedbackinfo.php"  name="feedback">Feedbacks</a>
            <a href="userinfo.php"  name="uinfo">UserInfo</a>
            <a href="bookinginfo.php"  name="binfo">BookingInfo</a>
             <a href="admin_logout.php"  name="logout">Logout</a>
        </div>

        <?php
            include_once('connection.php');
            $sql="select count('1') from users";
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($result);
            echo "<br><h1 class='txt'>No of Users:$row[0]</h1><br>";

            $sql1="select count('1') from vehicles";
            $result1=mysqli_query($con,$sql1);
            $row1=mysqli_fetch_array($result1);
            echo "<br><h1 class='txt'>No of Vehicles:$row1[0]</h1><br>";

            $sql2="select count('1') from book";
            $result2=mysqli_query($con,$sql2);
            $row2=mysqli_fetch_array($result2);
            echo "<br><h1 class='txt'>No of bookings:$row2[0]</h1><br>";

            ?>
    </div>
</body>
</html>