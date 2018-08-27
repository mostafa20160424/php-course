<?php
//copy(old file,new file)
if (!copy('arrays.php', 'copyfile.php')) {
	echo "sorry";
}
else {
	echo "success"."<br>";
}
//will print succcess if two file exist and will take all information in 'arrays.php' and put it in 'copyfile.php'
//and remove all old information
$original=__FILE__;
echo $original."<br>";
echo dirname(__FILE__);
require('session.php');



?>