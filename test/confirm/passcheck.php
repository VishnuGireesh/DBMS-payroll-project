<?php
 session_start();
 require('configall.php');
 if(isset($_POST['username']) and isset($_POST['password'])){
     $username=$_POST['username'];
     $password=$_POST['password'];
     
     $query="SELECT * FROM admin WHERE usrname='$username' and password='$password'";
     
     $result=mysqli_query($connection,$query) or die(mysqli_error($connection));
     
     $count=mysqli_num_rows($result);
     
     if($count==1)
     {
         $_SESSION['username']=$username;
         echo"You have logged in successfully";
         
         header("location: admin_home.php");
     }
     elseif($count==0){
        $query="SELECT * FROM ulogin WHERE uname='$username' and pass='$password'";
     
        $result=mysqli_query($connection,$query) or die(mysqli_error($connection));
        
        $count2=mysqli_num_rows($result);
        
        if($count2==1)
        {
            $_SESSION['username']=$username;
            echo"You have logged in successfully";
            
            header("location: user_home.php");
        }
        else{
            ?>
            <script>
                alert("Invalid Username Or Password")
                window.location="login.php";
            </script>
            <?php
            
        }
    }
     else{
         ?>
         <script>
             alert("Invalid Username Or Password")
             window.location="login.php";
         </script>
         <?php
         
     }
   
 }




 
?>