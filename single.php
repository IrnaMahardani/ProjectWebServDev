<?php
	include "header.php";
?>
<?php
$id=$_REQUEST["id"];
switch($id){
	case 1:
		include "1.php";
	break;
	case 2:
		include "2.php";
	break;
	case 3:
		include "3.php";
	break;
	case 4:
		include "4.php";
	break;
	case 5:
		include "5.php";
	break;
	case 6:
		include "6.php";
	break;
}
?>
 