<?php
$dblink=new PDO("mysql:host=127.0.0.1;dbname=php_10804;charset=utf8","root","",null); //db info,user,password,option(選填)

/*****************************************************建立table
// $sqlcode="CREATE TABLE ch8_animal 
//   ( 
//     id INT UNSIGNED NOT NULL AUTO_INCREMENT,
//     name TEXT NOT NULL,
//     weight INT NOT NULL,
//     info TEXT NOT NULL,
//     date DATETIME NOT NULL,
//     PRIMARY KEY (id)
//   )
//   ENGINE = InnoDB;";
// $result=$dblink->query($sqlcode);
*/

/*************************************************insert
// $sqlcode="INSERT INTO ch8_animal VALUES(null,'熊貓',125,'黑白相間的熊熊','2019-10-31 13:11:10')";
// $sqlcode="INSERT INTO ch8_animal VALUES(null,'熊貓',125,'黑白相間的熊熊',NOW())";
// $result=$dblink->query($sqlcode);
*/

/* *********************************************update
$result=$dblink->query("UPDATE ch8_animal SET weight=185 WHERE name='熊貓'");
*/

/* *********************************************delete
$result=$dblink->query("DELETE FROM ch8_animal WHERE id=1");
*/

/* *********************************************select
先PDO指令新增4組動物

$sql="INSERT INTO ch8_animal VALUES
  (null,'藪貓',23,'食肉目 貓科 藪貓屬',NOW()),
  (null,'浣熊',8,'食肉目 浣熊科 浣熊屬',NOW()),
  (null,'耳廓狐',17,'食肉目 犬科 狐屬',NOW()),
  (null,'河馬',120,'鯨偶蹄目[6][7] 河馬科 河馬屬',NOW())
;";
$result=$dblink->query($sql);
*/

$sql="SELECT * FROM ch8_animal WHERE 1";
$result=$dblink->query($sql); //如果是select,這行指令已經取得了對象，但要另外用其他方式取得

// var_dump($result); //當指令處理失敗會得到一個布林值false
if(!$result){ // 檢查錯誤訊息的做法
  $err_msg=$dblink->errorInfo();
  print_r($err_msg);
}

//fetch vs fetchAll，前者只拿一筆資料(一維陣列)回來，後者是全部資料接住(用二維陣列)回傳

// $row=$result->fetch();
// echo $row['name']."<br>";
// $row=$result->fetch();
// echo $row['name']."<br>";

// while($row=$result->fetch()){
//   echo $row['name']."<br>";
// }

$rows=$result->fetchAll();
// print_r($rows);
foreach($rows as $row){
  echo $row['name']."<br>";
}

print "<hr>";

$sql="SELECT * FROM ch8_animal WHERE 1";
$rows=$dblink->query($sql)->fetchAll();
// print_r($rows);

//  ver1
echo "
  <table border=1>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>weight</th>
      <th>info</th>
      <th>date</th>
    </tr>
";
    foreach ($rows as $row) {
      echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['weight']."</td><td>".$row['info']."</td><td>".$row['date']."</td></tr>";
    }
echo "
  </table>
";
?>
<hr>

<table border=1 width="100%">
  <tr>
    <th>id</th>
    <th>name</th>
    <th>weight</th>
    <th>info</th>
    <th>date</th>
  </tr>
<?php
//php zone start
foreach($rows as $row){
?>
<!-- html zone start-->
  <tr>
    <td><?=$row['id']?></td>
    <td><?=$row['name']?></td>
    <td><?=$row['weight']?></td>
    <td><?=$row['info']?></td>
    <td><?=$row['date']?></td>
  </tr>
<?php
//php zone start
}
?>
</table>

