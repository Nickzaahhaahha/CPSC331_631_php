<body>
<form action="1_6.php">
<input name="categoryid" value="">
<input name="categoryname" value="">
<input name="description" value="">
<input name="picture" value="">
<input type="submit" value="1_6.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['updid'])) { exit; }
require("1_1.php");
$sql="update $tb set ";
$sql.="categoryid='". $_GET['categoryid'] ."', ";
$sql.="categoryname='". $_GET['categoryname'] ."' ";
$sql.="description='". $_GET['description'] ."' ";
$sql.="picture='". $_GET['picture'] ."' ";
$sql.="where categoryid='". $_GET['categoryid'] ."'";
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