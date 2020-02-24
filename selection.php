<?php
session_start();
if(isset($_SESSION['username'])){

}
else{
	header("Location:logout.php");
}
$error1='';
$error2='';
$error3='';
$error4='';
if(isset($_GET['err1']))
{
    if($_GET['err1']=='empty_p')
    {
        $error1 = "Pickup location Required";
    }
    if($_GET['err2']=='empty_d')
    {
        $error2 = "Drop Location Required";
    }
    if($_GET['err3']=='empty_v')
    {
        $error3 = "Select type of vehicle";
    }
    if($_GET['err4']=='empty_k')
    {
        $error4 = "Enter no. of kilmeters";
    }
}
?>

<html>
	<head>
		<title>Select Vehicle</title>
		<link rel="stylesheet" href="selection.css">
		<script src="selection.js"></script>
	</head>
	<body>
			<div class="header">
				<h1>Online Rental Booking System</h1>
				<b style="font-size: 20px;">Selecting Your Ride</b><a style="float: right;" class="btn-one" href="cancelation.php">Cancel?</a>
				<a style="float: left;" class="btn-one" href="changepassword.php">ChangePassword?</a>
			</div>
			<br>
			<form action="process10.php" method="POST">	
				<div class="input">
					<label style="padding-left: 20px;">Pickup Location:</label>
					<input type="text" name="pickup-select" placeholder="Pickup Location" size="50" id="pickup"><span> *<?php echo $error1; ?></span>
					<br><br>
					<label style="padding-left: 20px;">Drop Location: </label>
					<input type="text" name="drop-select" placeholder="Drop Location" size="50" id="drop"><span> *<?php echo $error2; ?></span>
					<br><br>
					<label style="padding-left: 10px;">Enter no. of km: </label>
					<input type="text" name="km-select" id="drop"><span>*<?php echo $error4; ?></span>
				</div><br><br>
				<div class="flex-Selection">
					<div class="car-container">
						<img src="comp_11_small.gif" class="car">
						<div class="overlay1">
							<div class="text-car">Car is a Economy type and it has 5 seats with Air Conditioner, Music player, Wifi with very comfortable seats
							</div>
						</div>
						<br><br>
						<input type="radio" name="vehicle-select" value="CAR" class="vehicle" onchange="myFucntion()">
						<span class="car-span">CAR</span>
						<br><br>		
					</div>
					<div class="auto-container">
						<img src="auto_small.gif" class="auto">
						<div class="overlay2">
							<div class="text-auto">Auto is affordable for every person and it has 3 seats with Music player, Wifi with very comfortable seats
							</div>
						</div>
						<br><br>
						<input type="radio" name="vehicle-select" value="AUTO" class="vehicle" onchange="myFucntion1()">
						<span class="auto-span">AUTO</span>
						<br><br>
					</div>
					<div class="bike-container">
						<img src="bike_small.gif" class="bike">
						<div class="overlay3">
							<div class="text-bike">Bike is small, smooth and fast at pakka roads also and only 2 members can travel in it. Compulsory(Helmet)
							</div>
						</div>
						<br><br>
						<input type="radio" name="vehicle-select" value="BIKE" class="vehicle" onchange="myFucntion2()">
						<span class="bike-span">BIKE</span>
						<br><br>	
					</div>
					<div class="suv-container">
						<img src="comp_11_small.gif" class="suv">
						<div class="overlay4">
							<div class="text-suv">SUV is a Large one for trips. It is the best choice and it has 7 seats with a Air conditioner, Music player with Wifi and it is very comfortable.
							</div>
						</div>
						<br><br>
						<input type="radio" name="vehicle-select" value="SUV" class="vehicle" onchange="myFucntion3()">
						<span class="suv-span">SUV</span>
						<br><br>
					</div>
				</div><span>*<?php echo $error3; ?></span>
				<br>
				<div>
					<label class="cond">Conditioner:</label>
					<input type="radio" name="conditioner1" id="c1" value="ac">A/C
					<input type="radio" name="conditioner1" id="c2" value="nonac">Non A/C
				</div>
				<br>
				<div>
					<label class="cond">Enable Amazon Prime During Ride: </label>
					<input type="radio" name="water" value="yes">
				</div>
				<br>
				<div class="ride">
					<input type="submit" name="btn-ride" class="btn">
				</div>
				<a href="feedmain.php" class="btn-one">Feedback</a>
				<a href="logout.php" style="float:right;" class="btn-one">Logout</a>
		</form>
	</body>
	</html>