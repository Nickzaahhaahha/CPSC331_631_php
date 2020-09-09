<?php
/* updated for php7 and php 5 on 2560-09-13 */
/* Section 1 : include */
if(file_exists("2_1.php")) 
  require("2_1.php"); 
else
  die("File not found");

/* Section 2 : main activity */
if ($dbstatus == 0) dbWork("create database $db");
qWork("create table $tb (customerid int(11)
						,companyname varchar(50)
						,description varchar(50)
                        ,contactname varchar(50)
                        ,contacttitle varchar(50)
                        ,address varchar(50)
                        ,city varchar(50)
                        ,region varchar(50)
                        ,country varchar(50)
                        ,phone int(11)
                        ,fax int(11))");
/*qWork("insert into $tb values('1001','Tom')");
qWork("insert into $tb values('1002','Dang')");
qWork("insert into $tb values('1003','Pom')");*/
if((int)phpversion() >= 7) $connect->close(); else mysql_close($connect);
echo '<a href="s0index.php">back</a>';

/* Section 3 : function */
function dbWork($sql) {
	global $db,$host,$uname,$upass,$connect;	
	if((int)phpversion() >= 7) {
		if ($connect->query($sql) === FALSE) 
			echo "$sql : failed ". $conn->error . "<br/>";
		else {
			echo "$sql : succeeded<br/>";
			$connect = new mysqli($host, $uname, $upass, $db);
		}
	} else { 
		if (!$result=mysql_query($sql,$connect))
			echo "$sql : failed<br/>"; 
		else 
			echo "$sql : succeeded<br/>";  
	}
}	
function qWork($sql) {
	global $connect,$db;
	if((int)phpversion() >= 7) {
		if ($connect->query($sql) === FALSE) 
			echo "$sql : failed ". $conn->error . "<br/>";
		else 
			echo "$sql : succeeded<br/>";
	} else {   
		if (!$result=mysql_db_query($db,$sql))
			echo "$sql : failed<br/>"; 
		else 
			echo "$sql : succeeded<br/>";  
	}
}	
?>