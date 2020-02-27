<?php
$user='root';
$server='localhost';
$password='';
$database='db_uas3';


$rumah=mysql_connect($server,$user,$password);
if($rumah){
	echo 'OK';
}else{
	echo 'Coba lagi';
}

$db=mysql_select_db($database);
if ($db) {
	echo 'Database Terhubung';
}else{
	echo 'Coba lagi';

}




?>