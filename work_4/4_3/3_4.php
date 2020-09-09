<body>
<form action="3_4.php">
<input name="employeeid" value="">
<input name="firstname" value="">
<input name="lastname" value="">
<input name="title" value="">
<input type="submit" value="2_4.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['employeeid']) || !isset($_GET['title'])) exit;
require("3_1.php");
$sql="insert into $tb values('".$_GET['employeeid']."'
							,'".$_GET['firstname']."'
							,'".$_GET['lastname']."'
							,'".$_GET['title']."')";
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