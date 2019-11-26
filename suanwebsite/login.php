<?php  

	include_once ('config.php');
	session_start();
	$title = "Coffee Love";
	include_once ('header.php');
	$error = "";
	if(isset($_SESSION['user'])){
		header('location:home.php');
	}

	if(isset($_POST['login'])){

$uusername = $_POST['username'];
$upassword = $_POST['password'];
$sql = "select * from Coffee.Lovers where username = :pusername AND password = :ppassword";
$query = $conn -> prepare($sql);
$query -> bindParam(':pusername', $uusername);
$query -> bindParam(':ppassword', $upassword);
$query -> execute();

$result = $query->rowCount();
if ($result > 0){
    $_SESSION['user'] = "ok";
    header("location:home.php");
}
else{
    $error = "*ERROR";
}   

}



?>
<input type="button" value="GO BACK" onclick="back()" name="" id=""><center>
<h1 id="logtitle">Login</h1><br><?php echo $error; ?></center>

<form action="login.php" method="POST">
	<label>Username:</label><input type="text" name="username"><br>
	<label>Password:</label><input type="password" name="password">
	<input type="submit" value="Log In" name="login">
</form>

<script type="text/javascript" src="js/scripts.js"></script>
<?php include_once ('footer.php'); ?>