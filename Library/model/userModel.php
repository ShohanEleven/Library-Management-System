<?php


require_once "db.php";

function login($user_name, $password){
    $conn = getConnection();
    $sql = "SELECT * FROM signad where user_name='{$user_name}' and password='{$password}'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count >0){
        return true;
    }else{
        return false;
    }

}

function signup ($user_name,$password, $cPassword, $email, $phnNum){
    $conn = getConnection();
    $sql = "INSERT INTO signad (user_name,password, cPassword ,email, phnNum ) values ('$user_name','$password', '$cPassword','$email', '$phnNum')";
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}

function stafflogin($user_name, $password){
    $conn = getConnection();
    $sql = "SELECT * FROM signstaff where user_name='{$user_name}' and password='{$password}'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count >0){
        return true;
    }else{
        return false;
    }

}
function staffsignup ($user_name,$password, $cPassword, $email, $phnNum){
    $conn = getConnection();
    $sql = "INSERT INTO signstaff (user_name,password, cPassword ,email, phnNum ) values ('$user_name','$password', '$cPassword','$email', '$phnNum')";
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}
function readerlogin($user_name, $password){
    $conn = getConnection();
    $sql = "SELECT * FROM signread where user_name='{$user_name}' and password='{$password}'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count >0){
        return true;
    }else{
        return false;
    }

}
function readersignup ($user_name,$password, $cPassword, $email, $phnNum){
    $conn = getConnection();
    $sql = "INSERT INTO signread (user_name,password, cPassword ,email, phnNum ) values ('$user_name','$password', '$cPassword','$email', '$phnNum')";
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}
function booksearch($book_name)
	{
		$conn = getConnection();
		$sql = "SELECT * FROM addbook WHERE book_name='{$book_name}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            while($row = mysqli_fetch_assoc($result)) {
				$data = [
							'book_id' => $row['book_id'],
							'book_name' => $row['book_name'],
							'writer_name' => $row['writer_name'],
							'book_type' => $row['book_type'],
                ];
					return $data;
		}
        }else{
            echo "No data found..!!";
        }
	}
	function booklist()
	{
        $conn = getConnection();
		$sql = "SELECT * FROM addbook";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            echo "<table border=1>
			<tr>
				<td>BOOk ID</td>
				<td>BOOK NAME</td>
				<td>WRITER NAME</td>
				<td>BOOK TYPE</td>
				
			</tr>";
		
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>
				<td>{$row['book_id']}</td>
				<td>{$row['book_name']}</td>
				<td>{$row['writer_name']}</td>
				<td>{$row['book_type']}</td>
			
				</tr>";
		}
		
		echo "</table>";
        }else{
            echo "No data found..!!";
        }
		
    }




?>