<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<input type="text" name="username">
	<input type="submit" name="" value="submit">
</form>
<?php

//$_GET['username'] use with method get
//=$_POST['username'] used with method post
//$_REQUEST['username'] used with both method
$username=$_REQUEST['username'];
echo $username;



?>