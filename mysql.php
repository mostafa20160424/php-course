<?php


try{
	/*
	$dsn='mysql:host=localhost;dbname=chat';
	$user='root';
	$pass='';
	$options=array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
		);
	$db=new PDO($dsn,$user,$pass,$options);

	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	echo "you are connected";
*/
	$con = mysqli_connect('localhost','root','','chat');
	if($con)
	{
		echo "you are connected";
	}
	$query="select * from users";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)>0)
	{
		echo "<br>data exist<br>";
	}
	while($row=mysqli_fetch_array($result))
	{
		echo "<br>".$row['name']."<br>";
	}

}
catch(PDOException $e)
{
	echo "failed ".$e->getMessage();
}
/*
in_array(needle, haystack)
is_file(filename)
*/