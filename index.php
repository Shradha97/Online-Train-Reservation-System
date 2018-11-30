<?php
$con = mysqli_connect("localhost","root","vidya","train");
if(mysqli_connect_errno())
{
	echo "Failed to connect to MYSql: ".mysqli_connect_error();
}
?>
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
	$fs = "pune";
	$ts = "mumbai";
	$d = "mon";
	$con = new mysqli("localhost","root","vidya","train");
echo "<h2>".$fs."</h2>";
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//mysqli_select_db($con,"ajax_demo");
$sql="select a.train_no from station_list as a,station_list as b,train_table as t where a.train_no=b.train_no and a.station = '".$fs."' and b.station ='".$ts."' and t.".$d."='T' and t.train_no=a.train_no;";
echo $sql;
$result = $con->query($sql);

echo "<table>
<tr>
<th>Train Number</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row['train_no']."</td>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($con);	
?>
</body>
</html>