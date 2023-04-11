<?php
$page=$_REQUEST['page'];
switch($page){
	case "index":
		echo '<div class="banner"><h1>About me</h1></div>';
		echo '<div class="tabs">';
		echo '<div class="col-sm-3 navActive">Home</div>';
		echo '<a href="index.php?page=school"><div class="col-sm-3 navItem">School</div></a>';
		echo '<a href="index.php?page=work"><div class="col-sm-3 navItem">Work</div></a>';
		echo '<a href="index.php?page=contact"><div class="col-sm-3 navItem" style="padding-bottom: 12px">Contact</div></a>';
		echo '</div>';
	break;
	case "school":
		echo '<div class="banner"><h1>School</h1></div>';
		echo '<div class="tabs">';
		echo '<a href="index.php?page=index"><div class="col-sm-3 navItem">Home</div></a>';
		echo '<div class="col-sm-3 navActive">School</div>';
		echo '<a href="index.php?page=work"><div class="col-sm-3 navItem">Work</div></a>';
		echo '<a href="index.php?page=contact"><div class="col-sm-3 navItem" style="padding-bottom: 12px">Contact</div></a>';
		echo '</div>';
	break;
	case "work":
		echo '<div class="banner"><h1>Work</h1></div>';
		echo '<div class="tabs">';
		echo '<a href="index.php?page=index"><div class="col-sm-3 navItem">Home</div></a>';
		echo '<a href="index.php?page=school"><div class="col-sm-3 navItem">School</div></a>';
		echo '<div class="col-sm-3 navActive">Work</div></a>';
		echo '<a href="index.php?page=contact"><div class="col-sm-3 navItem" style="padding-bottom: 12px">Contact</div></a>';
		echo '</div>';
	break;
	case "contact":
		echo '<div class="banner"><h1>Contact</h1></div>';
		echo '<div class="tabs">';
		echo '<a href="index.php?page=index"><div class="col-sm-3 navItem">Home</div>';
		echo '<a href="index.php?page=school"><div class="col-sm-3 navItem">School</div></a>';
		echo '<a href="index.php?page=work"><div class="col-sm-3 navItem">Work</div></a>';
		echo '<div class="col-sm-3 navActive">Contact</div></a>';
		echo '</div>';
	break;
	default:
		echo '<div class="banner"><h1>About me</h1></div>';
		echo '<div class="tabs">';
		echo '<div class="col-sm-3 navActive">Home</div>';
		echo '<a href="index.php?page=school"><div class="col-sm-3 navItem">School</div></a>';
		echo '<a href="index.php?page=work"><div class="col-sm-3 navItem">Work</div></a>';
		echo '<a href="index.php?page=contact"><div class="col-sm-3 navItem" style="padding-bottom: 12px">Contact</div></a>';
		echo '</div>';
	break;
}
?>