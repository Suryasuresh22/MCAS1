
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
<bgcolor="lavender">
<center><h2><font_color="red">Registration Form</h2></font>

<form method="post" action="grade.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="grade">Grade:</label>
    <input type="grade" id="grade" name="grade" required><br><br>
    <input type="submit" name="submit" value="submit">
</form>
   
</center>
</body>
</html>
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
$name=$_POST['name'];
$grade=$_POST['grade'];
$sql="INSERT INTO grade(name,grade)VALUES('$name','$grade')";
$result=mysqli_query($conn,$sql);
if($result){
echo "New record added";
}
else{
echo mysqli_error($conn);
}
}
?>
<?php
$conn=mysqli_connect("localhost","root","","php") or
die("unable to connect:");
$query="select*from grade";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($res))
{
echo $row['name'];
echo " ".$row['grade'];
echo"<br>";
}
?>


