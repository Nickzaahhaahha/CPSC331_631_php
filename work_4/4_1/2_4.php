<body>
<form action="2_4.php">
<input name="customerid" value="">
<input name="companyname" value="">
<input name="contactname" value="">
<input name="contacttitle" value="">
<input name="address" value="">
<input name="city" value="">
<input name="region" value="">
<input name="postalcode" value="">
<input name="country" value="">
<input name="phone" value="">
<input name="fax" value="">
<input type="submit" value="2_4.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['categoryid']) || !isset($_GET['categoryname'])) exit;
require("2_1.php");
$sql="insert into $tb values('".$_GET['customerid']."'
							,'".$_GET['companyname']."'
							,'".$_GET['contactname']."'
                            ,'".$_GET['contacttitle']."'
                            ,'".$_GET['address']."'
                            ,'".$_GET['city']."'
                            ,'".$_GET['region']."'
                            ,'".$_GET['postalcode']."'
                            ,'".$_GET['country']."'
                            ,'".$_GET['phone']."'
                            ,'".$_GET['fax']."')";
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