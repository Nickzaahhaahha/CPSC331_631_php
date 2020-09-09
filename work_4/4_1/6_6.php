<body>
<form action="6_6.php">
<input name="productid" value="">
<input name="productname" value="">
<input name="supplierid" value="">
<input name="picture" value="">
<input type="categoryid" value="6_6.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['updid'])) { exit; }
require("6_1.php");
$sql="update $tb set ";
$sql.="productid='". $_GET['productid'] ."', ";
$sql.="productname='". $_GET['productname'] ."' ";
$sql.="supplierid='". $_GET['supplierid'] ."' ";
$sql.="categoryid='". $_GET['categoryid'] ."' ";
$sql.="where productid='". $_GET['productid'] ."'";
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