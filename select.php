<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-color: black;
        }
        table{
            background-color: rgb(176, 218, 183);
            height: 100px;
            width: 1000px;
        }
        p{
            color:rgb(16, 238, 116);
            font-size: 50px;
        }
        a{
            text-decoration: none;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="login.php" style="color: red; font-size: 20px;">BACK</a></p>
    <table border="1">
<tr>
    <th>id</th>
    <th>username</th>
    <th>address</th>
    <th>password</th>
    <th colspan="2">operation</th>
</tr>
<?php

include("conn.php");
$select=mysqli_query($conn,"SELECT * FROM mama");
while($row=mysqli_fetch_array($select)){
?>
<tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['username']?></td>
    <td><?php echo $row['address']?></td>
    <td><?php echo $row['password']?></td>
  <td ><a href="delete.php?id=<?php echo $row['id']?>" style="color: rgb(187, 15, 15);font-size: 20px;">delete</a></td>
  <td ><a href="update.php?upt=<?php echo $row['id']?>" style="color: rgb(187, 15, 15);font-size: 20px;">update</a></td>
    
</tr>
<?php
}?>
    </table>
</body>
</html>