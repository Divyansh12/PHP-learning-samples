<?php

function check($age)
{
	if($age<18)
		throw new Exception("you cant vote", 1);
	else
        echo "you can vote";
}
try 
{
 check(13);

} 
catch (Exception $e) {
	
	echo "message : ".$e->getMessage();
}



?>