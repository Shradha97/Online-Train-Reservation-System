
<?php
//script to show the current bookings and their status, the user can cancel also the bookings in this page
session_start(); //Start the current session
session_destroy(); //Destroy it! So we are logged out now
header("location:login.php?msg=Successfully Logged out"); // Move back to login.php with a logout message
?>

<!DOCTYPE html>
<html>
<head>
	<title>Previous bookings/Cancellations</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";  
$password = "";		//put your password
$dbname = "train";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
echo "Connected";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Ticket, Status FROM user_hist";
$result = $conn->query($sql);

	<table align="right" border="1px" style="width:300px; line-height:30px;">
		<tr>
			<th>Ticket Number  </th>
			<th>Date of Journey</th>
			<th>Status</th>
			<th>Select</th>
		</tr>
		<?php
			while ($rows=mysqli_fetch_assoc($result)) {
		?>
				<tr>
					<td><?php echo $rows['Ticket']; ?></td>
					<td><?php echo $rows['date_of_journey']; ?></td>
					<td><?php echo $rows['status']; ?></td>
					<td><input type="checkbox" name="booking_cancellation[]" class="cancel_booking" value="<?php echo $row["Ticket"];?>"></td>
				</tr>
		<?php
			}
		?>
	</table>
	<div align="right">
		<button type="button" name="btn_delete" id="btn_delete" class="btn" >Cancel Ticket </button>
	</div>
$conn->close();
?> 

</body>
</html>

<script>
	$(document).ready(function(){
		$('#btn_delete').click(function () {
			if(confirm("Are you sure you want to cancel this ticket?")){
				var id = [];
				$(':checkbox:checked').each(function(i){
					id[i]=$(this).val();
				});
				if(id.length == 0)
				{
					alert("Please select atleast one checkbox");
				}
				else
				{
					$.ajax({
						url:'delete.php',
						method:'POST',
						data:{id:id},
						success:function()
						{
							for (var i = 0; i < id.length; i++) {
								$('tr#'+id[i]+'').hide();
							}
						}
					});
				}
			}
			else
			{
				return false;
			}
		});
	});
</script>