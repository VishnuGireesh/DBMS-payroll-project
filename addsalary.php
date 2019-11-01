<?php

include "configall.php";

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
                <div id="regform">
                    <form method="POST" >
                    <div class="form-group">
    <label for="">YEAR</label>
    <input type="number" name="year" class="form-control"   value="<?php echo date("Y"); ?>" readonly>
  </div>

  <div class="form-group">
    <label for="">MONTH</label>
    <input type="number" class="form-control"  value="<?php echo date("m"); ?>" readonly>
  </div>

  <div class="form-group">
                            <label for="exampleInputPassword1">Grade</label>
                            <select class="form-control form-control-sm" name="grade" onchange="jsFunction(this.value);">
                       <option value=0>--choose-- </option>    
                      <option value=1>Grade 1</option>
                      <option value=2>Grade 2</option>
                      <option value=3>Grade 3</option>
                    </select>
                        </div>

      <div class="form-group">
    <label for="">Basic pay</label>
    <input type="number" class="form-control" id="bpay" name="bpay" readonly>
  </div>
  
  <div class="form-group">
    <label for="">HR</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="hr" >
  </div>

  <div class="form-group">
    <label for="">PF</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="pf">
  </div>

  <div class="form-group">
    <label for="">TA</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="ta">
  </div>
  
  

  <button type="submit" class="btn btn-primary" name="sub">Submit</button>
                        
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
                   
                </div>

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

        </div>
    </div>


    </div>
</body>

</html>