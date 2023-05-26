<p class="t cent botli">動態文字廣告管理</p>
<form method="post" action="api.php?do=maqemdy">
  <table width="100%">
    <tbody>
      <tr class="yel">
        <td width="68%">替代文字</td>
        <td width="7%">顯示</td>
        <td width="7%">刪除</td>
      </tr>
      <?php
      $rows = select("t4_maqe", 1);
      foreach ($rows as $row) {
        $ckd = ($row['dpy']) ? "checked" : "";    //1 same true, 0 same false
        ?>
        <tr>
          <td><input style="width:90%" type="text" name="text[<?= $row['id'] ?>]" value="<?= $row['text'] ?>"></td>
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
  <table style="margin-top:40px; width:70%;">
    <tbody>
      <tr>
        <td width="200px"><input type="button" onclick="op('#cover','#cvr','view.php?do=maqeadd')" value="新增動態文字廣告"></td>
        <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
      </tr>
    </tbody>
  </table>

</form>