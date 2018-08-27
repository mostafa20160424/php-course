<?php
$array=array("mostafa","khaled","mahmoud","ibrahim","Sayed");

echo "<pre>";
print_r(array_slice($array,1, 3));
echo "</pre>";
echo "<pre>";
print_r(array_splice($array, 1,3));
echo "</pre>";