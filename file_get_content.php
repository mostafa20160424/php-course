<?php


/*
echo file_get_contents('http://www.google.com');
will take all php code and put it on the page
*/
echo file_get_contents('read.txt',false,NULL,6,10)."<br>";
//will read from index 6
//lenght is 10 charcters with spaces
echo var_dump( file_get_contents('read.txt',false,NULL,6,10));

?>