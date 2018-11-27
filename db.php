<!Script to update changes in the train time table by the administrator>
<html>
<head>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<link rel="stylesheet" a href="3rd-page_style.css">
</head>
<body>
	<?php
		$c1 = array(); //creating an array of values
		$c2 = array();
		$c3 = array();
		$c4 = array();
		$c2arr = array();
		$c3arr = array();

	?>
<div class="data_update">
<p>Changes Update Table</p>
<table id="03">
<tr>
	<th>Train #</th>
    <th>Station List</th>
    <th>Days</th>
    <th>Status</th>
</tr>
<tr>
    <td><input name="train_number" type="text" id="tn" placeholder="Train #"></td>
    <td><input name="stations" type="text" id="sl" placeholder="Station List"></td>
    <td><input name="days_list" type="text" id="dl" placeholder="Days"></td>
    <td><form id="selection">
    	<select name="status" onchange="firstPlace(this.text)">
    		<option value="">Choose Status</option>
    		<option value="1">On</option>
    		<option value="2">Cancelled</option>
    	</select>
        </form>
    <td><button type="button" id="click" onclick="myfunc($c1, $c2, $c3, $c4)" class="btn">+</button></td>
</tr>
</table>
<button type="submit" id="button" align="center">SUBMIT CHANGES</button>
</div>
<script>
var count=0;


function myfunc(&$c1, &$c2, &$c3, &$c4)
{
	$c1[count]=	$("#tn").val();
	$c2[count]=	$("#sl").val();		      
	$c3[count]=	$("#dl").val();		      
	$c4[count]=	$("#st").val();		      

	$c2arr=explode(',', $c2[count]);
	$c3arr=explode(',', $c3[count]);

	array_push($c2, $c2arr);

	array_push($c3, $v2);

    count++;
    var tab=document.getElementById("03");
    var row=tab.insertRow(count);
    var col1=row.insertCell(0);
    var col2=row.insertCell(1);
    var col3=row.insertCell(2);
    var col4=row.insertCell(4);
    var col5=row.insertCell(5);


    col1.innerHTML='<input name="train_number" type="text" value="Train #">';
    col2.innerHTML='<input name="stations" type="text" value="Station List">';
    col3.innerHTML='<input name="days_list" type="text" value="Days">'; 
    col4.innerHTML='<form>
    	<select name="status" onchange="firstPlace(this.text)">
    		<option value="">Choose Status</option>
    		<option value="1">On</option>
    		<option value="2">Cancelled</option>
    	</select>
        </form>';
    col5.innerHTML='<button type="button" onclick="myfunc($c1, $c2, $c3, $c4)" class="btn">+</button>';
}
</script>
<script>
	/*$(document).ready(function(){
		$("#button").click(function(){
			var train_number = $c1;
			var stations = $c2;
			var days_list = $c3;
			var status = $c4;

			for (var i = 0; i <= stations.length; i++) {
				$.ajax({
				url:'insert_data.php',
				method:'POST',
				data:{
					train_number: train_number[i],
					stations: stations[i],
					days_list: days_list[i],
					status: status[i]
				},
				success: function(data){
					alert(data);
				}
			    });
			}
		});
	});*/

</script>

</body>
</html>