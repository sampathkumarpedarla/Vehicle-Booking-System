<?php
include('connection.php');
	$type="";
	$driver="";
	$conditioner="";
	$km="";
	$fare = "";
	$suv = 11;
	$car = 9;
	$auto = 7;
	$bike = 5;
	$ac = 2;
	$email1="";
	$price = '';
	session_start();
	if(isset($_SESSION['username'])){

	}
	else{
		header("Location:login.php");
	}
	$type = $_SESSION['vehicle'];
	$kms = $_SESSION['kilometers'];
	$conditioner = $_SESSION['ac'];
	$email1 = $_SESSION['send'];
		$km = (int)$kms;
		if(strcmp($type,"CAR")==0){
			if(strcmp($conditioner,"ac")==0){
				$fare = ($car+$ac)*$km;
			}else if(strcmp($conditioner,"nonac")==0){
				$fare = $km*$car;
			}
		}
		else if(strcmp($type,"AUTO")==0){
			$fare = $km*$auto;
			$conditioner = "nonac";
		}
		else if(strcmp($type,"BIKE")==0){
			$fare = $km*$bike;
			$conditioner = "nonac";
		}
		else if(strcmp($type,"SUV")==0){
			if(strcmp($conditioner,"ac")==0){
				$fare = ($suv+$ac)*$km;
			}else if(strcmp($conditioner,"nonac")==0){
				$fare = $km*$suv;
			}
		}
		$driver = $_SESSION['drivername'];
		
		$_SESSION['price'] = $fare; 		
		// $email1 = $_SESSION['send'];
		// echo 'email'.$email1;

		// $q1 = "INSERT INTO book (type,price,distance,drivername,email,conditioner) VALUES ('$type',$fare,'$km','$driver','$email1','$conditioner')";
	 //    $result1 = mysqli_query($con,$q1);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Vehicle details</title>
	<link rel="stylesheet" type="text/css" href="vehicleprice.css">
	<link rel="stylesheet" href="selection.css">
</head>
<body>
	<div class="header">
		<h1>Online Rental Booking System</h1>
	</div>
	<div class="container">
		<h2>Vehicle Details</h2>
		<label style="padding-right: 55px;">Type of Vehicle:</label>
		<input type="text" name="typeofvehicle" value="<?php echo $type ?>">
		<br><br>
		<label style="padding-right: 120px;">Price:</label>
		<input type="text" name="Price" value="<?php echo $fare ?>">
		<br><br>
		<label style="padding-right: 25px;">Distance Estimated:</label>
		<input type="text" name="distest" value="<?php echo $km."km" ?>">
		<br><br>
		<label style="padding-right: 65px;">Driver details:</label>
		<input type="text" name="driverdet" value="<?php echo $driver ?>">
		<br><br>
	</div>
	<div class="b">
		<a href="confirm.php" id="b">Confirm</a>
		<a href="logout.php" style="float:left;" class="btn-one">Logout</a>
	</div>
</body>
</html>