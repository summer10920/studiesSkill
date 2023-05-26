<?php
require_once('sql.php');
switch ($_GET['do']) {
  case 'titleadd':
    ?>
    <form action="api.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data">
      <p class="t cent botli">網站標題管理</p>
      <p class="cent">
        標題區圖片：<input type="file" name="img">
      </p>
      <p class="cent">
        標題區替代文字：<input type="text" name="text">
      </p>
      <p class="cent">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
      </p>
    </form>
  <?php
    break;
  case 'titlechg':
    ?>
    <form action="api.php?do=<?= $_GET['do'] ?>&id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">
      <p class="t cent botli">修改標題區圖片</p>
      <p class="cent">
        標題區圖片：<input type="file" name="img">
      </p>
      <p class="cent">
        <input type="submit" value="修改">
        <input type="reset" value="重置">
      </p>
    </form>
  <?php
    break;
  case 'maqeadd':
    ?>
    <form action="api.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data">
      <p class="t cent botli">新增動態文字廣告</p>
      <p class="cent">
        動態文字廣告：<input type="text" name="text">
      </p>
      <p class="cent">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
      </p>
    </form>
  <?php
    break;
  case 'mvimadd':
    ?>
    <form action="api.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data">
      <p class="t cent botli">新增動畫圖片</p>
      <p class="cent">
        動畫圖片：<input type="file" name="img">
      </p>
      <p class="cent">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
      </p>
    </form>
  <?php
    break;
  case 'mvimchg':
    ?>
    <form action="api.php?do=<?= $_GET['do'] ?>&id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">
      <p class="t cent botli">修改動畫圖片</p>
      <p class="cent">
        動畫圖片：<input type="file" name="img">
      </p>
      <p class="cent">
        <input type="submit" value="修改">
        <input type="reset" value="重置">
      </p>
    </form>
  <?php
    break;
  case 'imageadd':
    ?>
    <form action="api.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data">
      <p class="t cent botli">新增校園映像圖片</p>
      <p class="cent">
        校園映像圖片：<input type="file" name="img">
      </p>
      <p class="cent">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
      </p>
    </form>
  <?php
    break;
  case 'imagechg':
    ?>
    <form action="api.php?do=<?= $_GET['do'] ?>&id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">
      <p class="t cent botli">修改校園映像圖片</p>
      <p class="cent">
        校園映像圖片：<input type="file" name="img">
      </p>
      <p class="cent">
        <input type="submit" value="修改">
        <input type="reset" value="重置">
      </p>
    </form>
  <?php
    break;
  case 'newsadd':
    ?>
    <form action="api.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data">
      <p class="t cent botli">新增最新消息資料</p>
      <p class="cent">
        <span style="vertical-align: top;">最新消息資料：</span>
        <textarea name="text" cols="30" rows="10"></textarea>
      </p>
      <p class="cent">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
      </p>
    </form>
  <?php
    break;
  case 'adminadd':
    ?>
    <form action="api.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data">
      <p class="t cent botli">新增管理者帳號</p>
      <p class="cent">
        帳號：<input type="text" name="acc"><br>
        密碼：<input type="password" name="pwd"><br>
        確認密碼：<input type="password" name="check"><br>
      </p>
      <p class="cent">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
      </p>
    </form>
  <?php
    break;
  case 'menuadd':
    ?>
    <form action="api.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data">
      <p class="t cent botli">新增主選單</p>
      <p class="cent">
        主選單名稱：<input type="text" name="text"><br>
        主選單連結網址：<input type="text" name="link"><br>
      </p>
      <p class="cent">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
      </p>
    </form>
  <?php
    break;
  case 'menuchg':
    ?>
    <form action="api.php?do=<?= $_GET['do'] ?>&id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">
      <p class="t cent botli">編輯次選單</p>
      <table class="cent" style="width:50%;margin:0 auto">
        <thead><tr><th>選單名稱</th><th>選單連結網址</th><th>刪除</th></tr></thead>
        <tbody id="tb">
<?php
$rows=select("q1t12_menu","parent=".$_GET['id']);
foreach ($rows as $row) {
?>
          <tr>
            <td><input type="text" name="text[<?=$row['id']?>]" value="<?=$row['text']?>"></td>
            <td><input type="text" name="link[<?=$row['id']?>]" value="<?=$row['link']?>"></td>
            <td><input type="checkbox" name="del[]" value="<?=$row['id']?>"></td>
          </tr>
<?php
}
?>
        </tbody></table>
      <p class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"><input type="button" value="更多" onclick="add()"></p>
      <script>
      function add(){
        var txt=`
          <tr>
            <td><input type="text" name="new[text][]"></td>
            <td><input type="text" name="new[link][]"></td>
            <td></td>
          </tr>
        `;
        $("#tb").append(txt);
      }
      </script>
    </form>
  <?php
    break;
}

?>