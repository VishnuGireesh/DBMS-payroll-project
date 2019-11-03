<?php

include "configall.php";

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
  <a href="admin_home.php" class="w3-button w3-bar-item"><i class="fa fa-home"></i>&nbsp;Home</a>
  <a href="aprooval_page.php" class="w3-button w3-bar-item">Aproovals</a>
  <a href="add_salary.php" class="w3-button w3-bar-item">Add Salary</a>
  

  <a href="view_employee.php" class="w3-button w3-bar-item">View Employee</a>
  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fas fa-sign-out-alt"></i>&nbsp;Log Out</a>
  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-fw fa-user"></i>&nbsp;Admin</a>
</nav>

<h2 align="center">Set Salary</h2>
<!--<p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p>
-->
<div class="container">
    <form method="post">

    <div class="row">
            <div class="col-25">
                <label for="incr">Year</label>
            </div>
            <div class="col-75">
                <input type="number"  name="year" class="form-control"   value="<?php echo date("Y"); ?>" readonly>
            </div>
        </div>

    <div class="row">
            <div class="col-25">
                <label for="incr">Month</label>
            </div>
            <div class="col-75">
                <input type="number"  value="<?php echo date("m"); ?>" readonly>
            </div>
        </div>


        <div class="row">
            <div class="col-25">
                <label for="country">Grade</label>
            </div>
            <div class="col-75">
                    <select id="grade" name="grade" onchange="jsFunction(this.value);">
                        <option value=0>--Choose--</option>
                        <option value=1>Grade 1</option>
                        <option value=2>Grade 2</option>
                        <option value=3>Grade 3</option>
                    </select>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="incr">Basic Pay</label>
            </div>
            <div class="col-75">
                <input type="number"  id="bpay" name="bpay" readonly>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="incr">HR</label>
            </div>
            <div class="col-75">
                <input type="number" name="hr">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="incr">PF</label>
            </div>
            <div class="col-75">
                <input type="number" name="pf">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="incr">TA</label>
            </div>
            <div class="col-75">
                <input type="number" name="ta">
            </div>
        </div>

        
        
        <div class="row">
            
            <input type="submit" value="ADD"  name="sub">
            </div>
    </form>

    <script>
                      function jsFunction(value)
                          {
                              if(value==1)
                              {
                                document.getElementById("bpay").value = 25000;
                              }
                              else if(value==2){

                                document.getElementById("bpay").value = 15000;
                              }
                              else{
                                document.getElementById("bpay").value = 5000;
                              }
                          }
                    </script>

                    
                <?php
if(isset($_POST["sub"]))
{

    $y=date("y");
    $m=date("m");
    $tt=($_POST["hr"]+$_POST["pf"]+$_POST["ta"]+$_POST["bpay"]);
   mysqli_query($connection,"insert into salary (year,month,grade,hr,pf,ta,total) values ($_POST[year],$m,$_POST[grade],$_POST[hr],$_POST[pf],$_POST[ta],$tt)");
}

?>


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

