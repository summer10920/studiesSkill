<?php
//insert start
if($_POST){
  $sql="INSERT INTO ch7_animal VALUES(NULL,'".$_POST['name']."',".$_POST['weight'].",'".$_POST['info']."',NOW())";
  $db->query($sql);
  header("location:?page=crud_animal");
}
//insert end

//delete start
if(!empty($_GET['del'])){ //如果$_GET['del']有東西
  //殺了$_GET['del']所指定的id
  $sql="DELETE FROM ch7_animal WHERE id=".$_GET['del'];
  $db->query($sql);
  header("location:?page=crud_animal");
}

//select start
$sql="SELECT * FROM ch7_animal WHERE 1";
$rows=$db->query($sql)->fetchAll();
//select end
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
<form method="post">
<tr>
  <td>#</td>
  <td><input type="text" name="name"></td>
  <td><input type="number" name="weight"></td>
  <td><input type="text" name="info" style="width:95%"></td>
  <td><?=date("Y-m-d H:i:s")?></td>
  <td>
    <input type="submit" value="新增">
    <input type="reset" value="重置">
  </td>
</tr>
</form>
<tr><td colspan="6"><hr/></td></tr>
<?php
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