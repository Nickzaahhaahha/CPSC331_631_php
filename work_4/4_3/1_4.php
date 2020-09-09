<body>
<form action="1_4.php">
<input name="categoryid" value="">
<input name="categoryname" value="">
<input name="description" value="">
<input name="picture" value="">
<input type="submit" value="1_4.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['categoryid']) || !isset($_GET['categoryname'])) exit;
require("1_1.php");
$sql="insert into $tb values('".$_GET['categoryid']."'
							,'".$_GET['categoryname']."'
							,'".$_GET['description']."'
							,'".$_GET['picture']."')";
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