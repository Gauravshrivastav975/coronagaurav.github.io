<?php

$username="root";
$password="";
$server="localhost";
$db="coronavirus";

$con= mysqli_connect($server,$username,$password,$db);

if($con){
	?>
	<script>
		alert("connection successfull");
	</script>
	<?php
}
else{
	?>
	<script>
		alert("connection not successfull");
	</script>
	<?php
}


?>