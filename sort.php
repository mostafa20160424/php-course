<?php


$array=array(
   'mostafa'=> 3,
   'ahmed'  => 2,
   'saleh'  => 1
);

echo "<pre>";
 print_r($array);
echo "</pre>";
ksort($array,SORT_REGULAR);
echo "<pre>";
print_r($array);
echo "</pre>";
echo file_get_contents("test.txt",false,null,0,1)."<br>";//file_get_contents("test.txt",false,null,start,end+1);
$connect=mysqli_connect('localhost','root','','shop');
if(mysqli_errno($connect))
{
    echo 'error';
}
$query="SELECT * FROM users ";
$result=mysqli_query($connect,$query);

//$row=mysqli_fetch_array($result);this wrong way must put in the loop

/*if(mysqli_num_rows($result)==1)
{
    echo nl2br("exist\n");
}*/
while($row=mysqli_fetch_array($result))//must put by this way
{
    echo $row['Username']."<br>";
}