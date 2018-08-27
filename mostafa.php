<?php
$countrys=array(
	"EG"=>"egypt",
	"FL"=>"flestin",
	"AM"=>"amrica",
	"MO"=>"mocro",
	"TS"=>"tuns"
	);
foreach ($countrys as $key =>  $value) {
	echo "<h1>".$value."</h1>". $key ."<br>";   
}
/*array_fill(index start,number,value)*/
$langs=array_fill(2, 10, "mostafa");
echo "<pre>";
print_r($langs);
echo "</pre>";
$array=array(3,6,5,4,3,2,1);
$sum=array_sum($array);
echo $sum;
$mego=array(
0=>"mostafa",
1=>10,
2=>12,
1=>1.5
);
echo array_sum($mego);//print sum of value not key and neglent string
$mostafa=array("mostafa","mohamed","mostafa","saleh","abdalla");
/*array_rand(array,number of elemnts )*/
$random=array_rand($mostafa,2);
echo $mostafa[$random[0]]."<br>";
echo $mostafa[$random[4]]."<br>";
//will print mostafa &mohamed and change its place
echo "<pre>";
print_r($mostafa);
echo "</pre>";
$uniq=array_unique($mostafa);//remove any thing repeat
echo "<pre>";
print_r($mostafa);
echo "</pre>";
?>