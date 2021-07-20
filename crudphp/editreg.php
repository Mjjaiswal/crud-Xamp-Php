<?php
$id=$_REQUEST['$id'];
$conn=mysqli_connect('localhost','root','','crudphp');
$query="select * from tblcrudphp where id='$id'";
$res=mysqli_query($conn,$query);
if($row=mysqli_fetch_array($res))
{
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Here</h1>
    <form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
    <input type="text" name="name" value="<?php echo $row['name']?>"/>
    <input type="submit" value="Update">
    </form>
    <?php
	}
	?>
</body>
</html>