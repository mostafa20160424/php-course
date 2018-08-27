<?php
$input=$_POST['name'];
$opt=array(
'options'=>array(
	'min_range'=>1,
	'max_range'=>999
	),
'flags'=>FILTER_FLAG_IPV4
	
);
if (filter_var($input,FILTER_VALIDATE_IP,$opt)) {
	echo "good the ".$input." is ipv4";
}
else {
	echo "the ip is not ipv4";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];  ?>">
	<input type="text" name="name">
	<input type="submit" name="submit">
</form>
</body>
</html>