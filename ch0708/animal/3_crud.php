<?php
// print_r($_POST);
if (!empty($_GET['del'])) { //如果有要殺資料
  echo $sql = "DELETE FROM ch8_animal WHERE id=" . $_GET['del'];
  $db->query($sql);
  header("location:?page=v3_crud");
}
// is_array($_POST['name']); //檢查陣列的函式，對象如果是陣列會return布林=>TRUE

if (!empty($_POST) && !is_array($_POST['name'])) { //當偵測到POST有東西，屬於新增任務
  $sql = "INSERT INTO ch8_animal VALUES(null,'" . $_POST['name'] . "'," . $_POST['weight'] . ",'" . $_POST['info'] . "',NOW())";
  //INSERT INTO ch8_animal VALUES(null,'石虎',32,'嘉義的生態保護動物，台灣製造十分稀少請友善愛護。',NOW())
  $db->query($sql);
  // header("location:?page=v3_crud"); //轉址使POST初始化(沒東西)，避免F5會不斷新增
}

if (!empty($_POST) && is_array($_POST['name'])) { //當偵測到POST有東西，屬於全部修改之任務
  // print_r($_POST);
  // 大量更新SQL的任務
  foreach ($_POST['name'] as $key => $value) { //從陣列先抽取出id ($key=3->4->5->7->10) ($value=大浣熊->耳廓狐)
    //在這裡的$value 等同於 $_POST['name'][$key]
    $chg = "";
    if ($value != $_POST['old_name'][$key]) $chg .= "name='" . $value . "',"; // 舉例來說，會指定加入右側 name='酷斯拉',
    if ($_POST['weight'][$key] != $_POST['old_weight'][$key]) $chg .= "weight=" . $_POST['weight'][$key] . ",";
    if ($_POST['info'][$key] != $_POST['old_info'][$key]) $chg .= "info='" . $_POST['info'][$key] . "',";
    if (!empty($chg)) { //判別如果$chg還是空字串，也就是都沒有被塞入任何文字
      $sql = "UPDATE ch8_animal SET " . $chg . " date=NOW() WHERE id=" . $key;
      $db->query($sql);
      // $sql="UPDATE ch8_animal SET name='11', weight= 44, info = '233',date=NOW() WHERE id = 32";
      // echo $sql."<br>";
    }
  }
}

?>

<table width="100%">
  <tr>
    <td>編號</td>
    <td>動物名稱</td>
    <td>重量</td>
    <td>簡介</td>
    <td>更新日期</td>
    <td>操作</td>
  </tr>


  <tr>
    <td colspan="6">
      <hr>
    </td>
  </tr>
  <form method="post">
    <!--new insert's form表單-->
    <tr>
      <td>#</td>
      <td><input type="text" name="name"></td>
      <td><input type="number" name="weight"></td>
      <td><input type="text" name="info" style="width:100%"></td>
      <td><?= date("Y-m-d H:i:s") ?></td>
      <td>
        <button type="submit">新增</button>
        <button type="reset">重置</button>
    </tr>
  </form>
  <tr>
    <td colspan="6">
      <hr>
    </td>
  </tr>
  <form method="post">
    <?php
    //for select to 資料列表
    $result = $db->query("SELECT COUNT(*) FROM ch8_animal WHERE 1")->fetch();
    $total = $result[0];
    $many = ceil($total / 5); //需要幾個page

    $nowpage = (empty($_GET['np'])) ? 1 : $_GET['np'];
    if(empty($_GET['np'])) $nowpage=1;
    else{
      if($_GET['np']>$many) $nowpage=$many;
      else $nowpage=$_GET['np'];
    }
    // same as $nowpage = (empty($_GET['np'])) ? 1 : (($_GET['np'] > $many) ? $many : $_GET['np']);

    //設計page's navbar的array
    $pageNav["<<"]=($nowpage==1)?1:($nowpage-1);
    for($i=1;$i<=$many;$i++) $pageNav[$i]=$i;
    $pageNav[">>"]=($nowpage==$many)?$many:($nowpage+1);
    // print_r($pageNav);

    $begin = ($nowpage - 1) * 5; //p1=0,p2=5,p3=10...
    $sql = "SELECT * FROM ch8_animal WHERE 1 LIMIT " . $begin . ",5";  // LIMIT begin,range
    $rows = $db->query($sql)->fetchAll();

    foreach ($rows as $row) {
      ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td>
          <input type="text" name="name[<?= $row['id'] ?>]" value="<?= $row['name'] ?>">
          <input type="hidden" name="old_name[<?= $row['id'] ?>]" value="<?= $row['name'] ?>">
        </td>
        <td>
          <input type="number" name="weight[<?= $row['id'] ?>]" value="<?= $row['weight'] ?>">
          <input type="hidden" name="old_weight[<?= $row['id'] ?>]" value="<?= $row['weight'] ?>">
        </td>
        <td>
          <input type="text" name="info[<?= $row['id'] ?>]" value="<?= $row['info'] ?>">
          <input type="hidden" name="old_info[<?= $row['id'] ?>]" value="<?= $row['info'] ?>">
        </td>
        <td><?= $row['date'] ?></td>
        <td>
          <!-- <button onclick="document.location.href='?page=v2_crud&del=<?= $row['id'] ?>'">刪除</button> -->
          <!--此時這裡有submit的屬性-->
          <input type="button" value="X" onclick="document.location.href='?page=v3_crud&del=<?= $row['id'] ?>'">
        </td>
      </tr>
    <?php
    }
    ?>
    <tr>
      <td colspan="6" align="center">
        <hr>
        <p>
          <?php foreach ($pageNav as $key => $value) echo ' <a href="?page=v3_crud&np='.$value.'">'.$key.'</a> ';?>
        </p>
        <!-- <input type="submit" value="全部更新"> -->
        <button>全部更新</button>
      </td>
    </tr>
  </form>
</table>