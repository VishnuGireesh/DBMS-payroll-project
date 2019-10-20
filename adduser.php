<?php
  include('configall.php');
  $a=$_POST["name"];
  $b=$_POST["adress"];
  $c=$_POST["mob"];
  $d=$_POST["email"];
  $e=$_POST["jdate"];
  $f=$_POST["dob"];
  $g=$_POST["gender"];  
  $h=$_POST["grade"];
  $i=$_POST["pass"]; 
$sql="INSERT INTO userreg (name,adress,phone,email,j_date,dob,gender,grade,pass) VALUES ('$a','$b','$c','$d','$e','$f',$g,$h,'$i')";
$test=mysqli_query($connection,$sql);
$sql="INSERT INTO employee (name,adress,phone,email,j_date,dob,gender,grade) VALUES ('$a','$b','$c','$d','$e','$f',$g,$h)";
$t=mysqli_query($connection,$sql);
if($test)
{
    echo "successfully inserted into database";
    header('Location: userreg.html');
}
else{
    echo "somthing is wrong";
}

?>