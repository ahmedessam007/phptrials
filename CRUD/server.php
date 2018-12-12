<?php
session_start();
//bn3raf el variables.
$name="";
$address="";
$id = 0;
$edit_state= false;

//connect to the database.
$db=mysqli_connect("localhost","root","","crud");//sabta fel connection bta3t el database w bta5od (el host,username, password,esm el database).

// lw dosna save
if (isset($_POST["save"])) {
	$name=$_POST["name"];
	$address=$_POST["address"];

	$query="INSERT INTO info(name,address)VALUES('$name','$address')";
	mysqli_query($db,$query);//bya5od el connection wel query.
	$_SESSION["msg"]="Address saved";
	header("location: CRUD.php");// byro7 ll main page tany elly hya el crud b3d ma y3ml insert.
}
// update data.
if (isset($_POST["update"])) {
	$name=mysqli_real_escape_string($db, $_POST['name']);// bya5od object el database 34an el mysqli bya5od 2 parameters w bya5od el parameter elly hyktb..
	$address=mysqli_real_escape_string($db, $_POST['address']);
	$id= mysqli_real_escape_string($db, $_POST['id']);
	$query_str = "UPDATE info SET name='$name',address='$address' WHERE id=$id";
	mysqli_query($db,$query_str);
	// echo $query_str;
	// echo mysqli_errno($db);
	// exit;
	$_SESSION["msg"]="Address updated";
	header("location:CRUD.php");
}
// delete records.
if (isset($_GET['del'])) {
	$id=$_GET['del'];
	mysqli_query($db,"DELETE FROM info WHERE id=$id");
	$_SESSION["msg"]="Address is deleted";
	header("location:CRUD.php");
}
// retrieve results.
$results=mysqli_query($db,"SELECT * FROM info");
// $_post,$_GET: homa super globals bnst5dmhom 34an n3ml fetching l data mn el form  bs el post msh btzharr fel url 34an hya secured aktr f mmkn nst5dmha fel form bta3t el username wel password enma el get btzhar fel url.el post mmkn nb3at feha asccii code enma el get la wel post mmkn nb3at feha image bs el get la wala ynf3 n3mlaha send l binary data.
//$_REQUEST feha el features bta3t el get wel post.

?>