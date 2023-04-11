<?php
echo '<!doctype html>';
echo '<html>';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<title>hw12 Contact</title>';
echo '<link href="assets/css/style.css" rel="stylesheet" type="text/css">';
echo '<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">';
echo '</head>';
echo '<body>';

	if (isset($_REQUEST['page']))
		$page=$_REQUEST['page'];
	else
		$page ="contact";

include("functions.php");

if(!(isset($_POST['submit'])))
{
	echo '<h3 align="center">Fill out contact form</h3>';
	if (isset($_REQUEST['msg']) && $_REQUEST['msg']=="success"){
		
		echo '<div>Data entered succesfully!</div>';
		
	}
	echo '<form method="POST" action="">';
	echo '<div class="form-group">';
	echo '	<label>First Name:</label>';
	echo '	<input class="form-control" type="text" name="fname" id="fname" onblur="checkName(this.value,this.id)">';
	echo '	<p class="help-block" id="fnameHelp"></p>';
	echo '</div>';
	echo '<div class="form-group">';
	echo '	<label>Last Name:</label>';
	echo '	<input class="form-control" type="text" name="lname" id="lname" onblur="checkName(this.value,this.id)">';
	echo '	<p class="help-block" id="lnameHelp"></p>';
	echo '</div>';
	echo '<div class="form-group">';
	echo '	<label>Email:</label>';
	echo '	<input class="form-control" type="text" name="email" id="email" onblur="checkEmail(this.value)">';
	echo '	<p class="help-block" id="emailHelp"></p>';
	echo '</div>';
	echo '<div class="form-group">';
	echo '	<label>Username:</label>';
	echo '	<input class="form-control" type="text" name="uname" id="uname" onblur="checkUName(this.value,this.id)">';
	echo '	<p class="help-block" id="unameHelp"></p>';
	echo '</div>';
	echo '<div class="form-floating">';
	echo '  	<label for="comments">Comments:</label>';
	echo '	<textarea class="form-control" placeholder="Do not include: ! @ # $ % ^ & *" name="comment" id="comment" onblur="checkComments(this.value,this.id)"style="height: 100px"></textarea>';
	echo '	<p class="help-block" id="commentHelp"></p>';
	echo '</div>';
	echo '	<button type="submit" name="submit" id="submit" value="submit">Submit</button>';
	echo '</form>';
	
}
if (isset($_POST['submit'])){
	$dblink=db_connect("contactData");
	$firstName=$_REQUEST['fname'];
	$lastName=$_REQUEST['lname'];
	$email=$_REQUEST['email'];
	$userName=$_REQUEST['uname'];
	$comments=$_REQUEST['comment'];
	$sql="Insert into`user_input` (`first_name`,`last_name`,`email`,`username`,`comments`) values";
	$sql.=" ('$firstName','$lastName','$email','$userName','$comments')";
	$dblink->query($sql) or
		die("Something went wrong with $sql".$dblink->error);
	redirect("index.php?page=contact&msg=success");
	/*echo '<h2>Results:</h2>';
	echo '<p>First Name: '.$firstName.'</p>';
	echo '<p>Last Name: '.$lastName.'</p>';
	echo '<p>Email Address: '.$email.'</p>';
	echo '<p>Username: '.$userName.'</p>';
	echo '<p>comments: '.$comments.'</p>';*/
}

echo '</body>';
echo '</html>';
?>
<script src="assets/js/validation.js"></script>