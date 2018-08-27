<?php
$langs=array(
"html",
"css",
"php",
"java",
"pyton"
);
echo "<pre>";
print_r($langs);
echo "</pre>";
$last=array_pop($langs);//remove last elemnts and save in last
echo "<pre>";
print_r($langs);
echo "</pre>";
echo $last;
array_push($langs, "html5","css3");//put in end of array
echo "<pre>";
print_r($langs);
echo "</pre>";
array_unshift($langs, "javascript","oop","bootstrab");//put in satrt of array
echo "<pre>";
print_r($langs);
echo "</pre>";



?>