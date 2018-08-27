<?php

if(file_exists(__DIR__.'/php'))
{
	echo "sorry exits";
}
else  {
	mkdir(__DIR__.'/php')
};
$directory=__DIR__.'/php/';
file_put_contents($directory, 'test.txt','hello');