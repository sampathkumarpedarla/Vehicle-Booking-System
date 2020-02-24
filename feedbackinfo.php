<?php
include_once('connection.php');
session_start();
if(isset($_SESSION['admin'])){

}
else{
    header("Location:admin_login.php");
}
$query="select * from feedback";
$result=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
            .tab{
                background-color:#f1f1f1;
                width: 100%;
                text-align: center;
                font-size: 15px;
                border-color: #FF0090;
                border=1px;
                align-items:center;
                line-height:40px;
            }
            .thead{
                color: #FF0000;
                background-color: #D3D3D3;
            }
        </style>
        <title>Disp Data</title>
    </head>
    <body>
    <div class='nav'>
        <div class="togglearea">
            <label for="toggle">
                <span>hello</span>
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
    </div>
        <div class="vinfo">
        <table  class="tab">
            <tr>
                <th class="thead" colspan="5"><h2>User Feedback</h2></th>
            </tr>
            <tr>
                <th class="thead">DriverName</th>
                <th class="thead">Rating</th>
                <th class="thead">RideExperience</th>
                <th class="thead">Communication</th>
                <th class="thead">VehicleCondition</th>
            </tr>
            <?php
            while($rows=mysqli_fetch_assoc($result))
            {?>
            <tr>
                <td><?php echo $rows['drivername'];?></td>
                <td><?php echo $rows['rating'];?></td>
                <td><?php echo $rows['rideexperience'];?></td>
                <td><?php echo $rows['wayofcommn'];?></td>
                <td><?php echo $rows['vehiclecon'];?></td>
            </tr>

            <?php
            }
            ?>
        </table>
        </div>
    </body>
</html>
