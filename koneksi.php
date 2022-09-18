<?php
include "mysql_mysqli.inc.php";

$host="localhost";
$user="root";
$pass="";
$dbName="lambung";
$koneksi=mysql_connect($host,$user,$pass);
$db=mysql_select_db($dbName,$koneksi);
if(!$koneksi){
	echo"<center><font color='#ff0000'>Koneksi Gagal</font></center>";
	}
?>