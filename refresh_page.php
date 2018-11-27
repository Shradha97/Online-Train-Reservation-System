<?php
	//script to refresh the previous booking page in every 5 seconds
	include "test.php";
?>

<!DOCTYPE html>
<html>
<div id="table_update"></div>
<script type="text\javascript">
	$(document).ready(function(){
		refreshTable();
})
	function refreshTable(){
		$("#table_update").load("test.php", function()
		{
			setTimeout(refreshTable, 5000);
		});
}
</script>

</html>
