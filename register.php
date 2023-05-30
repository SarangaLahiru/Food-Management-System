<?php
include "valid.php";
session_start();

if(isset($_POST['btn1'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $repass=$_POST['repass'];

    register($name,$email,$pass,$repass,$conn,$conn1);
}

function register($name,$email,$pass,$repass,$conn,$conn1){
    $sql="INSERT INTO user (name,email,password) VALUES (?,?,?)";
    $stmt=mysqli_stmt_init($conn);
   

    if(mysqli_stmt_prepare($stmt,$sql)){
        mysqli_stmt_bind_param($stmt,'sss',$name,$email,$pass);
        mysqli_stmt_execute($stmt);

        $_SESSION['user_name']=$name;
        $_SESSION['user_email']=$email;

        $sql1="CREATE TABLE $name  (ID INT(10) PRIMARY KEY AUTO_INCREMENT,meal_type VARCHAR(10),date VARCHAR(20),time VARCHAR(20),price VARCHAR(10),status VARCHAR(10),count varchar(10))";
        $stmt1=mysqli_query($conn1,$sql1);

        header("location:home2.php");
    }  
}


if(isset($_POST['btn2'])){
    
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    

    log1($email,$pass,$conn);
}
function log1($email,$pass,$conn){
    $sql="SELECT *FROM user WHERE email=? AND password=?";
    $stmt=mysqli_stmt_init($conn);
    if(mysqli_stmt_prepare($stmt,$sql)){
        mysqli_stmt_bind_param($stmt,'ss',$email,$pass);
        mysqli_stmt_execute($stmt);
        $data=mysqli_stmt_get_result($stmt);
        if($row=mysqli_fetch_assoc($data)){
            
            if($row['password']==$pass){
                $_SESSION['user_name']=$row['name'];
                $_SESSION['user_email']=$row['email'];

                header('location:home2.php');

                
            }

        }


    }
}

if(isset($_POST['btn3'])){
    $name=$_POST['name'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $type=$_POST['type'];
    $count=$_POST['count'];
    $price=$_POST['price'];

    

    $sql2="INSERT INTO $name VALUES ('','$type','$date','$time','$price','Pending...','$count')";
    $stmt2=mysqli_query($conn1,$sql2);
    header("location:home2.php");

   
}
?>