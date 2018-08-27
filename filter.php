<?php

$input= $_POST['name'];
/*
filter_var($input,FILTER_VALIDATE_EMAIL)
filter_var($input,FILTER_VALIDATE_FLOAT)
filter_var($input,FILTER_VALIDATE_IP)
{
	if you put your computer ip
}
filter_var($input,FILTER_VALIDATE_URL)
*/
if(filter_var($input,FILTER_VALIDATE_INT)!=FALSE)
{
	echo "yes its int ";
}
else{
	echo "its string or float";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
<input type="text" name="name" required>
<input type="submit" name="button">
</form>
</body>
</html>