<?php
    include('connection.php');
    $a = array();
    $status='';
    $s = "select drivername from vehicles where status='available'";
    $result = $con->query($s);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            array_push($a,$row["drivername"]);
        }
        $v = count($a);
        $value = rand(1,$v);
        echo $a[$value-1];
    }else{
        echo "0 results";
    }
    $con->close();
    // $driver = rand(1,$a);
    // echo $driver;
    // $s = "update vehicles set $status='notavailable' where ";
    // $result = $con->query($s);
?>