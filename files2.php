<?php


$file=fopen('int.txt', 'r+');
 echo file_get_contents('int.txt',false,null,0,10)."<br>";
$content=fread($file, filesize('int.txt'));
echo $content;
fwrite($file, 'mostafa',5);
file_put_contents('int.txt', 'koka',2);






?>