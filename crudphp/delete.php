<?php
$id=$_REQUEST['$id'];
$conn=mysqli_connect('localhost','root','','crudphp');
$query="delete from tblcrudphp where id=$id";
$res=mysqli_query($conn,$query);
mysqli_close($conn);
header("Location:show.php")
?>