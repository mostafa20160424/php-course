<?php
include "classTesting1.php";
include "classTesting2.php";

class mostafa
{
	public $r="ana ";
	const filename="mostafa.txt";
	public static $filepass="C::\User";

	public function printss()
	{
		echo "mostafa in printss function";
	}

	public function __construct()
	{//construct is first thing done in class
		//you cant create more than one construct
		echo "Constructor mostafa<br>";
		$this->filecount="tst.txt";//if filecount varialbe not exist php will create
	}

	public static function statics()
	{
		echo "<br/>Static function<br>";
	}
	public function __call($method,$params)//occure when you call function not exist in class
	{
		echo '<br>The Method ['.$method.'] is not Found';
		print_r($params);
	}

	public function __destruct()
	{//destruct is last thing done in php page
		echo '<br/>destruct is occure last thing';
	}
}
class khaled extends mostafa implements mohamed
/*only extends from one class but can implements more interfaces int1,int2,...*/
{
	
	public $dbpass='root';
	public static $myname="Elehro";
	/*if you put construct here php will negeligate the construct of the parent class "motasfa"
	its regard ovvride of construct
	public function __construct()
	{the only way to do two construct is to put
		parent::__construct();
        echo "<br>constructor<br>";
	}*/
	public function __construct()
	{
		//static variable call with class::$variable cons call with class::variable
		
		//  parent::(any static variable or any function not must be "static"

		parent::__construct();
		parent::statics();
		parent::printss();//printss() function is not static :)
		echo "<br>".parent::$filepass;

		//self:: any static variable or any function not must be "static"

		echo "<br>".$this::filename."<br>";//self::$myname
		echo self::prints()."<br>";
        echo "Constructor khaled<br>";
	}
	public function prints()
	{
		$this->dbname="Company";//will create dbname variable in class if not exist

		echo "khaled";
	}
	public function mostafa()//
	{
		echo "mohamed";
	}
}
abstract class askm{
	public function prints()
	{
		echo "<br>fd";
	}
}
interface mohamed
{
	public function mostafa();/*all function here must be ovverride 
	in class implements from interface*/
}
$x=new khaled();
$x->r='mostaf';
/*------------------two ways of calling any function------------------*/
$x->printss();
$x::statics();
/*------------------End------------------*/
echo $x->r;
echo khaled::filename.'<br/>';//const variable
echo khaled::$filepass;//static variable
print_r( $x);

$x->sayHello("mostafa","karim");

$z=new sony\phones();

$y=new lenovo\phones();
/*$z=new askm(); error cannot make object of abstract*/