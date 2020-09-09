<body>
<form action="6_4.php">
<input name="productid" value="">
<input name="productname" value="">
<input name="supplierid" value="">
<input name="categoryid" value="">
<input type="submit" value="6_4.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['productid']) || !isset($_GET['productname'])) exit;
require("6_1.php");
$sql="insert into $tb values('".$_GET['productid']."'
							,'".$_GET['productname']."'
							,'".$_GET['supplierid']."'
							,'".$_GET['categoryid']."')";
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