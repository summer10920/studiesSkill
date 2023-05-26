<p class="t cent botli">校園映像資料管理</p>
<form method="post" action="api.php?do=imagemdy">
  <table width="100%">
    <tbody>
      <tr class="yel">
        <td width="68%">校園映像資料圖片</td><td width="7%">顯示</td><td width="7%">刪除</td><td></td>
      </tr>
<?php
$nowpage=(empty($_GET['page']))?1:$_GET['page'];
$begin=($nowpage-1)*3; // nowpage:begin=1:0, 2:3, 3:6  
$rows=select("q1t6_img","1 limit ".$begin.",3"); //begin=0,3,6,9....

foreach ($rows as $row) {
?>
      <tr>
        <td><img src="upload/<?=$row['text']?>" width="100" height="68"></td>
        <td>
          <input type="hidden" name="dpy[<?=$row['id']?>]" value="0">
          <input type="checkbox" name="dpy[<?=$row['id']?>]" value="1" <?=($row['dpy']==1)?"checked":""?>>
        </td>
        <td><input type="checkbox" name="del[]" value="<?=$row['id']?>"></td>
        <td><input type="button" onclick="op('#cover','#cvr','view.php?do=imagechg&id=<?=$row['id']?>')" value="更換圖片"></td>
      </tr>
<?php }?>
    </tbody>
  </table>

  <div style="text-align:center;">
<?php
$result=navpage("q1t6_img",1,3,$nowpage);
foreach ($result as $key => $value) {
  // if($key==$nowpage) echo '<a class="bl" style="font-size:60px;" href="?do=aimage&page='.$value.'"> '.$key.' </a>';
  // else echo '<a class="bl" style="font-size:30px;" href="?do=aimage&page='.$value.'"> '.$key.' </a>';
  echo '<a class="bl" style="font-size:'.(($key==$nowpage)?60:30).'px;" href="?do=aimage&page='.$value.'"> '.$key.' </a>';
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