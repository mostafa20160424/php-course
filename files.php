<?php


$x='mm.txt';

$file=fopen($x, 'r');
$read =fread($file, filesize($x));
echo $read;
$bool=true;
if($bool==true)
{
	echo "<br>ziza";
}
