<?php
require_once('../model/db.php');
$errors=[];
$staff_id='';
$staff_name='';
$phn='';
$email='';
$loc='';

if($_SERVER['REQUEST_METHOD']==='POST')
{
    $staff_id =$_POST['staff_id'];
    $staff_name=$_POST['staff_name'];
    $phn=$_POST['phn'];
    $email=$_POST['email'];
    $loc=$_POST['loc'];



if(!$staff_id){
    $errors[]=' Staff Id required';
}
if(!$staff_name){
    $errors[]='Staff Name required';
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
    $sql = "INSERT INTO addstaff (staff_id,staff_name,phn,email,loc)
    VALUES ('". $staff_id."',
    '". $staff_name ."',
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
     <script src="addstaffval.js"></script>
 </head>
  
 
<form action="" onsubmit="return validateForm()" method="post">
    
        
        
    <div class=center>
    <marquee behavior="scroll"direction="right"><h1> Add Staffs </h1></marquee>
        <h3>Add Staffs</h3> 
        <table>
        <tr>
         <td> 
           
                 Staff ID: 
                 <input type="text" id="staff_id" name= "staff_id" >
                
                 <br><br>
           
         </td>
     
 </tr>
         <tr>
             <td> 
               
                   Staff Name :
                     <input type="text" id="staff_name" name="staff_name">   
                    
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
         <a href="../view/adminhome.html">Back</a>
         
         </form>
         
</div>
         
     </body>
     </html>