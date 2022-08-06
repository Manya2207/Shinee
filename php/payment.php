<?php


$con = mysqli_connect("localhost","root");

 mysqli_select_db($con,'loginsystem');

 if(isset($_POST['submit'])){
 $name = $_POST['name'];
 $no =$_POST['no'] ;
 $date =$_POST['date'];
 $cvv=$_POST['cvv'];

 $query="insert into payment (name,no,date,cvv) values ('$name','$no','$date','$cvv')";
 mysqli_query($con,$query);}
 

 header('location:end.html');
?>