<?php

class abc{
  function add($x,$y)
  {
  	return $x+$y;
  }
}
class def extends abc
{
	function mul($x,$y)
	{
		return $x*$y;
	}
}

$ob = new def();
$a=$ob->add(3,4);
$b=$ob->mul(3,4);
echo "add = ".$a."mul =".$b;



=========================================

#for multiple inheretence we use interface



 interface x{
 	function message($a);
 }
 interface y{
 	function add($x,$y);
 }

 class z implements x,y
 {
     function message($a){
     	echo "hello".$a;
     }
     function add($x,$y){
     	return $x + $y;
     }   
  }
  $ob = new z();
  $ob ->message("raj");
  echo $ob->add(4,3);   
 
 =======================================

  final class x{

  }
  class y extends x{

   }                                  ##ERROR is shown here as final class is not inhereted


 ?>