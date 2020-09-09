<body>
<form action="4_4.php">
<input name="orderid" value="">
<input name="productid" value="">
<input name="unitprice" value="">
<input name="quantity" value="">
<input type="submit" value="4_4.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['orderid']) || !isset($_GET['productid'])) exit;
require("4_1.php");
$sql="insert into $tb values('".$_GET['orderid']."'
							,'".$_GET['productid']."'
							,'".$_GET['unitprice']."'
							,'".$_GET['quantity']."')";
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