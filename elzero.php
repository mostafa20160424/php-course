<?php

$file=fopen('mostafa.txt', 'r+');
fseek($file, 3,SEEK_SET);
$content=fwrite($file, 'm');
fseek($file, 6,SEEK_CUR);
$content=fwrite($file, 'r');
fseek($file, -6,SEEK_END);
$content=fwrite($file, 'e');
$id=20160424;
function mostafa()
{
	echo $GLOBALS['id'];
}
mostafa();
if () {
	# code...
}
?>