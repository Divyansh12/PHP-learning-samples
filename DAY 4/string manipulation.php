<?php

$first="hello";
$last="there";
$greeting = $first."".$last;
echo $greeting;
$greeting1 = "$first $last";
echo $greeting1;
$c="   v a n s h   ";

echo strlen($greeting1);
echo strlen(trim($c));   # more examples :::  ltrim rtrim


#I M P L O D E     &&    E X P L O D E
$mailid = "vansh@gmail.com;vansh@hotmail.com;vansh@yahoo.com";

$arr = explode(";", $mailid);
foreach($arr as $i)
	echo $i."<br>";

$fname = array("vanh","kapoor");
$m=implode(":", $fname);
echo $m;



#and implode adds the values of different array with the delimiter specified and puts them in an array 