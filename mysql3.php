<?php
/*
Date      	  =>YYYY-MM-DD
Datetime  	  =>YYYY-MM-DD HH:Mi:SS
Timestamp     =>YYYY-MM-DD HH:Mi:SS
Time          =>HH:Mi:SS
Year          =>YYYY
------------------------------------
STRING
Char    =>Character
-Store Fixed Value
-Max Character 255
-faster than varchar
-use static memory
VarChar    =>Variable Character
-Store variable value
-max character 65000
-slower than Varchar
-use dynamic memory
-------------------------------------
Text          =>Store String
-Deal &Compared Depend On Charset
-store long string
BloB  		  =>Binary Large Object
-Has No Charset
-Deal 
INSERT(String,start,legnth,new string)
*/

$dsn='mysql:host=localhost;dbname=test';
$user='root';
$pass='';
$options=array(
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	);
try{
$db=new PDO($dsn,$user,$pass);

$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

echo "you are agreed";
}

catch(PDOException $e)
{
	echo "failed ".$e->getMessage();
}

for ($i=0; $i <= 500; $i++) 
{  
$stmt=$db->prepare("INSERT INTO `kok` (`string`) VALUES ('".$i. "')");

	$stmt->execute();
}
