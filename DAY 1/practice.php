<?php

echo " PROGRAM 1"."<br>";
$a="d";
$b=20;
$c=$a + $b;
$d =$a.$b;
echo "<br>";


echo " PROGRAM 2"."<br>";
echo "<br>";
echo "d=".$d;
echo "<br>";
echo "addition=".$c;
echo "<br>";


echo " PROGRAM 3"."<br>";
$a=90;
$b=90.3;
$c=$a.$b;
echo $c;
echo "<br>";


echo " PROGRAM 4"."<br>";
$x=50;
$s = $x>40?($x*4+5000):($x<40?($x*3+5000):5000);
echo $s;
echo "<br>";


echo " PROGRAM 5"."<br>";
$ch=1;
switch($ch)
{
   case 1 : echo "one";
            break;

   case 2 : echo "two";
            break;

   case 3 : echo "three";
            break;

   default : echo "none";
            exit();
}



for($i=1;$i<=10;$i++)
	echo $i;


$m=1;
while ($m<= 10) {
    echo $m;	
    $m++;
}


$n=1;
do{
     echo $n;
     $n++;
}while($n<=10)




?>