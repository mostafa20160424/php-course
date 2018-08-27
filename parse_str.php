<?php

$link="name=mostafa&age=19&year=2017&skill=-9";
parse_str($link,$array);
/*
echo $name." ".$year." ".$age;
after make it array you cannot print value
strpos(haystack, needle,offset)
needle : search
haystack : string
offset start from
*/
echo "<pre>";
print_r($array);
echo "</pre>";
$str="heloo i \nlove \nphp";
echo nl2br($str);
$str2="i love c programming language but heat the doctors of this subject";
echo "<br>".strripos($str2, "c",-1);
echo "<br>".stripos($str2, "c",8);
/*-3 that count end in word e because -3 start count froam right and after count finish search froam left on first word c then print its place*/
$str3="i love php very much";
$char=strstr($str3, "very",true);
echo "<br>".$char;
$string1="phpphp";
$string2="phpp";
echo "<br>".strcmp($string1, $string2)."<br>";
echo strncmp($string1, $string2, 4)."<br>";
//will print zero because first 4words in string one and two are similar
echo trim($str);
?>