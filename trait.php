<?php

trait fingerprint
{
    public function says()
    {
        echo nl2br("\nHy Trait is Created\n");
        return $this;
    }
    public function nan()
    {
        echo "Hello World! finger print";
    }
}
trait ThreeD
{
    public function tolds()
    {
        echo "Hy Trait2 is Created";
        return $this;
    }
    public function nan()
    {
        echo nl2br("\nHello World ThreeD!\n");
    }
}
trait all{
  // use ThreeD,fingerprint;
}
class sasa
{

        
 /*
 use specified function if name is repeat
 {
      trait name :: method name instedof other method in trait name
 }
 rename function in specified trait
 {
     trait name::OldFunName as NewFunName;
 }
 use all to use threed,fingerprint
 */
    use ThreeD,fingerprint{
        fingerprint::nan as kaka;
        ThreeD::nan insteadOf fingerprint;
    }
}

class nosa extends sasa
{

}
$x=new nosa();
$x->says()->tolds();
$x->nan();
$x->kaka();

?>