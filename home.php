<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FMS</title>
    <link rel="stylesheet" href="./home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
   
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/014/971/638/original/food-logo-design-template-restaurant-free-png.png" type="jpg/gif">
</head>
<body>

 <!--  <div class="main">

        <h2><img src="https://static.vecteezy.com/system/resources/previews/014/971/638/original/food-logo-design-template-restaurant-free-png.png" alt=""> </h2>
        <a href="" class="menu"><i class="bi bi-list"></i></a>
    </div> 
-->
    <header class="header ">
        <h2><img src="https://static.vecteezy.com/system/resources/previews/014/971/638/original/food-logo-design-template-restaurant-free-png.png" alt=""> </h2>
        <li><a href="">Home</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">About</a></li>
        <li><a href="" id="user"><i class="bi bi-person-circle"></i></a></li>
    </header>
<!--
   <div class="header1 header2">

        <a href="" class="cancle5"><i class="bi bi-x-circle-fill "></i></a>
       
        <li><a href="" id="user1"><i class="bi bi-person-circle"></i></a></li>
        <li><a href="">Home</a></li>
        <li><a href="">Dashboard</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">About</a></li>
        
        
    </div> -->

    <div class="slider">
        <div class="slide curr">
            <img src="/myphp-1/e-com-7/images/banquet-table-with-snacks.jpg" alt="">
            
        </div>
        <div class="slide">
            <img src="/myphp-1/e-com-7/images/happy-waiter-serving-food-group-cheerful-friends-pub.jpg" alt="">
           
        </div>
        <div class="slide">
            <img src="/myphp-1/e-com-7/images/three-best-friends-enjoying-nice-conversation-during-lunch-modern-cafe-interior.jpg" alt="">
           
        </div>
    </div>
    <div class="a1">
        <h2></h2>
    </div>
    <div class="maindis">
        <h2>An Ambient Dining Experience</h2>
        <p>Join us at the table as you dine for the perfect meal.We treat all of our customer with upmost care and service.Have a toast and enjoy our fine drinks while you are at it.</p>
        <div class="btn">
            <a href="" id="makebtn">Make order</a>
            <a href="">About us</a>
        </div>
        <div class="count">
           <div class="dis">
            <h2 id="student">100+</h2>
            <p>students</p>
           </div>
           <div class="dis">
            <h2 id="food">50+</h2>
            <p>Foods</p>
           </div>
           <div class="dis">
            <h2 id="reg">2+</h2>
            <p>Registerd</p>
           </div>
        </div>

    </div>
    <div class="orders1">
        <img class="img2" src="/myphp-1/e-com-7/images/cup-hot-cappuccino-chocolate-croissant-with-breakfast_140725-9515.avif" alt="">
        <div class="dis">
            <h2>WELCOME TO DELIZUS</h2>
            <p>Health is Wealth is a common and famous saying. Good health is the feeling of mental, physical and social well being by any person and not only tobe free of diseases. It is very necessary which everyone should maintain to get free of body disorders and feel good all time however it depends on several things.</p>
        </div>
    </div>
 <div class="orders">
    <h3>Make your Orders</h3>

        <div class="order bf">
            <img src="/myphp-1/e-com-7/images/cup-hot-cappuccino-chocolate-croissant-with-breakfast_140725-9515.avif" alt="">
            <div class="btn">
                <h2>Breakfast</h2>
            <a href="">Order</a>
            </div>

         </div>
         <div class="order lun">
            <img src="/myphp-1/e-com-7/images/cup-hot-cappuccino-chocolate-croissant-with-breakfast_140725-9515.avif" alt="">
            
            <div class="btn">
                <h2>Lunch</h2>
                <a href="">Order</a>
            </div>

         </div>
         <div class="order din">
            <img src="/myphp-1/e-com-7/images/cup-hot-cappuccino-chocolate-croissant-with-breakfast_140725-9515.avif" alt="">
            <div class="btn">
                <h2>Dinner</h2>
            <a href="">Order</a>
            </div>

         </div>
</div>

<div class="reg regis">
    <h2><img src="https://static.vecteezy.com/system/resources/previews/014/971/638/original/food-logo-design-template-restaurant-free-png.png" alt=""><i class="bi bi-x-circle-fill cancle1"></i></h2>
    <form action="register.php" method="POST">
        <div class="frm-g">
            <input type="text" placeholder="Username" name="name">
        </div>
       <div class="frm-g">
        <input type="email" placeholder="Email" name="email">
       </div>
        <div class="frm-g">
            <input type="password" placeholder="Password" name="pass">
        </div>
        <div class="frm-g">
            <input type="password" placeholder="Confirm-password" name="repass">
        </div>
        <input type="submit" value="Register" name="btn1">
        <p>If you already have an account please login <a href="" id="logbtn">Log in</a></p>
    </form>
</div>
<div class="reg log">
    <h2><img src="https://static.vecteezy.com/system/resources/previews/014/971/638/original/food-logo-design-template-restaurant-free-png.png" alt=""><i class="bi bi-x-circle-fill cancle2"></i></h2>
    <form action="register.php" method="POST">
       
       <div class="frm-g">
        <input type="email" placeholder="Email" name="email">
       </div>
        <div class="frm-g">
            <input type="password" placeholder="Password" name="pass">
        </div>
        
        <input type="submit" value="Login" name="btn2">
        <p>If you don't have an account please <a href="" id="regbtn">Register</a></p>
    </form>
</div>
        
        
    
</body>
<script src="./home.js"></script>
</html>