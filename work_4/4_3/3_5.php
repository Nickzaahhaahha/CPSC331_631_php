<?php
/* updated for php7 and php 5 on 2560-09-13 */
$myForm = '<body>
<form action="3_5.php">
<input name="employeeid" value="">
<input type="submit" value="3_5.php">
</form>';
if (!isset($_GET['employeeid'])) { 
  echo $myForm;
  exit;
}
require("3_1.php");
$sql="delete from $tb ";
$sql.="where employeeid ='".$_GET['employeeid']."'";
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