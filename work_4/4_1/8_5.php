<?php
/* updated for php7 and php 5 on 2560-09-13 */
$myForm = '<body>
<form action="8_5.php">
<input name="supplierid" value="">
<input type="submit" value="8_5.php">
</form>';
if (!isset($_GET['supplierid'])) { 
  echo $myForm;
  exit;
}
require("8_1.php");
$sql="delete from $tb ";
$sql.="where supplierid ='".$_GET['supplierid']."'";
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