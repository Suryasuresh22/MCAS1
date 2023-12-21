<?php

if(isset($_POST['submit']))
$name=$_POST['name'];
$passwd=$_POST['passwd'];
$sql="INSERT INTO'log'(username,password)VALUES('$name','$passwd')";
$result=mysqli_query($conn,$sql);
if($result){
echo "New record added";
}
else{
echo mysqli_error($conn);
}
?>
