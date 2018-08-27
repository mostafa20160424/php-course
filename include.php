<?php

include "glopal.php";
//inclue=require
//will take glopal page and put its information in this page
echo $page."<br>";

$browser="google";
switch ($browser) {
	case "firefox":
	case "mozilla firefox":
		echo "your favorite browser is firefox";
		break;
	
	case 'google':
	case "google chrom":
		echo "your favourite browser is google  ";
		break;
	default:
		break;
}