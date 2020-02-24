<!DOCTYPE html>
<html>
<head>
	<link rel="<?php?>" type="text/css" href="">
	<?php 	
		$error1 ='';
		$error2 =''; 
		$error3 ='';

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if(isset($_POST['btn-ride'])){
				if(empty($_POST['Pickup'])){
					$error1 = "Pickup location Required";
					if ($err==""){
						$err="err1=$error1";						
					}
					else{
						$err+="&err1=$error1";
					}
				}
				if(empty($_POST['Drop']))
				{
					$error2 = "Drop Location Required";
					if ($err==""){
						$err="err2=$error2";						
					}
					else{
						$err+="&err2=$error2";
					}
				}
				if(empty($_POST['vehicle'])){
					$error3 = "Select type of vehicle";
					$error3 = "Select type of vehicle";
					if ($err==""){
						$err="err3=$error3";						
					}
					else{
						$err+="&err3=$error3";
					}
				}
				if(empty($_POST['Pickup'])||empty($_POST['Drop'])||empty($_POST['vehicle'])){
					header("Location:booking.php?".$err);
					exit();
				}
			}
		}
	?>

	<title>Select Vehicle</title>
	<link rel="stylesheet" href="Selection.css">
	<script src="selection.js"></script>
</head>
<body>
	<div class="header">
		<h1>Online Rental Booking System</h1>
		<h1>Selecting Your Ride</h1>
	</div>
	<br>

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"">	
	
	<div class="input" >
		<label style="padding-left: 20px;">Pickup Location:</label>
		<input type="text" name="Pickup" placeholder="Pickup Location" size="50" id="pickup"><span> *<?php echo $error1; ?></span>
		<br><br>
		<label style="padding-left: 20px;">Drop Location: </label>
		<input type="text" name="Drop" placeholder="Drop Location" size="50" id="drop"><span> *<?php echo $error2; ?></span>
		<br><br>
		<label style="padding-left: 10px;">Enter no. of km: </label>
		<input type="text" name="km" id="drop">
	</div>

	<div class="flex-Selection">
		<div class="car-container">
			<img src="car_logo.jpg" class="car">
			<div class="overlay1">
				<div class="text-car">Car is a Economy type and it has 5 seats with Air Conditioner, Music player, Wifi with very comfortable seats
				</div>
			</div>
			<br><br>
			<input type="radio" name="vehicle" value="CAR" class="vehicle" onchange="myFucntion()">
			<span class="car-span">CAR</span>
			<br><br>		
		</div>
		<div class="auto-container">
			<img src="car_logo.jpg" class="auto">
			<div class="overlay2">
				<div class="text-auto">Auto is affordable for every person and it has 3 seats with Music player, Wifi with very comfortable seats
				</div>
			</div>
			<br><br>
			<input type="radio" name="vehicle" value="AUTO" class="vehicle" onchange="myFucntion1()">
			<span class="auto-span">AUTO</span>
			<br><br>
		</div>
		<div class="bike-container">
			<img src="car_logo.jpg" class="bike">
			<div class="overlay3">
				<div class="text-bike">Bike is small, smooth and fast at pakka roads also and only 2 members can travel in it. Compulsory(Helmet)
				</div>
			</div>
			<br><br>
			<input type="radio" name="vehicle" value="BIKE" class="vehicle" onchange="myFucntion2()">
			<span class="bike-span">BIKE</span>
			<br><br>	
		</div>
		<div class="suv-container">
			<img src="car_logo.jpg" class="suv">
			<div class="overlay4">
				<div class="text-suv">SUV is a Large one for trips. It is the best choice and it has 7 seats with a Air conditioner, Music player with Wifi and it is very comfortable.
				</div>
			</div>
			<br><br>
			<input type="radio" name="vehicle" value="SUV" class="vehicle" onchange="myFucntion3()">
			<span class="suv-span">SUV</span>
			<br><br>
		</div>
	</div><span> *<?php echo $error3; ?></span>
	<br>
	<div>
		<label class="cond">Conditioner:</label>
		<input type="radio" name="conditioner" id="c1" value="ac">A/C
		<input type="radio" name="conditioner" id="c2" value="nonac">Non A/C
	</div>
	<br>
	<div>
		<label class="cond">Water Bottle: </label>
		<input type="radio" name="water" value="yes">
	</div>
	<br>
	<div class="signup">
	    <a class="btn" href="changepassword.php">ChangePassword?</a>
	</div>
	<div class="ride">
		<input type="submit" name="btn-ride" class="btn">
	</div>
</form>
</body>
</html>
