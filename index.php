<?php

session_start();

?>

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
<body onload="load()">
  <div id="preloader"></div>

	<!-- clinet login start -->
	<div class="container-fluid main_header text-light ">
		<div class="container">
		
		<form class="form-inline" autocomplete="off">
			<h3 class="client">CLIENT LOGIN</h3>
  <div class="form-group mr-md-5 username_1">
    <label for="username" class="mr-md-2 ">Username:</label>
    <input type="text"  placeholder="Enter Username"  >
  </div>
  <div class="form-group mr-md-5 password_1" >
    <label for="Password" class="mr-md-2 ">Password:</label>
    <input type="password"  placeholder="Password" >
  </div>
  
  <button type="submit" class="btn btn-secondary rounded-0 header_submit_button">LOGIN</button>
</form>
<div class="text-light header_1_footer pb-xl-5 ">
Not a client? Interested in working together?<a href="#" class="text-warning"> Click here to request a quote for your next project!</a></div>
</div>
	</div>

	<div class="container button_div  ">
	<button type="button" name="button" class="close_panel">
	<span class="close_sign">&times;</span>
 close panel</button>
</div>
	<!-- client login end -->

	<!-- navbar start-->

<nav class="navbar navbar-expand-lg navbar-light navbar_work ">
	<div class="container">
     <a class="navbar-brand" href="#">
 <img src="images/navbar_image.png" width="150" class="img_fluid"></a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto text-center font-weight-bold 
    unordered">
<li class="nav-item active pr-xl-5">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
	<!-- navbar end-->

<!-- main body start -->
<div class="container  main_body ">
<div class="row">
<div class="main_body_box1   col-lg-6 col-md-6 col-sm-6 col-12 text-center font-weight-bold">

<h1>WEAR MASK KEEP<br> <span class="animation_text "></span></h1>
<p class="text-secondary">The new and ongoing coronavirus (COVID-19) pandemic, caused by a new strain of coronavirus, has resulted in extraordinary measures around the world to contain, slow the pace, or reduce the impact of the virus.</p>

</div>

<div class="main_body_box2  col-lg-6 col-md-6 col-sm-6 col-12 ">
	<img src="images/main_image.png" width="550" class="animate__animated animate__pulse animate__infinite">
	</div>
</div>
	</div>
<!-- main body end -->


<!-- footer_1 end  -->
<div class=" img-jumbo text-center text-light font-weight-bold">
  <div class="jumbotron jumbotron-fluid img-jumbo">
    <h1>Covid 19 India Lockdown Highlights </h1>
    <p>
Coronavirus positive cases in India continue to rise on a daily basis despite implementation of social distancing measures and extension of nationwide lockdown. As per the recent health ministry data, Maharashtra, Tamil Nadu, Gujarat and Delhi continue to remain the worst-affected states by the Covid-19 pandemic. However, the Indian Council of Medical Research (ICMR) and health ministry have maintained that the community transmission of Covid-19 is not happening at the moment. The World Health Organization has even praised India’s timely actions to stop coronavirus as it has helped in minimising the spread of SARS-CoV-2 in spite of the myriad challenges.</p>
  </div>
  </div>
<!-- footer_1 end  -->

<!-- table start -->

<div class="container mb-xl-5">
  <h2  class="py-5 text-center font-weight-bold">COVID-19 LIVE UPDATES OF THE INDIA</h2>  
  <div class="table-responsive">          
  <table class="table table-danger table-bordered table-hover table-striped text-center">
    <thead>
      <tr>
        <th>LastUpdatedTime</th>
        <th>State</th>
        <th>StateCode</th>
        <th>Confirmed</th>
        <th>Recovered</th>
        <th>Active</th>
        <th>Deaths</th>
        <th>DeltaDeaths</th>
      </tr>

<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coronalive = json_decode($data, true);

$statescount = count($coronalive['statewise']);

$i=1;
while($i < $statescount){

?>

<tr>
<td><?php echo $coronalive['statewise'][$i]['lastupdatedtime']?></td>
<td><?php echo $coronalive['statewise'][$i]['state']?></td>
<td><?php echo $coronalive['statewise'][$i]['statecode']?></td>
<td><?php echo $coronalive['statewise'][$i]['confirmed']?></td>
<td><?php echo $coronalive['statewise'][$i]['recovered']?></td>
<td><?php echo $coronalive['statewise'][$i]['active']?></td>
<td><?php echo $coronalive['statewise'][$i]['deaths']?></td>
<td><?php echo $coronalive['statewise'][$i]['deltadeaths']?></td>

</tr>

<?php
$i++;
}
?>


    </thead>
    
  </table>
</div>
</div>


<!-- table end -->

<!-- footer_2 start  -->
<div class="footer_2_work mt-xl-5">

<div class="container">
<div class="row text-white py-xl-5
">

<div class="col-lg-3 col-md-3 col-sm-3 col-12 padding_work">
  <p>© TH= SUM 2020. All Rights Reserved</p>
  <h1>DO SOMTHING GOOD</h1>
</div>

<div class="col-lg-3 col-md-3 col-sm-3 col-12">
  <p>Navigation</p>
  <p><a href="#"  class="text-warning">// Home</a></p>
  <p><a href="#"  class="text-warning">// About</a></p>
  <p><a href="#"  class="text-warning">// Work</a></p>
  <p><a href="#"  class="text-warning">// Blog</a></p>
  <p><a href="#"  class="text-warning">// Contact</a></p>
</div>



<div class="col-lg-3 col-md-3 col-sm-3 col-12">
  <p>Social</p>
  <p><a href="#" class="text-warning">// Blog</a></p>
  <p><a href="#" class="text-warning">// Facebook</a></p>
  <p><a href="#" class="text-warning">// Twitter</a></p>
</div>

<div class="col-lg-3 col-md-3 col-sm-3 col-12">
  <p>105-1010 Chilco Street, Vancouver, British Columbia, V6G 2R6
// p. 604.765.8831 //<br><a href="#"class="text-warning"> e. hello@thesum.ca</a></p>
</div>

</div>
</div>
  </div>
<!-- footer_2 end  -->

</body>
</html>

<script>
	$(document).ready(function(){
  $(".button_div").click(function(){
  	$(".main_header").slideToggle(1000);
  });
	});
	$(document).ready(function(){
  $(".button_div").click(function(){
  	$(".border_header_down, .border_header_right, .border_header_right_1, .border_header_right_2, .border_header_right_3").hide(1000);
  });
	});
	$(document).ready(function(){
  $(".button_div").click(function(){
  	$(".border_header_down, .border_header_right, .border_header_right_1, .border_header_right_2, .border_header_right_3").show(1000);
  });
	});

var a=document.getElementById("preloader");
function load(){
  a.style.display="none";
}

	</script>