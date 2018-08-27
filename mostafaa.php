<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$name=$_POST['text'];
	$password=$_POST['password'];
	$email=$_POST['email'];
}

$dsn='mysql:host=localhost;dbname=form2';
$user='root';
$pass='';
try{
$db=new PDO($dsn,$user,$pass);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$q="INSERT INTO temb(name,password,email) VALUES('$name',$password,'$email')";

$db->exec($q);
echo "sign in successfully";
}
catch(PDOException $e)
{
	echo "name or email are repeated please change it <a href='form.php'>اعاده تسجيل</a>";
}

?>


