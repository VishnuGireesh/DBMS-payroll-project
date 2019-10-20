<?php
  include('configall.php');
  
if (isset($_GET['edit'])) {
	
  $id = $_GET['edit'];
  $a=$_GET['a'];
  $b=$_GET['b'];

     

       /*$sql="INSERT INTO ulogin (u_id,uname,pass) VALUES ($id,'$d','$i')";

       $j=mysqli_query($connection,$sql);

     

    /*$sqll="DELETE FROM userreg WHERE emp_id=$id;";
    $check=mysqli_query($connection, $sqll);*/
    
	/*if($check)
    {echo"Done dana Done";
    header('location:aproove.php');
    }
    else{
        echo"Failed";
    }
   /* header('location: aproove.php');*/
	
}

  


?>