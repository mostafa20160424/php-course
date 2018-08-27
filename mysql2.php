<?php
/*
Tiny    integer     =>Maximum Characters [ 4 ]
small   integer     =>Maximum Characters [ 6 ]
Medimum integer     =>Maximum Characters [ 9 ]
Big     integer     => Maximum Characters [ 20 ]
Integer             => Maximum Characters [ 11 ]
*/
$dsn='mysql:host=localhost;dbname=family';
$user='root';
$pass='';
$options=array(
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	);
try{
$db=new PDO($dsn,$user,$pass);

$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$q="INSERT INTO mostafa (password) VALUES (' 123')";

$db->exec($q);
echo "you are agreed";
}
catch(PDOException $e)
{
	echo "failed ".$e->getMessage();
}
/**
* 
*/


?>