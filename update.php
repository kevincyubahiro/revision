<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>kkkk
    <?php
    include('conn.php');
    $id = $_GET['updt'];
    $select =mysqli_query($conn , "SELECT * FROM mama WHERE id = '$id'");
    $row= mysqli_fetch_array($select);
    ?>
    <form action="" method="post">
    username<input type="text" name="username" value="<?php echo $row['username']?>">
    address<input type="text" name="address" value="<?php echo $row['address']?>">
    password<input type="text" name="password" value="<?php echo $row['password']?>">
    <button name='submit'>update</button>
    </form>
</body>
</html>
<?php
//
include('conn.php');
if (isset($_POST['submit'])) {
    # code...
    $username= $_POST['username'];
    $address= $_POST['address'];
    $password= $_POST['password'];
    $update = mysqli_query($conn , "UPDATE mama SET id ='$id', username='$username' , `address` ='$address' , `password` ,'$password'  WHERE id ='$id'");

    if ($update) {
        # code...
        header('location:select.php');
    }
  else{
    echo 'do..........failed';
  }

}


?>