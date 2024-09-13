<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-color: #4fc785;
        }
        .form{
            height: 400px;
            width: 800px;
            background-color: black;
            margin: 100px auto;
            border-radius: 15px;
        }
        input{
            font-size: 20px;
            height: 30px;
            width: 600px;
            text-align: center;
            padding: 10px ;
            border-radius: 20px;
            margin: 25px;
            
        }
        h1{
            text-align: center;
            color: #3308f3;
        }
button{
    height: 40px;
            width: 80px;
            
            background-color: rgb(205, 247, 22);
            
            border-radius: 15px;
            margin: -20px;
            margin-left: 300px;
  
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="form">


    <form action="" method="post">
        <h1><b>welcome to login form</b>    </h1>
       <input type="text"name="username"placeholder=" username"required><br><br>
        <input type="text"name="address"placeholder="address"required><br><br>
        <input type="password"name="password"placeholder="password"required><br>
        <button name="submit">submit</button>
    
    </form>
</div>
</body>
</html>
<?php
include("conn.php");
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $insert=mysqli_query($conn,"INSERT INTO mama VALUES('','$username','$address','$password')");
    if ($insert) {
    header("location:select.php");
    
    }
    else{
        echo"not inserted";
    }
}



?>