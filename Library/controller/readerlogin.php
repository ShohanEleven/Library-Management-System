<?php 

session_start();

require_once("../model/db.php");
require_once("../model/userModel.php");

$user_name = $_POST['user_name'];
$password = $_POST['password'];

	if($user_name == null || $password == null){
		echo "Please fill up the box's";
	}else{

		$status = readerlogin($user_name, $password);

		if($status){
			$_SESSION['status'] = true;
			setcookie('status', 'true', time()+3600, '/');
			sleep(2);
			header('location: ../view/readerhome.html');
		}else{
			echo "Invalid user";
		}
	
		
	}

?>