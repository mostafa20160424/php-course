<?php

$link= __DIR__.'/mostafa';
//$files=scandir($link,SCANDIR_SORT_NONE);
//scandir($links)//will sort ascending default value
$files=scandir($link,SCANDIR_SORT_DESCENDING);
echo "<pre>";
print_r($files);
echo "</pre>";

/********remove all file***************/
foreach ($files as $file) {
	if(is_file($link."/".$file))
	{
		unlink($link."/".$file);
	}
}