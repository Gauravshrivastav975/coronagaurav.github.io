
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>COVID-19 INDIA</title>
	<link rel="icon" href="images/icon.png">
<?php include 'link.php' ?>
<?php include 'style.php' ?>
<?php include 'connection.php' ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body class="body_background" onload="load()">
<div id="preloader"></div>

<nav class="navbar navbar-expand-lg navbar-light navbar_work ">
	<div class="container">
     <a class="navbar-brand" href="#">
 <img src="images/navbar_image.png" width="150" class="img_fluid"></a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto text-center font-weight-bold 
    unordered ">
<li class="nav-item active pr-xl-5">
        <a class="nav-link" href="index.php">
 Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active pr-xl-5">
        <a class="nav-link" href="contact.php">CONTACT</a>
      </li>
      <li class="nav-item active pr-xl-5">
        <a class="nav-link" href="#">WORK</a>
      </li>
      <li class="nav-item active pr-xl-5">
        <a class="nav-link" href="#">BLOG</a>
      </li>
      <li class="nav-item active pr-xl-5">
        <a class="nav-link" href="#"> ABOUT</a>
      </li>
    </ul>
  
  </div>
 
</div>

</nav>
<div class="container">
<div class="border_header_down"></div>
<span class="border_header_right"></span>
<span class="border_header_right_1"></span>
<span class="border_header_right_2"></span>
<span class="border_header_right_3"></span>
</div>


<!-- form open -->
<div class="container mt-xl-5">
<h1 class="text-center font-weight-bold text-warning"> SUPPORT FOR HELP </h1>
<form  method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="text-warning">email</label>
      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
  <label for="inputPassword4" class="text-warning" >password</label>
   <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress" class="text-warning" >address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
  </div>
  <div class="form-group">
    <label for="inputAddress2" class="text-warning" >address_2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address_2">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity" class="text-warning" >city</label>
      <input type="text" class="form-control" id="inputCity" 
      name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState" class="text-warning" >country</label>
      <select id="inputState" class="form-control" name="country">
        <option selected>Choose...</option>
        <option>INDIA</option>city
        <option>USA</option>country
        <option>ENGLAND</option>
        <option>CANADA</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip" class="text-warning" >zip</label>
      <input type="text" class="form-control" id="inputZip" name="zip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
      	<span class=" text-warning">Check me out</span>
      </label>
    </div>
  </div>
  <div class="d-flex justify-content-center">
  <button type="submit" class="btn btn-success" name="submit">Sign in</button>
</div>
</form>
</div>
</div>
<!-- form close -->

</body>
</html>

<?php

if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	$address=$_POST['address'];
	$address_2=$_POST['address_2'];
	$city=$_POST['city'];
	$country=$_POST['country'];
	$zip=$_POST['zip'];

$insertquery= "insert into coronavirus_table 
(email,password,address,address_2,city,country,zip) values
('$email','$password','$address','$address_2','$city','$country','$zip')";

$res = mysqli_query($con, $insertquery);

if($res){
	?>
	<script>
		alert("working");
	</script>
	<?php
}
else{
	?>
	<script>
		alert("not working");
	</script>
	<?php
}

}

?>



<script>
	var a=document.getElementById("preloader");
function load(){
  a.style.display="none";
}
	</script>