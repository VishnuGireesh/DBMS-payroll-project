<?php

include "configall.php";
session_start();
?>

<html>

<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="fontawesome-free-5.10.2-web\css\all.css">
    <link rel="stylesheet" href="fontawesome-free-5.10.2-web\js\all.js">
    <link rel="stylesheet" href="userreg.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">

            <?php
             $uname=$_SESSION['username'];

          $qry="select grade from employee where email='$uname'"  or die (mysqli_error());

          $res=mysqli_query($connection,$qry);
            $gr=0;
          while($row=mysqli_fetch_array($res))
          {
              $gr=$row['grade'];
          }

          //echo $gr;

            $y= date("Y");
            $m= date("m");

            $qry1="select * from salary where  month=$m and grade=$gr"  or die (mysqli_error());
           
            $res2=mysqli_query($connection,$qry1);

                $hr=0;
                $pf=0;
                $ta=0;
                $row3=0;
               
           
        while($row1=mysqli_fetch_array($res2))
          {
              $hr=$row1['hr'];
              $pf=$row1['pf'];
              $ta=$row1['ta'];
          }

          $tt=$hr+$pf+$ta;

         ?>
                <div id="regform">
                    <form method="POST" >
                    <div class="form-group">
    <label for="">YEAR</label>
    <input type="text" class="form-control"  value="<?php echo date("Y"); ?>" disabled>
  </div>

  <div class="form-group">
    <label for="">MONTH</label>
    <input type="text" class="form-control"  value="<?php echo date("m"); ?>" disabled>
  </div>
  
  <div class="form-group">
    <label for="">HR</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="hr"  value="<?php echo $hr; ?>" disabled >
  </div>

  <div class="form-group">
    <label for="">PF</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="pf" value="<?php echo $pf; ?>" disabled>
  </div>

  <div class="form-group">
    <label for="">TA</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="ta" value="<?php echo $ta; ?>" disabled>
  </div>

  <div class="form-group">
    <label for="">TOTAL</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="ta" value="<?php echo $tt; ?>" disabled>
  </div>
  
                        
                    </form>

                   
                </div>

            </div>

        </div>
    </div>


    </div>
</body>

</html>