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
echo("connection successfully");
}
?>

<?php

if(isset($_POST['submit'])){
$stdname=$_POST['stdname'];
$regno=$_POST['regno'];
$address=$_POST['address'];
$phno=$_POST['phno'];
$my="INSERT INTO reg(stdname,regno,address,phno)VALUES('$stdname','$regno','$address','$phno')";
$c=mysqli_query($conn,$my);
if($c){
echo "added successfully";
}
else{
echo mysqli_error($conn);
}
}
?>