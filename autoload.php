<?php
spl_autoload_register(function($class){
 require 'class' . $class . '.php';
});
$x=new AutoLoad();
print_r($x);