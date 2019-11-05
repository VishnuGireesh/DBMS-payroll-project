<?php

include "configall.php";
session_start();

?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="add_salary.css">
<script src="https://kit.fontawesome.com/8877312db4.js" crossorigin="anonymous"></script>
<style>
        .navbar a {
        float: left;
        font-size: 16px;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }
        .dropdown {
        float: left;
        overflow: hidden;
      }
      
      .dropdown .dropbtn {
        font-size: 16px;  
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
      }
        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }
      
      .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
      }
      
      .dropdown-content a:hover {
        background-color: rgba(0,0,0,0.2);
      }
      
      .dropdown:hover .dropdown-content {
        display: block;
      }
      
      
      </style>
      <body>
      
      <!-- Navigation -->
      
      
<nav class="w3-bar w3-black">
  <a href="#" class="w3-button w3-bar-item"><i class="fa fa-home"></i>&nbsp;Home</a>
  <a href="current_month_salary.php" class="w3-button w3-bar-item">Current Month Salary</a>
  <a href="#" class="w3-button w3-bar-item">Salary History</a>
  </div>

  <a href="#" class="w3-button w3-bar-item"></a>
  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fas fa-sign-out-alt"></i>&nbsp;Log Out</a>
  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-fw fa-user"></i>&nbsp;Profile</a>
</nav>


<h2 align="center">My Salary</h2>
<!--<p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p>
-->
<div class="container">

<?php
             $uname=$_SESSION['username'];

          $qry="select grade from employee where email='$uname'"  or die (mysqli_error());

          $res=mysqli_query($connection,$qry);
            $gr=0;
          while($row=mysqli_fetch_array($res))
          {
              $gr=$row['grade'];
          }

     

            $y= date("Y");
            $m= date("m");



            $qry1="select * from salary where  month=$m and grade=$gr"  or die (mysqli_error());
           
            $res2=mysqli_query($connection,$qry1);

                $hr=0;
                $pf=0;
                $ta=0;
                $tt=0;
                $ba=0;
               
               
           
        while($row1=mysqli_fetch_array($res2))
          {
              $hr=$row1['hr'];
              $pf=$row1['pf'];
              $ta=$row1['ta'];
              $tt=$row1['total'];
          }
            $ba=$tt-($hr+$pf+$ta);
         ?>

    <form>

    <div class="row">
            <div class="col-25">
                <label for="incr">Year</label>
            </div>
            <div class="col-75">
                <input type="number"  name="year" class="form-control"   value="<?php echo date("Y"); ?>" disabled>
            </div>
        </div>

    <div class="row">
            <div class="col-25">
                <label for="incr">Month</label>
            </div>
            <div class="col-75">
                <input type="number"  value="<?php echo date("m"); ?>" disabled>
            </div>
        </div>


        <div class="row">
            <div class="col-25">
                <label for="incr">Basic Pay</label>
            </div>
            <div class="col-75">
                <input type="number"  id="bpay" name="bpay" value="<?php echo $ba; ?>" disabled>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="incr">HR</label>
            </div>
            <div class="col-75">
                <input type="number" name="hr" value="<?php echo $hr; ?>" disabled>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="incr">PF</label>
            </div>
            <div class="col-75">
                <input type="number" name="pf" value="<?php echo $pf; ?>" disabled>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="incr">TA</label>
            </div>
            <div class="col-75">
                <input type="number" name="ta" value="<?php echo $ta; ?>" disabled>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="incr">Total</label>
            </div>
            <div class="col-75">
                <input type="number" name="ta" value="<?php echo $tt; ?>" disabled>
            </div>
        </div>

    </form>

  

</div>


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-pinterest-p"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <p class="w3-medium">
  Powered by <a href="#" target="_blank">First Group</a>
  </p>
</footer>

</body>
</html>

