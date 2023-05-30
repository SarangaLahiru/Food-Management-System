
<?php
  include "register.php";
  $name3=$_SESSION['user_name'];
  $sql4="SELECT SUM(price) as total,COUNT(ID) as count FROM $name3";
  $stmt4=mysqli_query($conn1,$sql4);

  while($data1=mysqli_fetch_assoc($stmt4)){
    $price=$data1['total'];
    $count=$data1['count'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FMS-Dashboard</title>
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/014/971/638/original/food-logo-design-template-restaurant-free-png.png" type="jpg/gif">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./dashboard.css">
</head>
<body>
    <header>
        <h2><i class="bi bi-person-fill"></i>Hi!<span><?=$_SESSION['user_name']?></span></h2>
        <li><i class="bi bi-alarm-fill"></i></li>
        <li id="date">2023/05/20</li>
        <li id="time">19.30am</li>

    </header>
    <div class="header">
        <img src="https://static.vecteezy.com/system/resources/previews/014/971/638/original/food-logo-design-template-restaurant-free-png.png" alt="">
        <h2><i class="bi bi-star-fill"></i> Orders :<?=$count?></h2>
        <h2><i class="bi bi-currency-dollar"></i>cost : <?=$price?></h2>
    </div>
    <div class="container">
        <div class="menu">
            <img src="https://static.vecteezy.com/system/resources/previews/014/971/638/original/food-logo-design-template-restaurant-free-png.png" alt="">
            <li><i class="bi bi-house-door"></i><a href="">Home</a></li>
            <li><i class="bi bi-house-door"></i><a href="">Order</a></li>
            <li><i class="bi bi-house-door"></i><a href="">Menu</a></li>
            <li><i class="bi bi-house-door"></i><a href="">Claim</a></li>
            <li><i class="bi bi-house-door"></i><a href="">Contact</a></li>
            <li><i class="bi bi-house-door"></i><a href="">More</a></li>
        </div>
        
      <div class="table">
        <h2>Food Orders</h2>
        <table>
            
            <tr>
                <td>Date</td>
                <td>Meal Time</td>
                <td>Meal Type</td>
                <td>Count</td>
                <td>total</td>
                <td>Payment</td>
            </tr>
           
                <?php

                
                $name1=$_SESSION['user_name'];

                $sql3="SELECT *FROM $name1";
                $stmt3=mysqli_query($conn1,$sql3);
                while($row=mysqli_fetch_assoc($stmt3)){
                    echo "
                    <tr>
                   <td>".$row['date']."</td>
                   <td>".$row['time']."</td>
                   <td>".$row['meal_type']."</td>
                   <td>".$row['count']."</td>
                   <td>".$row['price']."</td>
                   <td class='pay'>".$row['status']."</td>
                   </tr> ";
                }
                
                ?>

                
           
            
            
            
            

           

        </table>
      </div>
    </div>
    
    
</body>
<script src="./dashboard.js"></script>
</html>