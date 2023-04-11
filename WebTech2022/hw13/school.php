<?php
echo '<!doctype html>';
echo '<html>';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<title>hw13 school</title>';
echo '	<link href="assets/css/style.css" rel="stylesheet" type="text/css">';
echo '	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">';
echo '</head>';
echo '<body>';

	if (isset($_REQUEST['page']))
		$page=$_REQUEST['page'];
	else
		$page ="school";

echo '	<div><h2 align="center">Main Campus map</h2></div>';
echo '	<div><img src="assets/images/main-campus edit.png" alt="Main Campus map" title="Main Campus map"></div>';
echo '	<h2 align="center">Downtown Campus map</h2>';
echo '	<img src="https://www.utsa.edu/_files/images/visit/DowntownCampusMap.jpg" alt="Downtown Campus map" title="Downtown Campus map">';
echo '</body>';
echo '</html>';
?>