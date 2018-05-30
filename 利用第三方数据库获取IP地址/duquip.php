<?php
error_reporting(E_ALL & ~E_NOTICE);
$con = mysql_connect("localhost","root","1234");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("ip_query", $con);
$result = mysql_query("SELECT ip FROM t_ip limit 1,6");
while($row = mysql_fetch_array($result))
  {	
	$ip=$row['ip'];
  	mysql_query('set names utf8');
  	$sql="SELECT areacode,adcode,country,province,city,district,wgs_lon,wgs_lat FROM `ip`.`IP_residence_all_2018W06_single_BD09_WGS84` WHERE minip <= INET_ATON('".$row['ip']."') ORDER BY minip DESC LIMIT 1";
	$address=mysql_query($sql);
	$rows=array();
	@$rows=mysql_fetch_array($address);
	if(!empty($rows[district])){
		$sql="INSERT INTO c_region(ip_address,region_code,city_name,city_short,country_code,latitude,longitude) VALUES('$ip','{$rows[adcode]}','{$rows[district]}','{$rows[district]}','{$rows[areacode]}','{$rows[wgs_lon]}','{$rows[wgs_lat]}')";
		mysql_query($sql);
	}else if(!empty($rows[city])){
		$sql="INSERT INTO c_region(ip_address,region_code,city_name,city_short,country_code,latitude,longitude) VALUES('$ip','{$rows[adcode]}','{$rows[city]}','{$rows[city]}','{$rows[areacode]}','{$rows[wgs_lon]}','{$rows[wgs_lat]}')";
		mysql_query($sql);
	}else{
		$sql="INSERT INTO c_region(ip_address,region_code,city_name,city_short,country_code,latitude,longitude) VALUES('$ip','{$rows[adcode]}','{$rows[province]}','{$rows[province]}','{$rows[areacode]}','{$rows[wgs_lon]}','{$rows[wgs_lat]}')";
		mysql_query($sql);
	}
  }