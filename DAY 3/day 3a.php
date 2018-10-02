<?php

 
     $a = null; 
	 $x=$_GET['x'];
	 $y=$_GET['y'];

if(isset($_GET['add']))
{
   $a =  add($x,$y);	
    echo $a;
} 

else if(isset($_GET['mul']))
{
	 $a= mul($x,$y);
	  echo $a;
}

else
{  
	  $a=div($x,$y);
	echo $a;
}


function add($m,$n){

	$z = $m + $n;
	  return $z;
}
function mul($m,$n){

	$z = $m * $n;
	 return $z;
}
function div($m,$n){

	$z = $m / $n;
	  return $z;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="" action="">
	value of x :<input type="text" name="x" />
	value of y :<input type="text" name="y" />
	result :<input type="text" name="z" value=<?php echo $a ; ?> />
	<input type="submit" name="add" value="btna">
	<input type="submit" name="mul" value="btnm">
	<input type="submit" name="div" value="btnd">
	

</body>
</html>