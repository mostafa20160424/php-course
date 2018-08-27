<?php

$str="i love php so much";
$peice=substr($str, 10,6);
//delete 10 word with spaces he count spaces
//print tow spaces and 4 word
echo $peice."<br>";
echo substr($str, -4,-3)."<br>";
echo substr($str, -10,4)."<br>";
echo substr($str,-10)."<br>";//print last 10 characters
echo substr($str,10).'<br>';//delet first 10 characters
//start count from right and take 4word with spaces form left to right
//substr_count(string, Substring,start,length)
$string="i love php very much because its very easey";
$count=substr_count($string, "php",1,30);// will find number of repeat"php" from index 1 to30
echo $count."<br>";
echo strlen($string)."<br>";
$str1="mostafa abdo";
$str2="abdo";
echo substr_compare($str1, $str2, 0)."<br>";
echo substr_compare($str1, $str2, 8,4,true)."<br>";//abo in str1 start in index 8
