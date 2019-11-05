<?php
  include('configall.php');
  
if (isset($_GET['edit'])) {
	
  $id = $_GET['edit'];
  
  $getinfo = "select name,adress,phone,email,j_date,dob,gender,grade from userreg where emp_id =$id";
  $query = mysqli_query($connection,$getinfo);

while ($row = mysqli_fetch_array($query)) {
    $a = $row['name'];
    $b = $row['adress'];
    $c = $row['phone'];
    $d = $row['email'];
    $e = $row['j_date'];
    $f = $row['dob'];
    $g = $row['gender'];
    $h = $row['grade'];
    $sql="insert into employee(emp_id,name,adress,phone,email,j_date,dob,gender,grade) values ($id,'$a','$b','$c','$d','$e','$f',$g,$h)";
    $jp=mysqli_query($connection,$sql);
  
}

$getinfo = "select email,pass from userreg where emp_id =$id";
  $query = mysqli_query($connection,$getinfo);
  while ($row = mysqli_fetch_array($query)) {
    $a = $row['email'];
    $b = $row['pass'];
    $sql="insert into ulogin(u_id,uname,pass) values ($id,'$a','$b')";
    $jp=mysqli_query($connection,$sql);
  
}
$sqll="DELETE FROM userreg WHERE emp_id=$id;";
$check=mysqli_query($connection, $sqll);
header('location: aprooval_page.php');


     

	
}

  


?>