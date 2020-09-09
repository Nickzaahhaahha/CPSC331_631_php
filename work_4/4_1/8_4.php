<body>
<form action="8_4.php">
<input name="supplierid" value="">
<input name="companyname" value="">
<input name="address" value="">
<input type="submit" value="8_4.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['supplierid']) || !isset($_GET['companyname'])) exit;
require("8_1.php");
$sql="insert into $tb values('".$_GET['supplierid']."'
							,'".$_GET['companyname']."'
							,'".$_GET['address']."')";
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