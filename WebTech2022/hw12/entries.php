<script src="assets/js/jquery-3.5.1.js"></script>
<?php
echo '<h3 align="center">Contact form data results</h3>';
echo '<table border="1" width=100%>';
echo '<tr>';
echo '<th>Record #</th><th>First name</th><th>Last name</th><th>E-Mail</th><th>Username</th><th>Comments</th>';
echo '</tr>';
echo '<tbody id="results">';
echo '</tbody>';
echo '</table>';
?>
<script>
function refresh_div(){
	
	$.ajax({
		type: 'post',
		url: 'https://ec2-3-138-112-63.us-east-2.compute.amazonaws.com/hw12/query.php',
		success: function(data) {
			$('#results').html(data);
		}
	});
	
};
setInterval(function(){ refresh_div(); }, 500);
//refresh_div();
</script>