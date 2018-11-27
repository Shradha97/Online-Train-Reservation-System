<?php
//script to insert/update the changes done by the administrator in the database
$conn = new mysqli('localhost', 'root', '', 'train');

$train_number=$_POST['train_number'];
$stations=$_POST['stations'];
$days_list=$_POST['days_list'];
$status=$_POST['status'];

$sql1="INSERT INTO train_table (train_no, mon, tue, wed, thu, fri, sat, sun, status) VALUES ('$train_number', 'F', 'F', 'F', 'F', 'F', 'F', 'F', '$status')";

if ($conn->query($sql) === TRUE) {
	continue;
}
else
{
	echo "Update failed";
}

foreach ($days_list as $value) {
	if($value == 'M')
	{
		$sql1="INSERT INTO train_table (train_no, mon) VALUES ('$train_number', 'T')";

		if ($conn->query($sql) === TRUE) {
			continue;
		}
		else
		{
			echo "Update failed";
			break;
		}
	}
	if($value == 'T')
	{
		$sql1="INSERT INTO train_table (train_no, tue) VALUES ('$train_number', 'T')";	

		if ($conn->query($sql) === TRUE) {
			continue;
		}
		else
		{
			echo "Update failed";
			break;
		}
	}
	if($value == 'W')
	{
		$sql1="INSERT INTO train_table (train_no, wed) VALUES ('$train_number', 'T')";

		if ($conn->query($sql) === TRUE) {
			continue;
		}
		else
		{
			echo "Update failed";
			break;
		}	
	}
	if($value == 'Th')
	{
		$sql1="INSERT INTO train_table (train_no, thu) VALUES ('$train_number', 'T')";

		if ($conn->query($sql) === TRUE) {
			continue;
		}
		else
		{
			echo "Update failed";
			break;
		}
	}
	if($value == 'F')
	{
		$sql1="INSERT INTO train_table (train_no, fri) VALUES ('$train_number', 'T')";

		if ($conn->query($sql) === TRUE) {
			continue;
		}
		else
		{
			echo "Update failed";
			break;
		}
	}
	if($value == 'Sat')
	{
		$sql1="INSERT INTO train_table (train_no, sat) VALUES ('$train_number', 'T')";

		if ($conn->query($sql) === TRUE) {
			continue;
		}
		else
		{
			echo "Update failed";
			break;
		}
	}
	if($value == 'Sun')
	{
		$sql1="INSERT INTO train_table (train_no, sun) VALUES ('$train_number', 'T')";

		if ($conn->query($sql) === TRUE) {
			continue;
		}
		else
		{
			echo "Update failed";
			break;
		}
	}
}

foreach ($stations as $value) {

	$sql1="INSERT INTO station_list (train_no, station) VALUES ('$train_number', '$value')";

	if ($conn->query($sql) === TRUE) {
		continue;
	}
	else
	{
		echo "Update failed";
		break;
	}
}

if ($conn->query($sql) === TRUE) {
    echo "Changes submitted successfully";
}
else 
{  
	echo "Update failed";
}
 
?>