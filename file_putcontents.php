<?php
/*
file_put_contents(file,data, mode,context)
FILE_APPEND
LOCk_EX
FILE_USE_INCLUDE_PATH
*/

$file="trims.txt";

//file_put_contents($file, "mostafa",LOCk_EX);
//FILE_APPEND to edit the content not delet the old
//LOCk_EX to not allow any one to edit your file
file_put_contents($file, "<br>mostafa",FILE_APPEND | LOCk_EX);



?>