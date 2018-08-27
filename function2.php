<?php
function mostafa($user,$age){

$ticket=rand(5000,10000);//number change
if ($age>=30) {
	$msg="hello ". $user ." your age is ".$age."<br>";
	$msg.="you are qulified to get a ticket:) "."<br>";
	$msg.="your ticket id is[<span>".$ticket."</span>]";
}
else{
	$msg="hello ". $user ." your age is ".$age."<br>";
	$msg.="you are not qulified to get a ticket sorry:( ";
}
return $msg;

}
$id=mostafa("mostafa",30);
function makeframe($element){
	$frame="<div class='nice-frame'>";
	$frame.=$element;
	$frame.="</div>";
	return $frame;
}
$myelement=makeframe($id);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>advanced function</title>
	<style type="text/css">
		.nice-frame{
			padding: 10px;
			text-align: center;
			width: 400px;
			margin: 20px auto;
			border-radius: 10px;
			background: #eee;
			border: 1px solid #fff;
			font-family: cursive; 
		}

	</style>
</head>
<body>
<?php
echo $myelement;
?>
</body>
</html>