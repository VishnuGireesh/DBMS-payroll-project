<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
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
#footer{
    height:250px;
    margin:0px;
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

<!-- Slide Show -->
<section>
  <img class="mySlides" src="images/employees3.jpeg"
  style="width:100%">
  <img class="mySlides" src="images/employees2.jpg"
  style="width:100%">
  <img class="mySlides" src="images/employees1.jpg"
  style="width:100%">
  <img class="mySlides" src="images/employees.jpg"
  style="width:100%">
</section>


<!-- Footer -->
<div id="footer">
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="#"><i class="fab fa-facebook"></i></a>
  <a href="#"><i class="fab fa-pinterest"></i></a>
  <a href="#"><i class="fab fa-twitter-square"></i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
</footer>
</div>

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>

</body>
</html>

