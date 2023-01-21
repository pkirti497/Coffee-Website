<?php
$name=$_POST["name"];
$email=$_POST["email"];
$number=$_POST["number"];
$message=$_POST["message"];
$con=mysqli_connect("localhost","root","","cafdb");
$query="insert into booking_coffee(name,email,number,message) values('$name','$email','$number','$message')";
mysqli_query($con,$query);
echo "<script>alert('Registration is done');window.location.href='index.php';</script>";
?>