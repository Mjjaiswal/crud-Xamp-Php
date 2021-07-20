<?php
$conn=mysqli_connect('localhost','root','','crudphp');
$query="select * from tblcrudphp";
$res=mysqli_query($conn,$query);
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
    <table border="1" cellspacing="2" cellpadding="2">
        <tr>
            <th> S.No. </th>
            <th> Name </th>
            <th> Edit </th>
            <th> Delete </th>
        </tr>

<?php
$i=1;
while($row=mysqli_fetch_array($res))
{
?>
<tr>
<td><?php echo $i ?></td>
<td><?php echo $row['name'] ?></td>
<td><a href="editreg.php?$id=<?php echo $row['0'] ?>">Edit</a></td>
<td><a href="delete.php?$id=<?php echo $row['0'] ?>">Delete</a></td>
</tr>
<?php
$i++;
}
?>
    </table>
</body>
</html>