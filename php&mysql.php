


<?php



	$username=$_POST['text'];
	$password=$_POST['password'];
	$email=$_POST['email'];




$dsn='mysql:host=localhost;dbname=form';
$user='root';
$pass='';

try{
$db=new PDO($dsn,$user,$pass);

$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$q="INSERT INTO request (name,password,email) VALUES ('$username',$password,'$email')";

$db->exec($q);
echo "you are agreed";
}
catch(PDOException $e)
{
	echo "failed ".$e->getMessage();
}

?>
