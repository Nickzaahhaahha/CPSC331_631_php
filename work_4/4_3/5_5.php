<?php
/* updated for php7 and php 5 on 2560-09-13 */
$myForm = '<body>
<form action="5_5.php">
<input name="orderid" value="">
<input type="submit" value="5_5.php">
</form>';
if (!isset($_GET['categoryid'])) { 
  echo $myForm;
  exit;
}
require("5_1.php");
$sql="delete from $tb ";
$sql.="where orderid ='".$_GET['orderid']."'";
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