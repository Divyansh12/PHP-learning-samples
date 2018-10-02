<?php

show();
function show()
{
	  echo "hello";
}
show();

function  add($a,$b)
{
	return $a+$b;
}

echo add(4,3);
echo "hello"."&nbsp;&nbsp;&nbsp"."there";

=====================================================
$x=1;
$y=2;

function swap($m,$n)
{
	echo "a=".$n."b=".$m;
  

}
swap($x,$y);

#or
$m1=2;$n1=3;
function swap1(&$a,&$b)
{
$a=$a+$b;
$b=$a-$b;
$a=$a-$b;

}
swap1($m1,$n1);

?>