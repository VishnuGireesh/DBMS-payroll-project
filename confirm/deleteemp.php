<?php
  include('configall.php');
       
      /* $sql="SELECT Employee_id,Name,Email,salary,loan,jobtitle,Depart_id,pfund FROM `employee`;";
       $result=mysqli_query($connection,$sql);*/


 

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    //$mail = $_GET['mail'];
    $sqll="DELETE FROM userreg WHERE emp_id=$id;";
    $check=mysqli_query($connection, $sqll);
    //$sqll="DELETE FROM employee WHERE email='$mail';";
   // $check2=mysqli_query($connection, $sqll);
    
	if($check)
    {echo"Done dana Done";
    header('location:aproove.php');
    }
    else{
        echo"Failed";
    }
   //header('location: aproove.php');
	
}


  


?>