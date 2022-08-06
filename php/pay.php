<?php


$con = mysqli_connect("localhost","root");

 mysqli_select_db($con,'loginsystem');

 if(isset($_POST['submit'])){
 $user = $_POST['name'];
 $email =$_POST['email'] ;
 $address =$_POST['address'];
 $city=$_POST['city'];
 $zip=$_POST['zip'];

 $query="insert into pay (user,email,address,city,zip) values ('$user','$email','$address','$city','$zip')";
 mysqli_query($con,$query);}

 header('location:payment.html');
?>