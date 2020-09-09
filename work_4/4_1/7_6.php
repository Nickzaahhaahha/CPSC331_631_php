<body>
<form action="7_6.php">
<input name="shipperid" value="">
<input name="companyname" value="">
<input name="phone" value="">
<input type="submit" value="7_6.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['updid'])) { exit; }
require("7_1.php");
$sql="update $tb set ";
$sql.="shipperid='". $_GET['shipperid'] ."', ";
$sql.="companyname='". $_GET['companyname'] ."' ";
$sql.="phone='". $_GET['phone'] ."' ";
$sql.="where shipperid='". $_GET['shipperid'] ."'";
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