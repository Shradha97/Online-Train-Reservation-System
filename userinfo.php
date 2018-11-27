<?php
	//This file stores the data of the new registering user in the database
	echo "php file";
	$conn = mysqli_connect('localhost','root','root@123','train');
	$username = $_POST["username"];
	$password = $_POST["password"];
	$amount = $_POST["amount"];
	$aadhar = $_POST["Aadhar_number"];
	$account = $_POST["Bank_A/c_number"];
	$res = mysqli_query($conn,"INSERT INTO user VALUES($username,$password,$amount,$aadhar,$account)");
	
	if($res)
		echo "successfully logged in";
	else
	echo "failed";
?>
