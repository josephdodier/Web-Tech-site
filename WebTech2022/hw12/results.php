<?php
include("functions.php");
echo '<h3 align="center">Contact form data results</h3>';
$dblink=db_connect("contactData");
$sql="select * from `user_input` where 1";
$result=$dblink->query($sql) or
	die("Something went wrong with: $sql<br>".$dblink->error);
echo '<table border="1" width=100%>';
echo '<tr>';
echo '<th>Record #</th><th>First name</th><th>Last name</th><th>E-Mail</th><th>Username</th><th>Comments</th>';
echo '</tr>';
while($data=$result->fetch_array(MYSQLI_ASSOC)){
	
	echo '<tr>';
	echo '<td>'.$data['auto_id'].'</td>';
	echo '<td>'.$data['first_name'].'</td>';
	echo '<td>'.$data['last_name'].'</td>';
	echo '<td>'.$data['email'].'</td>';
	echo '<td>'.$data['username'].'</td>';
	echo '<td>'.$data['comments'].'</td>';
	echo '</tr>';
	
}
echo '</table>';
?>