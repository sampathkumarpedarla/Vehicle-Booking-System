<?php
include_once('connection.php');
session_start();
if(isset($_SESSION['admin'])){

}
else{
    header("Location:admin_login.php");
}
$query="select * from vehicles";
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
            line-height:40px;
        }
        .thead{
            color: #FF0000;
            background-color: #D3D3D3;
        }
        .upd{
            margin:20px 20px;
        }
        .a{
            margin-top:50px;
            margin-left: 550px;
            width:500px;
            height:200px;
        }
    </style>
    <title>Disp Data</title>
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
        </div>

        <div class="vinfo">
            <table  class="tab">
                <tr>
                    <th class="thead" colspan="6"><h2>Vehicle Details</h2></th>
                </tr>
                <tr>
                    
                    <th class="thead">Vehicle Registration Number</th>
                    <th class="thead">Vehicle Model Number</th>
                    <th class="thead">Driver Name</th>
                    <th class="thead">Driver License Number</th>
                    <th class="thead">Type</th>
                    <th class="thead">Status</th>

                </tr>
                <?php
                while($rows=mysqli_fetch_assoc($result))
                {?>
                <tr>
                    <td><?php echo $rows['vehicleregno'];?></td>
                    <td><?php echo $rows['vehiclemodelno'];?></td>
                    <td><?php echo $rows['drivername'];?></td>
                    <td><?php echo $rows['driverlicno'];?></td>
                    <td><?php echo $rows['type'];?></td>
                    <td><?php echo $rows['status'];?></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <div class="a">
            <div class="navbar">
            <a href="addvehicle.php" class="upd" name="vinfo">Add</a>
             <a href="deletevehicle.php" class="upd" name="vinfo">Delete</a>
             <a href="updatevehicle.php" class="upd" name="vinfo">Update</a>
            </div>
        </div>
    </body>
</html>
