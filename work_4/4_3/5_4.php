<body>
<form action="5_4.php">
<input name="orderid" value="">
<input name="customerid" value="">
<input name="employeeid" value="">
<input name="orderdate" value="">
<input type="submit" value="5_4.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['orderid']) || !isset($_GET['customerid'])) exit;
require("5_1.php");
$sql="insert into $tb values('".$_GET['orderid']."'
							,'".$_GET['customerid']."'
							,'".$_GET['employeeid']."'
							,'".$_GET['orderdate']."')";
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