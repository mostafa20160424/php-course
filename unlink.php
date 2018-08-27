<?php

$file='read.txt';
if(is_writable($file)&&file_exists($file))
{
	echo "file deleted";
	unlink($file);//will delet the file
	echo "folder also deleted";
	

}
else {
	rmdir('mostafa');//kmdir() creat folder
	echo "sorry file is not writable relod to delet";
	chmod($file, 0755);//to change permision readonly
}



?>