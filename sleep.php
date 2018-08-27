<?php


/*
sleep(seconds)=delay
usleep(microseconds)
time_sleep_until(time()+5) time you are in +5 seconds

exit=die
*/

function kiko(){
	if (file_exists('mostafa.txt')) {
		echo "good file is found".'<br>';
	}
	else{
		sleep(5);
		kiko();

	}

}
 kiko();

 $name='mostafa';

 echo $name.'<br>';

 $random=uniqid('Script1_',TRUE);//uniqid('Script1_',TRUE); true make number mor random
 echo $random.'<br>';

 var_dump($random.'<br>');
 exit('code is break');//break file
 echo "heloo".$name;