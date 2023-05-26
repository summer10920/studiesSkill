<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<body>
  <form method="get">
    <p>新增管理者帳號</p>
    <p>帳號：<input type="text" name="acc"></p>
    <p>密碼：<input type="text" name="pwd"></p>
    <p>
      確認密碼：
      <input type="text" name="pwd2">
      <br><b style="color:red"></b>
    </p>
    <p><input type="submit" value="新增"><input type="reset" value="重置"></p>
  </form>

  <script>
    $('form').submit(function() {
      let aa = $('input[name=pwd]'),bb = $('input[name=pwd2]');

      if (aa.val() != bb.val()) { //這兩欄的value值不相同
        bb.siblings('b').text('你的密碼不一致');
        return false;
      }
      if (aa.val().length < 8) { //這aa欄的value值計算長度不足8
        bb.siblings('b').text('你的密碼長度最少8碼');
        return false;
      }
    });
  </script>

</body>

</html>