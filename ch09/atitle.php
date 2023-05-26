<p class="t cent botli">網站標題管理</p>
<form method="post" action="api.php?do=titlemdy">
  <table width="100%">
    <tbody>
      <tr class="yel">
        <td width="45%">網站標題</td>
        <td width="23%">替代文字</td>
        <td width="7%">顯示</td>
        <td width="7%">刪除</td>
        <td></td>
      </tr>
<?php
$rows=select("q1t3_title",1);
foreach ($rows as $row) {
?>
      <tr>
        <td><img src="upload/<?=$row['img']?>" width="300" height="30"></td>
        <td><input type="text" name="text[<?=$row['id']?>]" value="<?=$row['text']?>"></td>
        <td>
          <input type="hidden" name="dpy[<?=$row['id']?>]" value="0">
          <input type="radio" name="radio" value="<?=$row['id']?>" <?=($row['dpy']==1)?"checked":""?>>
        </td>
        <td><input type="checkbox" name="del[]" value="<?=$row['id']?>"></td>
        <td>
          <input type="button" onclick="op('#cover','#cvr','view.php?do=titlechg&id=<?=$row['id']?>')" value="更新圖片">
        </td>
      </tr>
      
<?php
}
?>
    </tbody>
  </table>



  <table style="margin-top:40px; width:70%;">
    <tbody>
      <tr>
        <td width="200px">
          <input type="button" onclick="op('#cover','#cvr','view.php?do=titleadd')" value="新增網站標題圖片">
        </td>
        <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
      </tr>
    </tbody>
  </table>
</form>