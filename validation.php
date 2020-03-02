<?php
   session_start();

   $db = mysqli_connect('localhost','root','');
   mysqli_select_db($db,'phpform');

   $name = $_POST['name'];
   $pass = $_POST['pass'];

   $qry = " select * from user where name ='$name' && password = '$pass'";
   $result = mysqli_query($db, $qry);

   $num = mysqli_num_rows($result);


   if($num == 1){
      $_SESSION['username'] = $name;
   	header('location:welcome.php');
   }
   else{
   	header('location:login.php');
   }
?>   
