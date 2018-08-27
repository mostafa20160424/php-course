<?php
$input=$_POST['name'];
$put=filter_var($input,FILTER_SANITIZE_NUMBER_INT);
/*
FILTER_SANITIZE_EMAIL:remove all characters expect letters,@,?,$,#
FILTER_SANITIZE_NUMBER_FLOAT:remove all characters expect float numbers
FILTER_SANITIZE_NUMBER_INT:remove all characters expect integer numbers
*/
echo $input.'<br>'.$put.'<br>';
if (filter_var($put,FILTER_VALIDATE_INT)) {
	echo "good the ".$put." is integer";
}
else {
	echo "the input is not integer";
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