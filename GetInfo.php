<?php

$connect=mysqli_connect('localhost','root','','login1');
if(mysqli_errno($connect))//not connected
{
	echo 'not connected';
}
else{
    echo "<div class='alert alert-success' style='width:200px'>".'connected'."</div>";
    $get="SELECT * from log";
    $result=mysqli_query($connect,$get);
    echo "<table class='table'>";
    while($info=mysqli_fetch_array($result))//mysqli_fetch_assoc=mysqli_fetch_array
    {
        echo "<tr>";
        echo "<td>".$info['name']."</td>";
        echo "<td>".$info['password']."</td>";
        echo "</tr>";
    }
    




	echo "</table>";
	

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
        color:#fff;
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




	<script src="bootstrap-3.3.7-dist/js/jquery-3.1.1.min.js"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</body>
</html>
<?php
mysqli_close($connect);

?>