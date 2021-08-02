<?php 

		include_once 'dbh.inc.php';

		$mejl = $_POST['email'];
		$ims = $_POST['first'];
		$pass = $_POST['pass'];


            $sql = "INSERT INTO users (username, passw, mejling) VALUES ('$ims','$pass','$mejl')"; 
           mysqli_query($conn, $sql);

           header("Location: ../signing.php")
           
           ?>
            




