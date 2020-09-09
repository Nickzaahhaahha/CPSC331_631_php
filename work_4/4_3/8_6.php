<body>
<form action="8_6.php">
<input name="supplierid" value="">
<input name="companyname" value="">
<input name="address" value="">
<input type="submit" value="8_6.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['updid'])) { exit; }
require("8_1.php");
$sql="update $tb set ";
$sql.="supplierid='". $_GET['supplierid'] ."', ";
$sql.="companyname='". $_GET['companyname'] ."' ";
$sql.="address='". $_GET['address'] ."' ";
$sql.="where supplierid='". $_GET['supplierid'] ."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=index.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=index.php'/>";
	mysql_close($connect);
}
?>
</body>