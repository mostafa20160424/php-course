<?php
$maincolor='#fff';//maincolor
if ($_SERVER['REQUEST_METHOD']=='POST') {
$maincolor= $_POST['color'];

setcookie('Background',$maincolor,time()+3600,'/contact');
//all contact page and the children of this page will have cookie
/*setcookie(key,value,time to share cookie,'path');*/
}
if(isset($_COOKIE['Background']))
{
	$body=$_COOKIE['Background'];
	
}else{
	$body=$maincolor;
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modify Cookie</title>
</head>
<body style="background-color: <?php echo  $body; ?> ;">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
	<input type="color" name="color">
	<input type="submit" value="submit">
</form>
</body>
</html>