<?php


if(isset($_POST["submit"]))
{
	$ims = $_POST['first'];
	$pass = $_POST['pass'];

require_once 'includes/functions.inc.php';
require_once 'includes/dbh.inc.php';

if(emptyInputLogin($ims,$pass) === false){

	header("location: ../login.inc.php?error=emptyinput");
	exit();

}

loginUser($conn,$ims,$pass);

}
else{
	header("location: ../signing.php");
	exit();
}
