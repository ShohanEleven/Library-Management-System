<?php
require_once('../model/db.php');
$errors=[];
$book_id='';
$book_name='';
$writer_name='';
$book_type='';

if($_SERVER['REQUEST_METHOD']==='POST')
{
    $book_id =$_POST['book_id'];
    $book_name=$_POST['book_name'];
    $writer_name=$_POST['writer_name'];
    $book_type=$_POST['book_type'];



if(!$book_id){
    $errors[]='book_id required';
}
if(!$book_name){
    $errors[]='book_name required';
}
if(!$writer_name){
    $errors[]='writer_name required';
}
if(!$book_type){
        $errors[]='  Books type required';
    }

if(empty($errors)){
    $sql = "INSERT INTO addbook (book_id,book_name,writer_name,book_type)
    VALUES ('". $book_id."',
    '". $book_name ."',
    '". $writer_name ."',
    '". $book_type."'
    )";
    if (mysqli_query($conn, $sql)) {
        echo "Your query posted successfully";
        } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
        }

    mysqli_close($conn);
   
}
}

?>

<!DOCTYPE html>
 
 <head>
     <title>Update</title>
     <link rel="stylesheet" href="../asset/home.css">
     <script src="addbookval.js"></script>
 </head>
  
 
<form action="" onsubmit="return validateForm()" method="post">
    
        
        
    <div class=center>
    <marquee behavior="scroll"direction="right"><h1> Add Books </h1></marquee>
        <h3>Add Books</h3> 
        <table>
        <tr>
         <td> 
           
                 Book ID: 
                 <input type="text" id="book_id" name= "book_id" >
                
                 <br><br>
           
         </td>
     
 </tr>
         <tr>
             <td> 
               
                   Book Name :
                     <input type="text" id="book_name" name="book_name">   
                    
                     <br><br>
               
             </td>
         
     </tr>

 <tr>
     <td> 
       
         Writer Name : 
             <input type="text" id="writer_name" name="writer_name">  
            
             <br><br>
       
     </td>
 
 </tr>
 <tr>
     <td> 
       
            Book Type : 
             <input type="text" id="book_type" name="book_type">   
            
             <br><br>
       
     </td>
 
 </tr>

        
         </table>
        <p id="show"></p>
         <input type="submit"  name="submit" value="Submit">
         <a href="../view/adminhome.html">Back</a>
         
         </form>
         
</div>
         
     </body>
     </html>
     
  