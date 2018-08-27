<?php
/*
pathinfo(path,option)
*/
echo "<pre>";
print_r(pathinfo(__FILE__));
echo "</pre>";
print_r(pathinfo(__FILE__,PATHINFO_FILENAME)."<br>");
print_r(pathinfo(__FILE__,PATHINFO_DIRNAME)."<br>");
$links=pathinfo(__FILE__);
echo $links['filename'];
?>