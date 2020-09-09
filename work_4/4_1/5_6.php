<body>
<form action="5_6.php">
<input name="orderid" value="">
<input name="customerid" value="">
<input name="employeeid" value="">
<input name="orderdate" value="">
<input type="submit" value="1_6.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['updid'])) { exit; }
require("5_1.php");
$sql="update $tb set ";
$sql.="orderid='". $_GET['orderid'] ."', ";
$sql.="customerid='". $_GET['customerid'] ."' ";
$sql.="employeeid='". $_GET['employeeid'] ."' ";
$sql.="orderdate='". $_GET['orderdate'] ."' ";
$sql.="where orderid='". $_GET['orderid'] ."'";
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