<?php


$array=array_fill(2,9,'mostafa');
echo '<pre>';
print_r($array);
echo '</pre>';

$str='mostafa';

$file=fopen('test.txt','r+');

fseek($file,2,SEEK_SET);
fwrite($file,'H');
