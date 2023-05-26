<p class="t cent botli">管理者帳號管理</p>
<form method="post" action="api.php?do=adminmdy">
  <table width="100%"><tbody>
      <tr class="yel"><td width="38%">帳號</td><td width="38%">密碼</td><td width="7%">刪除</td></tr>
<?php
$rows=select("q1t10_admin","id!=1");
foreach ($rows as $row) {?>
      <tr>
        <td><input style="width:95%" type="text" name="acc[<?=$row['id']?>]" value="<?=$row['acc']?>"></td>
        <td><input style="width:95%" type="password" name="pwd[<?=$row['id']?>]" value="<?=$row['pwd']?>"></td>
        <td><input type="checkbox" name="del[]" value="<?=$row['id']?>"></td>
      </tr>
<?php }?>
    </tbody></table>
  <table style="margin-top:40px; width:70%;">
    <tbody>
      <tr>
        <td width="200px">
          <input type="button" onclick="op('#cover','#cvr','view.php?do=adminadd')" value="新增管理者帳號">
        </td>
        <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
      </tr>
    </tbody>
  </table>
</form>