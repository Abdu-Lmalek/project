<?php
session_start();


if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header('Location: home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
</head>
<body>
<body>
<form action="" name="submit" method="POST">

User name: <input type  ="text" name="username"  placeholder="Enter user name"> 
<br>
password:
<input type="password" name="password" placeholder="Enter password">
 <br>
 <input type="checkbox"  id ="cb"> <label for="cb">remeber me </label>
 <br>
 <input type="submit" name="submit" value="Login">
</form>
</body>
</html>