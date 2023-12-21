<?php
$servername="localhost";
$username="root";
$password="";
$dbname="php";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("connection failed".$connect_error);
}
else{
echo("connection success");
}
?>

<?php

if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$sql="INSERT INTO login(username,password)VALUES('$username','$password')";
$result=mysqli_query($conn,$sql);
if($result){
echo "New record added";
}
else{
echo mysqli_error($conn);
}
}
?>