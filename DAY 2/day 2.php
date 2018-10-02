<?php

$car = array("bmw","toyota");
echo "i like ".$car[0]."and".$car[1]."." ;

===============================================================

$ab = array("vansh","an","run");
print_r($ab);
rsort($ab);
foreach ($ab as $a) 
	echo "<br>".$a;

===============================================================

$age = array("peter"=>"35","ben"=>"37","joe"=>"43");
       #or
#$age['peter'] = "35";

print_r($age);
ksort($age);
foreach ($age as $x =>$x_value)
{
	  echo "<br>";
	  echo "key = ".$x ."," . "value =" . $x_value;
	  
}

#another way
#echo "peter is".$age['peter']

 #for multidimensional array
================================================================

$bands = array(
                    array(1,2,3),
                    array(4,5,6)
);
echo $bands[0][1];

================================================================

$marks = array(
                "abc"=>array(
                             "physics"=>3,
                             "maths"=>25,
                             ),
                "def"=>array(
                             "eng"=>35,
                             "hindi"=>40,
                             ),
                10=>30
);

echo $marks[10];

================================================================


$cars = array
(
 array("volvo",33,36),
 array("bmw",34,56),
 array("erf",65,89)
);  

echo $cars[1][1];
?>