<?php
require_once('../model/db.php');
$errors=[];
$reader_id='';
$reader_name='';
$phn='';
$email='';
$loc='';

if($_SERVER['REQUEST_METHOD']==='POST')
{
    $reader_id =$_POST['reader_id'];
    $reader_name=$_POST['reader_name'];
    $phn=$_POST['phn'];
    $email=$_POST['email'];
    $loc=$_POST['loc'];



if(!$reader_id){
    $errors[]=' Reader Id required';
}
if(!$reader_name){
    $errors[]=' Reader Name required';
}
if(!$phn){
    $errors[]='Phone Number required';
}
if(!$email){
        $errors[]=' Email required';
    }
    if(!$loc){
        $errors[]='Location required';
    }

if(empty($errors)){
    $sql = "INSERT INTO addreader (reader_id,reader_name,phn,email,loc)
    VALUES ('". $reader_id."',
    '". $reader_name ."',
    '". $phn ."',
    '". $email."',
    '". $loc."'
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
     <script src="addreaderval.js"></script>
 </head>
  
 
<form action="" onsubmit="return validateForm()" method="post">
    
        
        
    <div class=center>
    <marquee behavior="scroll"direction="right"><h1> Add Reader </h1></marquee>
        <h3>Add Reader</h3> 
        <table>
        <tr>
         <td> 
           
                 Reader ID: 
                 <input type="text" id="reader_id" name= "reader_id" >
                
                 <br><br>
           
         </td>
     
 </tr>
         <tr>
             <td> 
               
                   Reader Name :
                     <input type="text" id="reader_name" name="reader_name">   
                    
                     <br><br>
               
             </td>
         
     </tr>

 <tr>
     <td> 
       
        Phone : 
             <input type="text" id="phn" name="phn">  
            
             <br><br>
       
     </td>
 
 </tr>
 <tr>
     <td> 
       
           Email : 
             <input type="email" id="email" name="email">   
            
             <br><br>
       
     </td>
 
 </tr>
 <tr>
     <td> 
       
           Location : 
             <input type="text" id="loc" name="loc">   
            
             <br><br>
       
     </td>
 
 </tr>


        
         </table>
        <p id="show"></p>
         <input type="submit"  name="submit" value="Submit">
         <a href="../view/staffhome.html">Back</a>
         
         </form>
         
</div>
         
     </body>
     </html>