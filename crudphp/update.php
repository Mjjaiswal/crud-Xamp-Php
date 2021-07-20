<?php
$id=$_REQUEST['id'];
$name=$_POST['name'];
$conn=mysqli_connect('localhost','root','','crudphp');
$query="update tblcrudphp set name='$name' where id='$id'";
$res=mysqli_query($conn,$query);
mysqli_close($conn);
header("Location:show.php");
?>