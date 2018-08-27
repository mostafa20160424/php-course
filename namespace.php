<?php


require 'classTesting2.php';
require 'classTesting1.php';
/*To require All Classes
spl_autoload_register(function($class){
    require $class;
});
*/

$x=new sony\phones();
$x->phone();
$y=new lenovo\phones();
$y->phone();
echo "<pre>";
print_r($_SERVER);
echo "</pre>";



?>