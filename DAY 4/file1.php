<?php


if(isset($_REQUEST['btns']))
 {
 	$dname=$_REQUEST['dname'];
  	if(!is_dir($dname))
  	{
	mkdir($dname);
	echo $dname;
    }
    else
    echo "already exists";
}



if(isset($_REQUEST['btnd']))
 {
 	$dname=$_REQUEST['dname'];
  	if(is_dir($dname))
  	{
	rmdir($dname);
	echo $dname."deleted";
    }
    else
    echo "doesnt exists"; 
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> LOGIN PAGE</title>
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

<div class="container">
  <div class="jumbotron">
    <div><form method="get" action="file1.php">
      ENTER DIRECTORY NAME :<input type="text" name="dname" value= <?php echo $dname; ?> /></form></div>
      <div><form  file1.php>
      <input type="submit" name="btns" value="create">
     <input type="submit" name="btnd" value="delete">
        </form></div>    
  </div>
</div>
</body>
</html>
