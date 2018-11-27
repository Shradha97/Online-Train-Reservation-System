
<!DOCTYPE html>
<!This file stores the user requirements like booking tickets etc. in the database>
<html>
<head>
<title>Railway Booking Portal</title>
<style>
table
{
	width:100%;
	border-collapse: collapse;
}
table, td, th
{
	border: 1px solid black;
	padding: 5px;
}
th{text-align: left ;}
</style>

</head>
<body>
<?php
	$fs = interval($_POST['fs']);
	$ts = interval($_POST['ts']);
	$d = interval($_POST['d']);
	$con = mysqli_connect("localhost","root","vaishali","train");
echo "<h2>".$fs."</h2>";
if(mysqli_connect_errno())
{
	echo "Failed to connect to MYSql: ".mysqli_connect_error();
}
mysqli_select_db($con,"ajax_demo");
$sql="select t from station_list as a,station_list as b,train_table as t where a.train_no=b.train_no and a.station = $fs and b.station = $ts and t.{$d}='T' and t.train_no=a.train_no;
$result =  mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Train Number</th>
<th>Train Name</th>
<th>fare</th>
<th>status</th>
</tr>;
while($row=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row['train_no']."</td>";
	echo "<td>".$row['train_name']."</td>";
	echo "<td>".$row['fare']."</td>";
	echo "<td>".$row['status']."</td>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($con);	
?>
</body>
</html>
