<?php

if(isset($_REQUEST['btn']))

$file = $_REQUEST['fname'];

if(!file_exists($file))
{
	$myfile=fopen($file, 'w')
    or die("unable to open file!");
    fwrite($myfile, $_REQUEST['txt']);
    fclose($myfile);
    echo "file create";
}
else
  echo "file exists";

?>

<!DOCTYPE html>
<html>
<head>
	<title>fie write</title>
	 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
           <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
           <style type="text/css">

           .container{
           	padding-left:30%;
           	
           }
           	 .jumbotron{
           	 	width: 40%;
           	 	margin-top: 150px;
           	 	font-weight: 700;
           	 }
           	 .btn{
           	 	align-content: center;
           	 	padding-left: 59px;
           	 }
           	 body{
           	 	background-color: grey;
           	 }
          </style>
</head>
<body>
	<div class="container">
	<div class="jumbotron">
		<div><form method="get" action="ff.php">
			FILE NAME :<input type="text" name="fname" />
        </div>
        <div>
            FILE TEXT : <input type="text" name="txt" />	
        </div>
        <div class="btn">
        	<input type="submit" name="btn" value="login">
        </div>
		
	</div>
</div>

</body>
</html>
