<?php
session_start();
if(empty($_SESSION['user'])) { //壞人看這個
  // header('location:index.php');
  echo "<h1>你沒有權限觀看此頁面，請回到登入畫面</h1>";
}
else{ //有權限的看這個
?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <meta http-equiv="X-UA-Compatible" content="ie=edge">
              <title>Document</title>
            </head>
            <body>
              <h1>Hello <?=$_SESSION['user']?>！Welcome to Manager Site...</h1>
              <a href="logout.php">後台登出</a>
            </body>
            </html>
<?php
}
?>

