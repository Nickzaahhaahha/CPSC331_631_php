<?php
/* updated for php7 and php 5 on 2560-09-13 */
$myForm = '<body>
<form action="7_5.php">
<input name="shipperid" value="">
<input type="submit" value="7_5.php">
</form>';
if (!isset($_GET['shipperid'])) { 
  echo $myForm;
  exit;
}
require("7_1.php");
$sql="delete from $tb ";
$sql.="where shipperid ='".$_GET['shipperid']."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		header("location: index.php");	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		header("location: index.php");
	mysql_close($connect);
}
?>
</body>