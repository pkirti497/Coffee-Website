<?php
$name=$_POST["name"];
$contact=$_POST["contact"];
$emailaddress=$_POST["emailaddress"];
$password=$_POST["password"];
$address=$_POST["address"];
$con=mysqli_connect("localhost","root","","cafdb");
$query="insert into kirti (name,contact,emailaddress,password,address) values('$name','$contact','$emailaddress','$password','$address')";
mysqli_query($con,$query);
echo "<script>alert('Registration is done');window.location.href='index.php';</script>";
?>