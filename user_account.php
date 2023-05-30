<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user-account</title>
    <link rel="stylesheet" href="user_account.css">
</head>
<body>
  <input type="text" id="search" placeholder="search">
   
    

  <?php
  include "valid.php";

  $sql5="SHOW TABLES";
  $stmt=mysqli_query($conn1,$sql5);

  while($data=mysqli_fetch_assoc($stmt)){
    $row= $data['Tables_in_restaurant1'];
    
    $sql6="SELECT*FROM $row";
    $stmt6=mysqli_query($conn1,$sql6);

    echo "
        
    
    <table border='' class='box'>
      <caption>".$row." orders</caption>
       
    <tr>
    <td>ID</td>
    <td>Time</td>
    <td>Date</td>
    <td>Meal type</td>
    <td>Status</td>
    <td>Payment</td>
</tr>
    
    ";

    while($row2=mysqli_fetch_assoc($stmt6)){

        $userid=$row2['ID'];
          echo " 
          
          
    
        <tr>
            <td>".$row2['ID']."</td>
            <td>".$row2['time']."</td>
            <td>".$row2['date']."</td>
            <td>".$row2['meal_type']."</td>
            <td>".$row2['status']."</td>
            

            <form action='user_account.php' method='POST'>

            <input type='hidden' name='name' value='".$row."'>

            <input type='hidden' name='id' value='".$userid."'>

            <td><input type='submit' name='btn' value='paid'></td>
           
            
        </form>

        </tr>
    

          ";

          if(isset($_POST['btn'])){
            $name=$_POST['name'];
            $id1=$_POST['id'];
            $sql1="UPDATE $name SET status='Paid' WHERE ID=$id1";
            $stmt1=mysqli_query($conn1,$sql1);

          }
    }

    echo "</table>";
    
    
  }
  
  ?>

    
    
</body>
<script src="./user_account.js"></script>
</html>