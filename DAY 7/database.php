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


if (isset($_REQUEST['emp_id']))
{
  $id = $_REQUEST['emp_id'];
  $name = $_REQUEST['emp_name'];
  $salary = $_REQUEST['emp_salary'];

  //$query="Insert into employee values($id,'$name',$salary)";
  // $query="Update employee set emp_name = '$name'
  //          where emp_id =$id";
    $query="Delete from employee where emp_id =$id";
 $res = mysqli_query($conn,$query);
 if ($res>0)
  //    echo "Record inserted";
  //    echo "Record updated";
     echo "Record deleted";
}
?>
