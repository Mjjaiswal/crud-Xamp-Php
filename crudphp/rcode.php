<?php
$name=$_POST['name'];
$conn=mysqli_connect('localhost','root','','crudphp');
$query="insert into tblcrudphp (name) values('$name')";
mysqli_query($conn,$query);
mysqli_close($conn);
header("Location:reg.php")
?>