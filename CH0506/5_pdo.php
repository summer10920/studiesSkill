<?php
$dbmsg = "mysql:host=127.0.0.1;dbname=php_study;charset=utf8"; //DB資訊
$dbacc = "root"; //sql帳號
$dbpwd = ""; //sql 密碼
$dblink = new PDO($dbmsg, $dbacc, $dbpwd, null); // 宣告PDO物件使用，並將整個物件資料用$db這個變數存起來
/*
$sqlcode="
  CREATE TABLE php_study.ch7_animal (
    id INT UNSIGNED AUTO_INCREMENT ,
    name VARCHAR(100),
    weight INT,
    info TEXT,
    date DATETIME,
    PRIMARY KEY (id)
  );
";

$sqlcode="
  INSERT INTO ch7_animal VALUES
    (null,'藪貓',53,'會追擊小動物，擅長說好厲害的動物朋友',NOW()),
    (null,'浣熊',37,'會有洗東西的手勢，會偷取人類食物，所以浣熊常常影射小偷這名詞',NOW()),
    (null,'河馬',315,'嘴巴很大瞬間咬合力可以粉碎任何物體，容易爆氣不要輕易靠近',NOW()),
    (null,'美洲豹',73,'地表上最快的動物，行動速度可達到80km/hour的閃電朋友',NOW())
  ";

$sqlcode="
  UPDATE ch7_animal 
  SET name='馬來貘',info='一般路過貘，登場時吃著動畫第一次出現的傑帕力饅頭',date=NOW()
  WHERE id=5;
  UPDATE ch7_animal 
  SET name='印度象',info='背包走路的時候不小心撞到，她卻說是因為自己在跳舞才撞到背包',date=NOW()
  WHERE id=6;
";

$sqlcode="DELETE FROM ch7_animal WHERE id=3";
*/
/*
$sqlcode="SELECT * FROM ch7_animal WHERE weight=53";
$result=$dblink->query($sqlcode);
//var_dump($result);
if(!$result) print_r($dblink->errorinfo()); //如果$result=false 那麼印出pdo的errorinfo()


// while($row = $result->fetch()){
//   print_r($row);
// }

$rows=$result->fetchAll();
print_r($rows);
// echo $rows[0]['name'];
echo $rows[0][1];
*/
$sql = "SELECT * FROM ch7_animal WHERE TRUE";
$rows = $dblink->query($sql)->fetchAll();
// print_r($rows);
// print "<hr>";
?>
<style>
  body{
    background-color:#eee;
  }
  table {
    margin: 10% auto;
    color: #eee;
    border: 1px solid #000;
    font-family: 'Microsoft JhengHei';
    box-shadow:4px 4px 6px 8px #d9d9d9;
    font-size: 1.5em;
  }
  thead>tr>td{
    background-color: Chocolate;
  }
  tbody>tr>td{
    background-color: #c59d80;
  }
  td {
    border: 1px solid #000;
  }
</style>
<table width=80% border=0 cellpadding=10>
  <thead>
    <tr>
      <td>ID</td>
      <td>NAME</td>
      <td>WEIGHT</td>
      <td>INFO</td>
      <td>DATE</td>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($rows as $data) {
      print_r($data);
      ?>
      <tr>
        <td><?= $data['id'] ?></td>
        <td><?= $data['name'] ?></td>
        <td><?= $data['weight'] ?></td>
        <td><?= $data['info'] ?></td>
        <td><?= $data['date'] ?></td>
      </tr>
    <?php
  }
  ?>
  </tbody>
</table>