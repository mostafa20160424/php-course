<?php

$file="mostafa.txt";
if(file_exists($file))//if(is_writable($file)) that if you make file txt read only he will go to else directory  
{
	echo "the file [".$file."] found"."<br/>";
	file_put_contents($file, 'added with php file put content ');
	//if file not create file_put_contents create it
}
else{
	echo "the file".$file."not found";
}
$name='mostafa';
mkdir($name);
//will make folder his name mostafa
if(is_dir($name))
{
	rmdir($name);//delet folder
	echo "folder deleted"."<br>";
}
else{
	echo "file not deleted";
}
echo __FILE__."<br>";//will print file place
echo dirname(__FILE__);//will print folder place that the file in
filter_var($name,FILTER_SANITIZE_EMAIL);
if(filter_var($name,FILTER_VALIDATE_EMAIL))
{
	echo "ok";
}
else
{
	echo nl2br("\n you are donky");
}