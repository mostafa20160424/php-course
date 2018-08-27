<?php

$workers=array("Mostafa","Ahmed","Khaled",array("jquery","javascript","bottstrab"),"Nader","Galal");
echo "<pre>";
print_r($workers);
echo "</pre>";
echo $workers[3][2];
echo "<ul>";
for ($i=0; $i<6 ; $i++) { 
	if ($i==3) {
		for ($n=0; $n <3 ; $n++) { 
			echo "<li>".$workers[$i][$n]."</li>";
		}
	}
	if ($i!=3) {
		 echo "<li>".$workers[$i]."</li>";
	}
}
$langs=array(
	"html"   =>"60%",
	"html5"  =>"70%",
	"css"    =>"65%",
	"css3"   =>"60%",
	"php" 	 =>"60%",
	"python" =>"70%",
	"ruby"   =>"65%",
	"java"   =>"60%",	

);
$langs["mysql"]="75%";
echo "<ol>";
foreach ($langs as $key => $value) {
	echo "<li>".$key."=>".$value."</li>";
}
if ($langs["css3"]=="60%") {
	echo "<br>"."yes its value =".$langs["css3"]."<br>";
}
echo "</ol>";
$diet=array(
	"dayone"=>array("meat","chicken","donky","main"),
	"daytwo"=>array("bannana","juice","watermellon","beache")
);
echo $diet["dayone"][0]."<br>";
foreach ($diet as $key => $value) {
	echo $key."=>".$value[0];
	echo "<br>";
}
?>