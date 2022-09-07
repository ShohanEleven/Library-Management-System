<?php
require_once('../model/db.php');
$sql = "SELECT * FROM addbook";
$result = mysqli_query($conn,$sql);
?>

<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../asset/home.css">
    </head>
    <body>
        <div class=center>
 
        <table border="1" >
            <thead>
            
                <th> Book ID </th>
                <th> Book Name</th>
                <th> Writer Name </th>
                <th> Book Type</th>
               
                
            </thead>
</div>
            <tbody>
        
    <?php if(mysqli_num_rows($result)>0): ?>
    
        

        
      <?php while($delivery=mysqli_fetch_assoc($result)): ?>
      <tr>
      <td><?php echo $delivery['book_id']  ?></td>
      <td><?php echo $delivery['book_name']  ?></td>
      <td><?php echo $delivery['writer_name']  ?></td>
      <td><?php echo $delivery['book_type']  ?></td>
     
     
      
      </td>

      </tr>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </tbody>
        </table>
    </body>
    </html>
</body>
</html>