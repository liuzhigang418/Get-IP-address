<?php
//error_reporting(E_ALL & ~E_NOTICE);
$con = mysql_connect("localhost","root","1234");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("ip_query", $con);
$result = mysql_query("SELECT id,ip FROM t_ip limit 1,10");
while($row = mysql_fetch_array($result))
  {
	$ip=$row['ip'];
	$ip1=ip2long($ip);
  	mysql_query('set names utf8');
  	$sql="UPDATE t_ip SET ipzs=".$ip1." WHERE id=".$row['id'];
  	mysql_query($sql);
  }