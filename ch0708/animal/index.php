<?php
$db=new PDO("mysql:host=127.0.0.1;dbname=php_10804;charset=utf8","root","");
date_default_timezone_set('Asia/Taipei');

if(!empty($_GET['page'])) $body=$_GET['page'];
else $body='main';
// $body=(!empty($_GET['page']))?$_GET['page']:'main';

// 把文字A變成文字B，防止別人猜到你的GET值等於網頁檔名稱
switch ($body) {
  case 'main':
    $myurl='main';
  break;
  case 'v1_show':
    $myurl='1_show';
  break;
  case 'v1_add':
    $myurl='1_add';
  break;
  case 'v1_mdy':
    $myurl='1_mdy';
  break;
  case 'v1_del':
    $myurl='1_del';
  break;
  case 'v2_crud':
    $myurl='2_crud';
  break;
  case 'v3_crud':
    $myurl='3_crud';
  break;
  // default:
  //   $myurl='main';
  // break;
}


?>
<!-- 
  //超連結夾帶GET 
  <a href="?page=test&code=1234">測試連結</a>

  <br><br>

  //form表單提交，以GET為傳遞方式
  <form action="" method="get">
    <button type="submit" name="page" value="test">測試按鈕</button>
    <button name="page" value="test">測試按鈕</button>
  </form>

  //使用JS做轉址並夾帶GET
  <button onclick="document.location.href='?page=test'">測試按鈕</button>
-->
<p>
  <button onclick="document.location.href='./'">回首頁</button>
</p>
<p>
  <form action="" method="get">
    <button name="page" value="v1_show">顯示(1)</button>
    <button name="page" value="v1_add">新增(1)</button>
    <button name="page" value="v1_mdy">修改(1)</button>
    <button name="page" value="v1_del">刪除(1)</button>
  </form>
</p>
<p>
  <button onclick="document.location.href='?page=v2_crud'">CRUD(2)</button>
</p>
<p>
  <button onclick="document.location.href='?page=v3_crud'">CRUD(3)</button>
</p>
<hr/>
<?php
include($myurl.".php");
// include('movie_body.php');
?>