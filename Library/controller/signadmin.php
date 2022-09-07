<?php 
session_start();


require_once("../model/userModel.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['user_name'];
		
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phnNum = $_POST['phnNum'];
	
		
		$cPassword = $_POST['cPassword'];


	if($password == null || $user_name == null || $phnNum == null || $email == null){
		echo "Please Fill Up All The Forms";
	}elseif ($password != $cPassword) {
		echo "Password Doesn't Match";
	}
	elseif(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
		$query = "INSERT INTO signad (user_name,password, email, phnNum ) values ('$user_name','$password', '$email', '$phnNum' )";
        $status = signup($user_name,$password, $cPassword,$email, $phnNum);
	
		if($status){
			$_SESSION['status'] = true;
            setcookie('status', 'true', time()+3600, '/');
			sleep( 2 );
			header("Location: ../view/loginadmin.html");
			


		}
		else 
		{
			echo "Something went wrong!";

		}	
				
		
	}
	else 
		{
			echo "Enter Valid Info!";

		}	
	
		}
?>