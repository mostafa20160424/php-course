<?php

/*
$_POST=$_GET
$_POST if you make form method post
$_GET if you make form method get
*/

$username=$_POST['username'];
echo 'your username '.$_POST['username'].'<br>' .'your password is '.$_POST['password'] .'<br>';

$admins=array('khaled','mohamed','saleh','mostafa','abdalla');

if ($_SERVER['REQUEST_METHOD']=='post') {

	if (in_array($username, $admins)) {
	echo "welcom " .$username." to control panel for admin";
	}
	else{
		echo "your this user name is not exist";
	}
	
}
elseif ($_SERVER['REQUEST_METHOD']=='get') {
	
}
echo "<br>".$_SERVER['REQUEST_METHOD'];