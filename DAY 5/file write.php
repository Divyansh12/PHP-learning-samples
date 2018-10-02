<?php




$file = "a1.txt";

if(!file_exists($file))
{
	$myfile=fopen($file, 'w')
    or die("unable to open file!");
    fwrite($myfile, "hello");
    fclose($myfile);
    echo "file create";
}
else
    echo "file exists";






?>