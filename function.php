<?php
/*
function syntax

function sayhello($parameter,$parameter){
	//function body
}

*/

$var="mostafa";
echo gettype($var);
function sayHello(){
	$names=array("mostafa","ahmed","saleh","abdalla","mohamed","khled");
	for ($i=0; $i < 6; $i++) { 
		echo $names[$i]."<br>";
	}
}
sayhello();
function mostafa($name,$age)
{
	echo "hello"."&nbsp; ". $name." "."your age is"." ".$age;
}
mostafa("mostafa",19);
echo "<br>";
function pop($start,$end){
	echo "<select name='years'>";
	for($year=$start;$year<=$end;$year++)
	{
		echo "<option value='$year'>".$year."</option>";
	}
	echo "</select>";

}
pop(1900,2017);
pop(1950,2017);
echo "<br>";
function capu($age){
  return $age*365;
}
echo capu(90);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type=" "></style>
</head>
<body>

</body>
</html>