<?php 

	require_once "../model/userModel.php";
	
	$json =$_POST['data'];
    $jsearch= json_decode($json);
	
	$Fsearch= $jsearch->search;
	
	$data = booksearch($Fsearch);
	
	$nameSearch = $data['book_name'];
	
	$book_id = $data['book_id'];
	$book_name = $data['book_name'];
	$writer_name = $data['writer_name'];
	$book_type = $data['book_type'];
	

    if($Fsearch == $book_name)
	{
		echo "<table border=1>
			<tr>
				<td>Book ID</td>
				<td>Book Name</td>
				<td>Writer Name</td>
				<td>Book Type</td>
			
			</tr>
			<tr>
				<td>$book_id</td>
				<td>$book_name</td>
				<td>$writer_name</td>
				<td>$book_type</td>
				
				
			</tr>";
			
	}
    ?>