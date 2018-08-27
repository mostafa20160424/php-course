<?php
/*
$str="hello i love php";
echo $str."<br>";
$arr=str_split($str,3);
echo "<pre>";
print_r($arr);
echo "</pre>";
*/
/*
str_repalce:str_replace(search,replace,string,count)
*/
$str="hello i love php too much because its good and easy";
echo $str."<br>";
$arr=chunk_split($str,1,"-");
echo $arr."<br>";
$str2=str_replace("php", "javascript", $str,$i);
//not require write count
echo $str2."<br>";
echo "reolacements count ".$i."<br>";
$trim=trim($str);
echo str_replace(array("hello","love"), array("welcome","like"), $str)."<br>";

$str3="i love php so much & also javascript";
echo $str3."<br>";
$count=str_word_count($str3);
echo $count."<br>";
$count2=str_word_count($str3,2);
echo "<pre>";
print_r($count2);
echo "</pre>";

$str3="i love php so much & also javascript";
echo $str3."<br>";
$count=str_word_count($str3);
echo $count."<br>";
$count2=str_word_count($str3,2,"&");
echo "<pre>";
print_r($count2);
echo "</pre>";
if(in_array(needle, haystack))
/*
str_word_count($str3,1);
will regard evry word elemnts in array and neglegent spaces
str_word_count($str3,1);
will regard evry word elemnts in array and not neglegent spaces
it regard one space elemnts have index
*/
$array2=array_fill(-3, 10, array_fill(1, 10, mostafa));
echo "<pre>";
print_r($array2);
echo "</pre>";
?>