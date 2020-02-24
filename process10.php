<?php
    if(isset($_POST['btn-ride']));
    {
    	session_start();
        include 'connection.php';
        $error1 = $error2 = $error3 = $error4 = $book = $book1 = '';
        $pickup=$_POST['pickup-select'];
        $drop=$_POST['drop-select'];
        $vehicle=$_POST['vehicle-select'];
        $kilo=$_POST['km-select'];
        $conditioner=$_POST['conditioner1'];

        if(empty($pickup))
        {
            $error1 = "empty_p";
        } 
        if(empty($drop))
        {
            $error2 = "empty_d";
        } 
        if(empty($vehicle))
        {
            $error3 = "empty_v";
        }

        if(empty($kilo))
        {
            $error4 = "empty_k";
        }
 
        if(empty($pickup) || empty($drop) || empty($vehicle) || empty($kilo))
        {   
            header("Location:selection.php?err1=$error1&err2=$error2&err3=$error3&err4=$error4");
            exit();
        }           
        else{
            $a = array();
			$b = array();
			$s = "select drivername,type from vehicles where status='available' and type='$vehicle'";
			$result = $con->query($s);
			if($result->num_rows > 0){
				if($row = $result->fetch_assoc()) {
				    array_push($a,$row["drivername"]);
				    array_push($b,$row["type"]);
				}
				$v = count($a);
				$value = rand(1,$v);
				$_SESSION['drivername'] = $a[$value-1];
				$_SESSION['book'] = $a[$value-1];
				// echo $book;
				$_SESSION['book1'] = $b[$value-1];
				// echo $book1;
				$_SESSION['pickup'] = $_POST['pickup-select'];
				echo $_SESSION['pickup'];
				$_SESSION['drop'] = $_POST['drop-select'];
				echo $_SESSION['drop'];
				$_SESSION['vehicle'] = $_POST['vehicle-select'];
				echo $_SESSION['vehicle'];
				$_SESSION['kilometers'] = $_POST['km-select'];
				$_SESSION['ac'] = $_POST['conditioner1'];
				echo $_SESSION['ac'];
                $_SESSION['waterbottle'] = $_POST['water'];
				
				// $s1 = "update vehicles set status='notavailable' where drivername='$book' and type='$book1'";
				// $result1 = $con->query($s1);
				header("location:vehicleprice.php");
			}
			else
			{
				echo " Sorry, Vehicle is Not available";
			}
        }
    }
?>