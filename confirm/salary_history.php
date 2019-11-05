<?php
include('configall.php');

session_start();

$uname=$_SESSION['username'];

          $qry="select grade from employee where email='$uname'"  or die (mysqli_error());

          $res=mysqli_query($connection,$qry);
            $gr=0;
          while($row=mysqli_fetch_array($res))
          {
              $gr=$row['grade'];
          }


          $qry2="select * from salary where grade=$gr"  or die (mysqli_error());
          $res2=mysqli_query($connection,$qry2);

?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="aprooval_page.css" type="text/css">
<script src="https://kit.fontawesome.com/8877312db4.js" crossorigin="anonymous"></script>
<style>
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }
    
    th,
    td {
        text-align: left;
        padding: 8px;
    }
    
    tr:nth-child(even) {
        background-color: #f2f2f2
    }
    
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
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
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
        background-color: rgba(0, 0, 0, 0.2);
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
  <a href="salary_history.php" class="w3-button w3-bar-item">Salary History</a>
  </div>

  <a href="#" class="w3-button w3-bar-item"></a>
  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fas fa-sign-out-alt"></i>&nbsp;Log Out</a>
  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-fw fa-user"></i>&nbsp;Profile</a>
</nav>


<div id="display">
    <div style="overflow-x:auto;">
    <table>
            <tr>
                <th>Year</th>
                <th>Month</th>
                <th>HR</th>
                <th>PF</th>
                <th>TA</th>
                <th>Total</th>
                <th>

                </th>
              </tr>

              <?php while($row=mysqli_fetch_array($res2)) {?>
                <tr>
                    <td><?php echo $row['year']; ?></td>
                    <td><?php echo $row['month']; ?></td>
                    <td><?php echo $row['hr']; ?></td>
                    <td><?php echo $row['pf']; ?></td>
                    <td><?php echo $row['ta']; ?></td>
                    <td><?php echo $row['total']; ?></td>
                </tr>
                <?php } ?>
    </table>
    </div>
              </div>



    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
        <a href="#"><i class="fa fa-facebook-official"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-flickr"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <p class="w3-medium">
            Powered by <a href="#First Group" target="_blank">First Group</a>
        </p>
    </footer>
</body>

</html>