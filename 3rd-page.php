<?php
$con = mysqli_connect("localhost","root","vaishali","train");
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
echo"<button type="button" class="btn">"."pay"."</button>";
echo"<input name="account number" type="text" placeholder="Account NUmber" class="in">";
echo"<input name="amount" type="text" placeholder="Amount" class="in">";
echo"<button type="button" class="btn" onclick="bookticket()">Book ticket</button>";
?>
</body>
</html>
