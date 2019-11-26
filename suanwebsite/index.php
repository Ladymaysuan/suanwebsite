<?php  

	include_once ('config.php');
	session_start();
	$title = "Coffee Love";
	include_once ('header.php');
	

?>

<div id="head">	
	
<center>
	<h1 id="title">Coffee Love</h1>
</center>
 
<center>
<input id="login" type="button" name="" value="Log In" onclick="login()">
<input id="signin" type="button" name="" value="Sign Up" onclick="signup()">
<input id="about" type="button" name="" value="About Us" onclick="about()" ></center>

</div>


<script type="text/javascript" src="js/scripts.js"></script>
<?php include_once ('footer.php'); ?>