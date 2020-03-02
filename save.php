<?php
   session_start();
   header('location:login.php');
   
   $db = mysqli_connect('localhost','root','');
   mysqli_select_db($db,'phpform');

   $name = $_POST['name'];
   $pass = $_POST['pass'];

   $qry = " select * from user where name ='$name'";
   $result = mysqli_query($db, $qry);

   $num = mysqli_num_rows($result);


   if($num == 1){
   	echo "already";
   }
   else{
   	$reg= "insert into user(name , password) values ('$name','$pass')";
   	mysqli_query($db, $reg);
   	echo "register";
   }
?>   
