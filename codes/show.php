<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test.php">
</head>
<body>
    
   <?php
   $connection = mysqli_connect("localhost","root","","canteen");
   if(isset($_POST['submit']))
   {
    $id= $_POST['get_id'];
    $query= "SELECT * FROM login_reg WHERE id='$id' ";
    $query_run= mysqli_query($connection, $query);

   
            
   

   
  
   ?>

   <div>
   <table style="des">
  <tr>
    <th>id </th>
    <th>username</th> 
    <th>email</th>
    <th>pass</th>
    <th>conf-pass</th>
  </tr>
  <?php
   if(mysqli_num_rows($query_run) > 0)
   {
          while ($row = mysqli_fetch_array($query_run)) 
          {
  ?>
  <tr>
    <td><?php echo $row['id']; ?> </td>
    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['email']; ?> </td>
    <td><?php echo $row['password']; ?></td>
    <td><?php echo $row['confirm-password']; ?> </td>
    
    
  </tr>
  <?php
    }
}
    else 
        {
           ?>
           <tr>
            <td>no data found</td>
           </tr>
           <?php
        }
    
  ?>
</table>

   </div>
<?php
 }
?>

</body>
</html>