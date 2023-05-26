<p class="t cent botli">最新消息資料管理</p>
<form method="post" action="api.php?do=newsmdy">
  <table width="100%"><tbody>
    <tr class="yel">
      <td width="68%">最新消息資料內容</td><td width="7%">顯示</td><td width="7%">刪除</td>
    </tr>
<?php
$nowpage=(empty($_GET['page']))?1:$_GET['page'];
$begin=($nowpage-1)*3;
$rows=select("q1t9_news","1 limit ".$begin.",3");
foreach ($rows as $row) {
?>
      <tr>
        <td><textarea name="text[<?=$row['id']?>]" cols="80" rows="4"><?=$row['text']?></textarea></td>
        <td>
          <input type="hidden" name="dpy[<?=$row['id']?>]" value="0">
          <input type="checkbox" name="dpy[<?=$row['id']?>]" value="1" <?=($row['dpy']==1)?"checked":""?>>
        </td>
        <td><input type="checkbox" name="del[]" value="<?=$row['id']?>"></td>
      </tr>
<?php }?>
  </tbody></table>
  <div style="text-align:center;">
<?php
$result=navpage("q1t9_news",1,3,$nowpage);
foreach ($result as $key => $value) echo '<a class="bl" style="font-size:'.(($key==$nowpage)?60:30).'px;" href="?do=anews&page='.$value.'"> '.$key.' </a>';
?>
  </div>
  <table style="margin-top:40px; width:70%;"><tbody>
      <tr>
        <td width="200px"><input type="button" onclick="op('#cover','#cvr','view.php?do=newsadd')" value="新增最新消息資料"></td>
        <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
      </tr>
    </tbody></table>
</form>