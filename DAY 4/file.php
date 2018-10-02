<?php

$a = "c:/vansh";

if(!is_dir($a)){
	mkdir($a);
	echo "created".$a;
}
else
echo "it already exists at ".$a;



if(is_dir($a)){
	rmkdir($a);
	echo "deletedcreated".$a;
}
else
echo "not found ".$a;




?>