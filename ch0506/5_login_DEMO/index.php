<?php
//SESSION是超全域變數，可以協助在不同的網頁上讀取到相同變數(陣列)
session_start();
// print_r($_SESSION);
//協助將已經有權限的用戶(持有SESSION['user']的人)引導到該去的位置
//持有SESSION['user']的人 => 曾經有login_check成功的人
if(!empty($_SESSION['user'])) header('location:member.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="../2_pretty_login.css">
</head>
<body>
  <div class="login">
    <h1>Login</h1>
      <form method="post" action="5_login_check.php">
        <input type="text" name="acc" placeholder="Username" required="required" />
        <input type="password" name="pwd" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
      </form>
  </div>
</body>
</html>