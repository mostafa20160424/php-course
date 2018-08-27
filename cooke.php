<?php
/*
setcookie(name,value,expire,path,domain,secure,httponly)
Name:Name of the cookie
Value:Content of the Cookie
Expire:cookies expiration date
path:if you put '/' mean avilable in all website pathes and its the default
secure:send by https
httponly:avalilable in all browser and scripts like nodeJS
*/
try{
    setcookie('school','mostafa',time()+8600,'/','localhost',TRUE,TRUE);//1 day
    if(isset($_COOKIE['school'])){
        echo "yes";
    }
}
catch(Exception $ex)
{
    echo $ex->getMessage();
}


?>