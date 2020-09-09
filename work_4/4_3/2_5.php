<?php
/* updated for php7 and php 5 on 2560-09-13 */
$myForm = '<body>
<form action="2_5.php">
<input name="categoryid" value="">
<input type="submit" value="2_5.php">
</form>';
if (!isset($_GET['customerid'])) { 
  echo $myForm;
  exit;
}
require("2_1.php");
$sql="delete from $tb ";
$sql.="where orderid ='".$_GET['customerid']."'";
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