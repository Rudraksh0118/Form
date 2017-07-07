<?php
$username="root";
$password="";
$servername="www.myfirstw.info";
$db="Rudraksh0118";
$conn=new mysqli($servername,$username,$password,$db);
$name=$_POST['name'];
$email=$_POST['email'];
$sql="INSERT INTO tab1 (firstname,email) VALUES ('$name','$email')";
if($conn->query($sql)==TRUE)
{echo "inserted";}
else
{ echo "error";} 
$conn->close();
?>