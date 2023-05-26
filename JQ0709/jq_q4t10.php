<?php
$r1=rand(10,99);
$r2=rand(10,99);
$ans=$r1+$r2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <script src="plugins/jquery-3.4.1.min.js"></script>
</head>
<body>
<form action="" onsubmit="return check(this)">
  帳號: <input type="text" name="acc"><br><br>
  密碼: <input type="password" name="pwd"><br><br>
  驗證碼: <?=$r1?>+<?=$r2?>=<input type="text" name="ans"><br><br>
  <input type="submit" value="登入">
</form>
  <script>
    function check(who){
    let aa=$(who).children("input[name=ans]").val();
    if(aa!=<?=$ans?>){
      alert("驗證碼錯誤");
      return false;
    }
  }
  </script>
</body>
</html>