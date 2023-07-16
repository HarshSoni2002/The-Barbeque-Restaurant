<?php
session_start();
$host = "localhost";
		$dbusername = "root";
		$dbpassword ="";
		$dbname = "testing";

		$con = mysqli_connect($host,$dbusername,$dbpassword,$dbname);

		if($con){
         } else{
            echo('server error');
            }
if (isset($_POST['save'])) {
	
	$Dayt = $_POST['Dayt'];
	$Timet = $_POST['Timet'];
	$Fullname =$_POST['Fullname'];
	$ContactNumber =$_POST['ContactNumber'];
	$Persons =$_POST['Persons'];
	// $insertquery = "INSERT into official3 (Dayt,Fullname, ContactNumber, Persons,) VALUES ('$Dayt','$Fullname','$ContactNumber','$Persons')";
	$insertquery = "INSERT into official2 (Dayt,ContactNumber,Timet,Fullname,Persons) VALUES ('$Dayt',$ContactNumber,$Timet,'$Fullname','$Persons')";
	
	$iquery = mysqli_query($con, $insertquery);

	if ($iquery) {
	   echo('YOUR TABLE IS BOOKED ');
	}else{
        echo('Error');
    }
}
?>