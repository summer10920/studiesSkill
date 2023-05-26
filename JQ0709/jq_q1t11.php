<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <script src="plugins/jquery-3.4.1.min.js"></script>
</head>

<body>
  <form>
    <h3>新增管理者帳號</h3>
    <p>帳號：<input type="text" name="acc"></p>
    <p>密碼：<input type="password" name="pwd"></p>
    <p>
      確認密碼：
      <input type="password" name="chk">
      <br>
      <b style="font-size:0.8rem;color:red"></b>
    </p>
    <p><input type="submit" value="送出"><input type="reset" value="重置"></p>
  </form>
  <script>
    $("form").submit(function(){
      let aa=$("input[name=pwd]"),bb=$("input[name=chk]");
      if(aa.val()!=bb.val()) {
        bb.siblings('b').text("你的密碼不一致");
        return false; //如果先碰到這裡，整個FN會直接結束離開，理所當然下面的if根本不會被執行檢查
      }
      if(aa.val().length<8){
        bb.siblings('b').text("密碼長度至少8碼");
        return false;
      }
    });
  </script>
</body>

</html>