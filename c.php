<?php
if(empty($_SESSION['counter']))
{
	$_SESSION['counter']=1;

}
else
{
	$_SESSION['counter']++;
}
echo "<div>you have Viewed this Page". $_SESSION['counter'] .'Times</div>';
$str='mostafa';
$str2='abdelfattah saleh';
echo concat($str,$str2);