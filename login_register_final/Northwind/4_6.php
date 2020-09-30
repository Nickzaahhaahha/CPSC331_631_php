<body>
<form action="4_6.php">
<input name="orderid" value="">
<input name="productid" value="">
<input name="unitprice" value="">
<input name="quantity" value="">
<input type="submit" value="4_6.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['updid'])) { exit; }
require("4_1.php");
$sql="update $tb set ";
$sql.="orderid='". $_GET['orderid'] ."', ";
$sql.="productid='". $_GET['productid'] ."' ";
$sql.="unitprice='". $_GET['unitprice'] ."' ";
$sql.="quantity='". $_GET['quantity'] ."' ";
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