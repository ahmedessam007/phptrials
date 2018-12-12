<?php
session_start();// session da etsal benna w ben el server bygm3 el data elly gyalo w by3rdha 3n tre2 el global variable elly esmo $_SESSION[""];
$username="";
$email="";
$errors=array();
// connect to database
$db=mysqli_connect("localhost","root","","project");
// if registered is selected.
if (isset($_POST["register"])) {
	$username=mysqli_real_escape_string($db,$_POST["username"]);
	$email=mysqli_real_escape_string($db,$_POST["email"]);
	$password=mysqli_real_escape_string($db,$_POST["password"]);
	$confirm=mysqli_real_escape_string($db,$_POST["confirm_password"]);

	// nt2kd en el fields etmlt kolaha.
	if (empty($username)) {
		array_push($errors, "Username is required");// byzwed error 3ala el array bt3t el errors.
	}
	if (empty($email)) {
		array_push($errors, "Email is required");// byzwed error 3ala el array bt3t el errors.
	}
	if (empty($password)) {
		array_push($errors, "Password is required");// byzwed error 3ala el array bt3t el errors.
	}
	
	if ($password != $confirm) {
		array_push($errors, "The password doesn't match");
	}
	if (count($errors)==0) {
		$p=md5($password);// by3ml incryption llpassword abl ma y7oto fel db.
		//$conf=md5($confirm);
		$sql="INSERT INTO users (username,email,password) /* asamy el tables feldb*/
		VALUES ('$username','$email','$p')";
		/*echo $sql;
		exit();*/
		mysqli_query($db,$sql);
		$_SESSION["username"]=$username;
		$_SESSION["success"]="you are now logged in";
		header("location: index.php"); // de el page elly hy3ml redirect 3leha b3d ma y3ml login. 
	}
}
// log user from login
if (isset($_POST["login"])) {
	$username=mysqli_real_escape_string($db,$_POST["username"]);
	$password=mysqli_real_escape_string($db,$_POST["password"]);

	// nt2kd en el fields etmlt kolaha.
	if (empty($username)) {
		array_push($errors, "Username is required");// byzwed error 3ala el array bt3t el errors.
	}
	if (empty($password)) {
		array_push($errors, "Password is required");// byzwed error 3ala el array bt3t el errors.
	}
	if (count($errors)==0) {
		$password=md5($password);
		$query="SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result=mysqli_query($db,$query);
		if (mysqli_num_rows($result)==1) {

			//log user
			$_SESSION["username"]=$username;
			$_SESSION["success"]= "you are now logged in";
			header("location:index.php");
		}
		else{
            
            array_push($errors,"username or password may be wrong");
            header("location:login.php");

		}
		
	}
}
	
// logout 
if (isset($_GET["logout"])) {
	session_destroy($_SESSION["username"]);
	unset($_SESSION["username"]);
	header("location:login.php");
}

?>