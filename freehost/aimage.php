<p class="t cent botli">校園映像資料管理</p>
<form method="post" action="api.php?do=imagemdy">
  <table width="100%">
    <tbody>
      <tr class="yel">
        <td width="68%">校園映像資料圖片</td>
        <td width="7%">顯示</td>
        <td width="7%">刪除</td>
        <td></td>
      </tr>
      <?php
      $nowpage = (empty($_GET['p'])) ? 1 : $_GET['p'];
      /*
      p,b
      1,3*0
      2,3*1
      3,3*2
      */
      $begin = ($nowpage - 1) * 3;
      $rows = select("t6_img", "1 limit " . $begin . ",3");
      foreach ($rows as $row) {
        $ckd = ($row['dpy']) ? "checked" : "";
        ?>
        <tr>
          <td align="center"><img src="upload/<?= $row['img'] ?>" width=100 height=68></td>
          <td>
            <input type="hidden" name="dpy[<?= $row['id'] ?>]" value="0">
            <input type="checkbox" name="dpy[<?= $row['id'] ?>]" value="1" <?= $ckd ?>>
          </td>
          <td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
          <td><input type="button" onclick="op('#cover','#cvr','view.php?do=imagechg&id=<?= $row['id'] ?>')" value="更換圖片"></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
  <div style="text-align:center;">
<?php
$re=navpage("t6_img",1,3,$nowpage);
foreach ($re as $key => $value) {
  echo '<a class="bl" style="font-size:'.(($nowpage==$key)?60:30).'px;" href="?do=aimage&p='.$value.'">'.$key.'</a>';
}
?>
  </div>
  <table style="margin-top:40px; width:70%;">
    <tbody>
      <tr>
        <td width="200px"><input type="button" onclick="op('#cover','#cvr','view.php?do=imageadd')" value="新增校園映像圖片"></td>
        <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
      </tr>
    </tbody>
  </table>

</form>