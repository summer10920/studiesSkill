<p class="t cent botli">最新消息資料管理</p>
<form method="post" action="api.php?do=newsmdy">
  <table width="100%">
    <tbody>
      <tr class="yel">
        <td width="68%">最新消息資料內容</td>
        <td width="7%">顯示</td>
        <td width="7%">刪除</td>
      </tr>
      <?php
      $nowpage = (empty($_GET['p'])) ? 1 : $_GET['p'];
      $begin = ($nowpage - 1) * 5;
      $rows = select("t9_news", "1 limit " . $begin . ",5");
      foreach ($rows as $row) {
        $ckd = ($row['dpy']) ? "checked" : "";
        ?>
        <tr>
          <td>
            <textarea name="text[<?= $row['id'] ?>]" style="width: 530px;" rows="3"><?= $row['text'] ?></textarea>
          </td>
          <td>
            <input type="hidden" name="dpy[<?= $row['id'] ?>]" value="0">
            <input type="checkbox" name="dpy[<?= $row['id'] ?>]" value="1" <?= $ckd ?>>
          </td>
          <td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
  <div style="text-align:center;">
    <?php
    $re = navpage("t9_news", 1, 5, $nowpage);
    foreach ($re as $key => $value) {
      echo '<a class="bl" style="font-size:' . (($nowpage == $key) ? 60 : 30) . 'px;" href="?do=anews&p=' . $value . '">' . $key . '</a>';
    }
    ?>
  </div>
  <table style="margin-top:40px; width:70%;">
    <tbody>
      <tr>
        <td width="200px"><input type="button" onclick="op('#cover','#cvr','view.php?do=newsadd')" value="新增最新消息資料"></td>
        <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
      </tr>
    </tbody>
  </table>
</form>