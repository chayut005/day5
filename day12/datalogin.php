<?php
session_start();
$user=$_POST['username'];
$psw=$_POST['password']; 

if ($user =='hadead' and $psw =='1150'){
    $_SESSION['username']=$user;
    $_SESSION['name']="ชยุต  ชะนวน";
    header("location:data.php");
}else{
    header("location:index.php");
}
?>