<?php
include('connection.php');
	$type="";
	$driver="";
	$conditioner="";
	$km="";
	$fare = "";
	$email1="";
	$book='';
	$book1='';
	$water='';
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
		$book = $_SESSION['book'];
		$book1 = $_SESSION['book1'];
		$water = $_SESSION['waterbottle'];
		$fare = $_SESSION['price']; 
		

		$q1 = "INSERT INTO book (type,price,distance,drivername,email,conditioner,waterbottle) VALUES ('$type',$fare,'$km','$driver','$email1','$conditioner','$water')";
	    $result1 = mysqli_query($con,$q1);	

	    $s1 = "update vehicles set status='notavailable' where drivername='$book' and type='$book1'";
		$result = mysqli_query($con,$s1);
		header("location:email.php");
?>