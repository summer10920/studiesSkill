<?php
/*
if(!empty($_POST)){
  switch ($_POST['country']) { //超全域變數
    case "tw":
      echo "您好!".$_POST['acc'];
      break;
    case 'jp':
      echo "摳尼鳩挖!".$_POST['acc'];
      break;
    case 'hk':
      echo "雷猴阿雷!".$_POST['acc'];
      break;
  }
  echo "<br/>感謝您的註冊！";
}*/
?>

<form method="post" action="1_check.php?get=123&var=456">
  <p>帳號:<input type="text" name="acc"></p>
  <p>密碼:<input type="password" name="pwd"></p>
  <p>生日:<input type="date" name="birth"></p>
  <p>信箱:<input type="email" name="mail"></p>
  <p>電話:<input type="number" name="phone"></p>
  <p>國籍:
    <select name="country" id="">
      <option value="tw">台灣</option>
      <option value="jp">日本</option>
      <option value="hk">香港</option>
    </select></p>
  <p>性別:
    <input type="radio" name="gender" value="man">男生
    <input type="radio" name="gender" value="woman">女生
  </p>
  <p>專長:
    <input type="checkbox" name="skill[]" value="網頁">網頁開發
    <input type="checkbox" name="skill[]" value="設計">平面設計
    <input type="checkbox" name="skill[]" value="資料庫">資料庫處理
  </p>
  <p>簡介:
    <textarea name="about" cols="30" rows="10"></textarea>
  </p>


  <input type="submit" value="資料送出">
  <input type="reset" value="重置">
</form>