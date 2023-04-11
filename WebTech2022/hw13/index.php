<?php
echo '<!doctype html>';
echo '<html>';
echo '	<head>';
echo '	<meta charset="utf-8">';
echo '	<title>hw13 home</title>';
echo '		<link href="assets/css/style.css" rel="stylesheet" type="text/css">';
echo '		<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">';
echo '	</head>';
	
echo '<body>';

	if (isset($_REQUEST['page']))
		$page=$_REQUEST['page'];
	else
		$page ="index";

	include("navigation.php");

switch($page){
	case "index":
		include("home.php");
		break;
	case "school":
		include("school.php");
		break;
	case "work":
		include("work.php");
		break;
	case "contact":
		include("contact.php");
		break;
	case "results":
		include("results.php");
		break;
	default:
		include("home.php");
		break;
	}
echo '</body>';
echo '</html>';
?>