<?php
$sql="SELECT * FROM ch8_animal WHERE 1";
$rows=$db->query($sql)->fetchAll();
// print_r($rows);

?>
<!-- <h1>這裡是1_show.php</h1> -->
<table width="100%">
<tr>
  <td>編號</td>
  <td>動物名稱</td>
  <td>重量</td>
  <td>簡介</td>
  <td>更新日期</td>
</tr>
<?php
foreach ($rows as $row) {
?>
<tr>
  <td><?=$row['id']?></td>
  <td><?=$row['name']?></td>
  <td><?=$row['weight']?></td>
  <td><?=$row['info']?></td>
  <td><?=$row['date']?></td>
</tr>
<?php
}
?>
</table>