<?php
echo '<!doctype html>';
echo '<html>';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<title>hw13 work</title>';
echo '<link href="assets/css/style.css" rel="stylesheet" type="text/css">';
echo '<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">';
echo '</head>';
echo '<body>';

	if (isset($_REQUEST['page']))
		$page=$_REQUEST['page'];
	else
		$page ="work";

echo '</body>';
echo '</html>';
?>