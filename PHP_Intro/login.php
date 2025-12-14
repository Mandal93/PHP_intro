<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    session_start();
   $username = $_POST['username'];
   $name = $_POST['name'];

   $_SESSION['username'] = $username;
   $_SESSION['name'] = $name;
   $_SESSION['role'] = 2;

   header("Location: /BCA_Intro/Dashboard");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/BCA_Intro">Home</a>
    <form action="" method = "post">
        Username: <input type="text" name ="username" id="username"> <br>
        Name : <input type="text" name ="name" id="name"> <br>
        <input type="submit" value="Login">
    </form>
    
</body>
</html>