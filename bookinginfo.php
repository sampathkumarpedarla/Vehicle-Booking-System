<?php
include_once('connection.php');
session_start();
if(isset($_SESSION['admin'])){

}
else{
    header("Location:admin_login.php");
}
$query="select * from book";
$result=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking info Page </title>
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
    </style>
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
                <th class="thead" colspan="7"><h2>Booking Details</h2></th>
            </tr>
            <tr>
                <th class="thead">Type</th>
                <th class="thead">Price</th>
                <th class="thead">Distance</th>
                <th class="thead">Drivername</th>
                <th class="thead">Email</th>
                <th class="thead">Ac/Non-Ac</th>
                <th class="thead">Waterbottle</th>

            </tr>
            <?php
            while($rows=mysqli_fetch_assoc($result))
            {?>
            <tr>
                <td><?php echo $rows['type'];?></td>
                <td><?php echo $rows['price'];?></td>
                <td><?php echo $rows['distance'];?></td>
                <td><?php echo $rows['drivername'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['conditioner'];?></td>
                <td><?php echo $rows['waterbottle'];?></td>
            </tr>

            <?php
            }
            ?>
        </table>
        </div>
    </body>
</html>
