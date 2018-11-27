<?php
//script to implement cancellation of a particular record from the user_hist table
$connect=mysqli_connect("localhost", "root", "", "train");
if (isset($_POST["id"])) {
	foreach ($_POST["id"] as $id) {
		$query="DELETE FROM user_hist WHERE ticket= ' ".$id."'"; //here ticket is the column containing ticket number
		mysqli_query($connect, $query);
	}
}
?>