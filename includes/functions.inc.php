<?php

require_once 'includes/dbh.inc.php';
require_once 'includes/signup.inc.php';
require_once 'includes/login.inc.php';


function emptyInputLogin($ims,$pass){

	$result;

	if(empty($ims) || empty($pass)){
		$result=true;
	}
	else
	{
		$result=false;
	}

}

function userExist($conn,$ims,$mejl){

	$sql="SELECT * FROM users WHERE username= ? OR mejling = ?;";
	$stmt=mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql))
	{
		header("location: ../signing.php?error=emptyinput");
		exit();
	}

mysqli_stmt_bind_param($stmt,"ss", $ims,$mejl);
mysli_stmt_execute($stmt);

$resultData=mysqli_stmt_get_result($stmt);

if($row=mysqli_fetch_assoc($resultData)){

	return $row;


}
else{
	$res=false;
	return $res;
}

mysqli_stmt_close($stmt);

}


function loginUser($conn,$ims,$pass){


	$userExt= userExist($conn,$ims,$ims);

	if($userExt===false){

		header("location: ../signing.php?error=wronglogin");
		exit();

	}

	$pwdcheck =  $userExt["passw"];

	$checkpwd=password_verify($pass, $pwdcheck);

	if($checkpwd===false){

		header("location: ../signing.php?error=wronglogin");


	}
	else if ($checkpwd===true){

		session_start();
	}



}