<?php
session_start();
$_SESSION['age']=20;
echo 'hello '.$_SESSION['username'].'<br>';
echo "your age is ".$_SESSION['age'].'<br>';
echo "<a href='session.php'>main page</a>";

session_unset();

session_destroy();
echo "<pre>";

print_r($_SESSION);

echo "</pre>";