<?php

$connect=mysqli_connect('localhost','root','','login1');
if(mysqli_errno($connect))//not connected
{
	echo 'not connected';
}
else{
	echo "<div class='alert alert-success'>".'connected'."</div>";
	if(isset($_POST['button']))
	{
		$name=$_POST['text'];
		$password=$_POST['password'];
	}
	
	$select="SELECT * from log where name='$name' and password='$password'";
	$result=mysqli_query($connect,$select);
	if(mysqli_num_rows($result)==1)
	{
		echo "<h1>Exist</h1>";
	}
	else {
		echo "<h1>Not Exist</h1>";
	}
}





?>
<<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/boost-copy.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	body{
		background:#001f3f;
	}
	form{
		position:relative;
		width:600px;
		margin:150px auto;
		background:#fff;
		padding:40px;
		border: 1px solid #fff;
		border-radius:10px;
	}
	h1{
		color:white;
	}
	</style>


	<script src="bootstrap-3.3.7-dist/js/html5shiv.min.js"></script>
	<script src="bootstrap-3.3.7-dist/js/respond.min.js"></script>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" role="form">
	<h1>Log In</h1>
	<div class="form-group">
	<input type="text" name="text" class="form-control" placeholder="Name">
	
	</div>
	<div class="form-group">
	<input type="password" name="password" class="form-control" placeholder="Password">
	
	</div>
	<input type="submit" value="Login" name="button" class="btn btn-primary">
	</form>



	<script src="bootstrap-3.3.7-dist/js/jquery-3.1.1.min.js"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</body>
</html>
<?php
mysql_close($connect);

?>