<?php
//explode(seprator,string,limit)
//will take 4 elments and after 4 elemnts will regard 1 elemnts
//after evry , will reagard elements
//if limit=-1 will remove last elemnts 
//it means from last to end
/*
implode(seprator,array)
join(seprator,array )
join nick name from implode
*/
$str="hello,world,i,love,php,too,much";
echo $str. '<br>';

$arr=explode(",", $str,-1);

echo "<pre>";
print_r($arr) ;
echo "</pre>";
for ($i=0; $i <count($arr) ; $i++) { 
	echo "<link rel='stylesheet' href='css/".$arr[$i].".css'>";
}
$and=implode("&",$arr);
print_r($and);
$arr2=str_split($str);
echo "<pre>";
print_r($arr2);
echo "</pre>";

?>