<?php
if($_POST){ //same if(!empty($_POST))
  $sql="UPDATE ch7_animal SET name='".$_POST['name']."', weight='".$_POST['weight']."', info='".$_POST['info']."', date=NOW() WHERE id=".$_POST['id'];
  $db->query($sql); //pdo->執行指令
  header('location:?page=crud_animal');
}

?>
<table width=100%>
<tr>
  <td>編號</td>
  <td>動物名稱</td>
  <td>重量</td>
  <td>簡介</td>
  <td>更新日期</td>
  <td>操作</td>
</tr>
<tr><td colspan="6"><hr/></td></tr>
<?php
$sql="SELECT * FROM ch7_animal WHERE id=".$_GET['id'];
$row=$db->query($sql)->fetch();
?>
<form method="post">
<tr>
  <td>#
    <input type="hidden" name="id" value="<?=$row['id']?>">
  </td>
  <td><input type="text" name="name" value="<?=$row['name']?>"></td>
  <td><input type="number" name="weight" value="<?=$row['weight']?>"></td>
  <td><input type="text" name="info" style="width:95%" value="<?=$row['info']?>"></td>
  <td><?=date("Y-m-d H:i:s")?></td>
  <td>
    <input type="submit" value="修改">
    <input type="reset" value="重置">
  </td>
</tr>
</form>
<tr><td colspan="6"><hr/></td></tr>
<?php
//select start
$sql="SELECT * FROM ch7_animal WHERE 1";
$rows=$db->query($sql)->fetchAll();
//select end
foreach($rows as $row){
?>
<tr>
  <td><?=$row['id']?></td>
  <td><?=$row['name']?></td>
  <td><?=$row['weight']?></td>
  <td><?=$row['info']?></td>
  <td><?=$row['date']?></td>
  <td>
    <button onclick="document.location.href='?page=crud_mdy2&id=<?=$row['id']?>'">修改</button>
    <button onclick="document.location.href='?page=crud_animal&del=<?=$row['id']?>'">刪除</button>
  </td>
</tr>
<?php
}
?>
</table>