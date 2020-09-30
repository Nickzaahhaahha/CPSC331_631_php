<body>
<form action="3_6.php">
<input name="employeeid" value="">
<input name="firstname" value="">
<input name="lastname" value="">
<input name="title" value="">
<input type="submit" value="1_6.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['updid'])) { exit; }
require("3_1.php");
$sql="update $tb set ";
$sql.="employeeid='". $_GET['employeeid'] ."' ";
$sql.="firstname='". $_GET['firstname'] ."', ";
$sql.="lastname='". $_GET['lastname'] ."' ";
$sql.="title='". $_GET['title'] ."' ";
$sql.="where employeeid='". $_GET['employeeid'] ."'";
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