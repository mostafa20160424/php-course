<?php
/*sort:sort(array,sort type)
rsort:sort(array,sort type)inverse of sort
*/

$langs=array(
"30",//string	
"html",
"html5",
10,//number
"css",
"css3",
20,
"js",
"php",
15
);
echo "<pre>";
print_r($langs);
echo "</pre>";

sort($langs, SORT_STRING);//sort number first

echo "<pre>";
print_r($langs);
echo "</pre>";

sort($langs, SORT_REGULAR);//sort string first

echo "<pre>";
print_r($langs);
echo "</pre>";

rsort($langs, SORT_STRING);//convert all elements into string and sort

echo "<pre>";
print_r($langs);
echo "</pre>";

rsort($langs, SORT_REGULAR);//sort string first

echo "<pre>";
echo "</pre>";

/*
sort value
associative array
asort:sort(array,sort type) sort only value ascinding
arsort:sort(array,sort type)inverse of sort sort only value descinding
*/

$progrram=array(
"html"	   =>80,
"css"	   =>90,
"html5"	   =>60,
"css3"	   =>50,
"bootstrab"=>40
);
echo "<pre>";
print_r($progrram);
echo "</pre>";

asort($progrram, SORT_REGULAR);//sort value in ascinding
echo "<pre>";
print_r($progrram);
echo "</pre>";

/*
sort key
associative array
asort:sort(array,sort type) sort only key ascinding
arsort:sort(array,sort type)inverse of sort sort only key descinding
*/
ksort($progrram, SORT_REGULAR);//sort key by english words
echo "<pre>";
print_r($progrram);
echo "</pre>";

krsort($progrram, SORT_REGULAR);//sort value in from start to end
echo "<pre>";
print_r($progrram);
echo "</pre>";
?> 