<?php

if(isset($_REQUEST['btn']))
{
  $name=$_FILES['fname']['name'];
  $size=$_FILES['fname']['size'];
  echo "file name = ".$name."size = ".$size;

  $r=explode(".", $name);
  echo "<br>";
  echo $r[1];

  if($r[1]=="exe")
   	{
    
    echo "file not upload";
    
    }
  
  else
  
  { 
    #to upload  an image file to a folder you make 
    $ab="images/".$name;
    move_uploaded_file($_FILES['fname']['tmp_name'],$ab);
  	echo "file upload";
  
  }

}




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
		<div><form method="post" action="ff.php" enctype="multipart/form-data">
			FILE NAME :<input type="file" name="fname" />
        </div>
        <div class="btn">
        	<input type="submit" name="btn" value="submit">
        </div>
		</form>
	</div>
</div>

</body>
</html>

