<?php

$array=array(
	"html"=>"10%",
	"css"=>"20%",
	"php"=>"30%",
	"js"=>"40%",
	"python"=>"50%"
);
if (array_key_exists("js", $array)) {
	echo "<br>"."yes its found "."<br>";
}

if (in_array("mostafa", $array)) {
	echo "yes it exist";
}
else{
	echo "no";
}
$langs=array("arabic","english","italiano","germany");
echo "<pre>";
print_r($langs);
array_push($langs, "ajax","ruby");//=array_shift(array)
print_r($langs);
array_unshift($langs, "french","somaly");
print_r($langs);
echo "</pre>";
$last=array_pop($langs);//last member
echo "<pre>";
print_r($langs);
echo "</pre>";
echo $last."<br>";
$first=array_shift($langs);
echo $first;
?>