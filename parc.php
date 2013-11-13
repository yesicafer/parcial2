<?php
//$x=1;
//$y=$x;
//$z=$y+1;
//$l=$z;
//$f=$l+1;

$y=$_GET['numero1'];
    $variable=1;
 $variable2=0;

for($x=0;$x<$y; $x++)
{
 
  
    $res=$variable+$variable2;
  $variable=$variable2;
    $variable2=$res;
   
      echo $res;
}





?>
