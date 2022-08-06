<?php


$con = mysqli_connect("localhost","root");

 mysqli_select_db($con,'loginsystem');

 if(isset($_POST['submit'])){
 $user = $_POST['user'];
 $email =$_POST['email'] ;
 $mobile =$_POST['mobile'];
 $comments=$_POST['comments'];
 $query="insert into userinfodata (user,email,mobile,comments) values ('$user','$email','$mobile','$comments')";
 mysqli_query($con,$query);}

 header('location:index.php');
?>