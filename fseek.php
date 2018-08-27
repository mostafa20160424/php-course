<?php

$fp=fopen('kiko.txt', 'r+');

fseek($fp, 3,SEEK_SET);
$write=fwrite($fp, 'm');

fseek($fp,4,SEEK_CUR);
$write=fwrite($fp, 'z');
fseek($fp, -2,SEEK_END);
fwrite($fp, 'r');

?>