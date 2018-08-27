<?php

$name='mostafa';
function mostafa(){
	
	echo $name;//eroor
}
mostafa();
echo $name."<br>";

/************** super glopal ***************/
$myname='mohamed';
function khaled(){
	echo $GLOBALS['myname'];
	$GLOBALS['id']=20160424;
}

khaled();
echo $id;
?>
<a href="server.php">click</a>