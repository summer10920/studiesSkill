<?php
$db = new PDO("mysql:host=127.0.0.1;dbname=php_study;charset=utf8", "root", "");
date_default_timezone_set('asia/Taipei');

switch ($_GET['do']) {
  case 'select':
    $sql = "SELECT * FROM ch7_animal";
    $rows = $db->query($sql)->fetchAll();
    // print_r($rows);
    foreach ($rows as $row) {
      echo '
        <tr>
          <td>'.$row['id'].'</td>
          <td class="name">'.$row['name'].'</td>
          <td>'.$row['weight'].'</td>
          <td>'.$row['info'].'</td>
          <td>'.$row['date']. '</td>
          <td>
            <button class="mdy">修改</button>
            <button onclick="del(this)">刪除</button>
          </td>
        </tr>
      ';
    }
    break;
    case 'update':
      $sql="UPDATE ch7_animal SET name='".$_POST['name']."',weight='".$_POST['weight']."',info='".$_POST['info']."',date=NOW() WHERE id=".$_POST['id'];
      $result=$db->query($sql);
      if($result) echo date("Y-m-d H:i:s");
      // if($result) echo "OK";
    break;
    case 'delete':
      $sql="DELETE FROM ch7_animal WHERE id=".$_POST['id'];
      $result = $db->query($sql);
      if ($result) echo "deleted";
    break;
}
