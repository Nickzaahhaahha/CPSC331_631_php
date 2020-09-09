<body>
<form action="7_4.php">
<input name="shipperid" value="">
<input name="companyname" value="">
<input name="phone" value="">
<input type="submit" value="7_4.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['shipperid']) || !isset($_GET['companyname'])) exit;
require("7_1.php");
$sql="insert into $tb values('".$_GET['shipperid']."'
							,'".$_GET['companyname']."'
							,'".$_GET['phone']."')";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "$sql : succeeded";
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "$sql : succeeded";
	mysql_close($connect);
}
?>
</body>