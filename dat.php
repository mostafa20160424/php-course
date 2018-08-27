<?php


/*
date(format,timestamp)
strtotime(date,now)
*/
$nextmonth= time()+(30*24*60*60);//+month have 30day day have 24hour hour have 60minuts have 60seconds;

/********* date_default_timezone_set('Africa/Egypt'); to chore your place***********/

echo date('Y-m-d h:i:s',$nextmonth).'<br>';
echo date('l j:S \of F Y h:i:s A').'<br>';

/*
strtotime('+1:any number day')time after day
strtotime('+1:any number year')time after year
strtotime('+1:any number month')time after month
strtotime('next thurseday')
strtotime('last monday')
strtotime('+1 week 2 day 6 hours')time after week and 2day and 6hours
*/



$time=strtotime('now',time()-3600);

echo date('l j:S \of F Y h:i:s A',$time).'<br>';

$dat=strtotime('next friday');
echo date('l j:S \of F Y h:i:s A',$dat);
// day:d,j
//month:m
//year:y 16,Y 2016
//minuts:i
//hour:h 12 hour format,H 24 hour format
error_reporting(0);
$num=100;
echo $numzz;
?>