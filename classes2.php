<?php


/****************Note**************
Array Can Be Represented By [] Like

['name'=>'mostafa','pass'=>'123']=arrray('name'=>'mostafa','pass'=>'123')


***********************************/
class Request
{
    protected $mostafa;

    public $app;
    
        public function __construct(Application $app)
        {
            $this->app=$app;
        }
    
}

class Application
{
    public $x,$y,$z;


    public function say(Application $z)
    {
        echo $this->x;

        echo $z->y;
    }

    public function say2(Application $n)
    {
        $n->y=' kaheld ';
        echo $n->y;
    }
}

$x=new Application();
$x->x=' 5 ';

echo $x->x;

$y=new Application();

$y->y='mostafa';

$x->say($y);

$x->say2(new Application());

$q=['name'=>'mostafa','pass'=>'123'];
echo $q['pass'];