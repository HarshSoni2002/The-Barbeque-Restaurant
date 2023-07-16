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
	
	$Fullname =$_POST['Fullname'];
	$PhoneNumber =$_POST['PhoneNumber'];
	$Address1 =$_POST['Address1'];
	$insertquery = "INSERT into cod (Fullname,PhoneNumber,Address1) VALUES ('$Fullname','$PhoneNumber','$Address1')";
	
	$iquery = mysqli_query($con, $insertquery);

	if ($iquery) {
	   echo('THANK YOU FOR ORDERING ,ITMES WILL BE DELIVERED TO YOU SHORTLY ');
	}else{
        echo('Error');
    }
}
?>