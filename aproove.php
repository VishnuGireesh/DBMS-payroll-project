<?php
include('configall.php');

$sql="SELECT emp_id,name,phone,email,j_date,pass FROM userreg;";
$result=mysqli_query($connection,$sql);
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
                <div class="col-2 text-center"></div>
                <div class="col-10 text-center">
                <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Emp_Id</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Join Date</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php while($row=mysqli_fetch_array($result)) {?>
           <tr>
               <td><?php echo $row['emp_id']; ?></td>
               <td><?php echo $row['name']; ?></td>
               <td><?php echo $row['phone']; ?></td>
               <td><?php echo $row['email']; ?></td>
               <td><?php echo $row['j_date']; ?></td>
               <td><a href="aprooveemp.php?edit=<?php echo $row['emp_id']; ?>">Accept</a></td>
               <td><a href="deleteemp.php?del=<?php echo $row['emp_id']; ?>">Reject</a></td>
               
           </tr>
           <?php } ?>
  </tbody>
</table>


                </div>
            </div>
        </div>


        </div>
    </body>

    </html>