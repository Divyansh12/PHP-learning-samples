<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div style="text-align:center">


    <form method ="get" action ="">
    emp id:    <input type = "text" name ="emp_id"/><br><br>
    emp name:  <input type = "text" name ="emp_name"/><br><br>
    emp salary:<input type = "text" name ="emp_salary"/>
    <br><br>
    <input type = "submit" name ="btnsubmit" value="insert"/>
    <br><br>
    </div>
  </body>
</html>
<?php
$conn = mysqli_connect('localhost','root','','phpdata')
or die("Unable to connect to mysql database");

  //$query="Insert into employee values($id,'$name',$salary)";
  // $query="Update employee set emp_name = '$name'
  //          where emp_id =$id";
  //  $query="Delete from employee where emp_id =$id";
  $query="select * from employee";

 $res = mysqli_query($conn,$query);
 // if($res>0)
 while ($row = mysqli_fetch_array($res))
{  //    echo "Record inserted";
  //    echo "Record updated";
  //   echo "Record deleted";
  echo "Id = ".$row[0]."<br>";
  echo "Name = ".$row[1]."<br>";
  echo "Salary = ".$row[2]."<br>";
  echo "<hr>";  
}
?>
