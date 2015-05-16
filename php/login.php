<?php
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库 
@$pattern=$_GET['pattern'];
if($_SERVER['HTTP_HOST']=="localhost"){
		@$con = mysql_connect("localhost","mkld","123456");
	} else {
		@$con = mysql_connect("localhost","imjzq2g","imjzq2g");
		}
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_query("SET NAMES 'utf8'");
mysql_query("set character_set_client='utf8'"); 
mysql_query("set character_set_results='utf8'");
if($_SERVER['HTTP_HOST']=="localhost"){
		mysql_select_db("mkld", $con);
	} else {
		mysql_select_db("imjzq2g", $con);
		}
$result = mysql_query("SELECT * FROM mc_settings where id=1");
$row = mysql_fetch_array($result);
if($row['value']==$pattern){
	echo 1;
	Session_Start();
	$_SESSION["login"]=true;
	} else {
	echo 0;
		};
?>