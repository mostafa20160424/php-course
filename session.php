<?php
session_start();//Start Or Resume Session
$_SESSION['username']='mostafa';
$_SESSION['age']=19;
echo $_SESSION['age'];
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
echo "<a href='page2.php'>room 2</a>";
echo strripos('mostafa','a', -3);



