<?php
$db = new PDO("mysql:host=127.0.0.1;dbname=php_study;charset=utf8", "root", "");
date_default_timezone_set('asia/Taipei');

$sql = "SELECT * FROM jq9_sell WHERE movie=" . $_POST['movie'] . " and date='" . $_POST['date'] . "'";
$rows = $db->query($sql)->fetchAll();

$time = array( //各時段的總銷售數初始化
  array("10:00~12:00", 0),  //$time[0]=>6
  array("12:00~14:00", 0),  //$time[1]=>8
  array("14:00~16:00", 0),  //$time[2]=>3
  array("16:00~18:00", 0),
  array("18:00~20:00", 0),
  array("20:00~22:00", 0),
  array("22:00~24:00", 0)
);

// echo $time[0][0];

foreach ($rows as $row) {
  // echo '<p>該場次' . $time[$t_at][0] . '賣了' . $row['many'] . '票</p>';

  $t_at = $row['time'] - 1; //將數字少1，使得陣列位置從0開始算
  $time[$t_at][1] += $row['many'];
  /*
  找到time陣列的售票位置並翻新值，舉例
  $time[0][1] 代表 資料庫的第$row['time']場之售票總數
  現在已經知道$time[0]這時間點已經賣掉1,2,3票，程式的累加方式
  $time[0][1]+=1;
  $time[0][1]+=2;
  $time[0][1]+=3;
  */
}
/*
現在時間的H=16 ,for迴圈的$i=4開始跑
現在時間的H=19 ,for迴圈的$i=5開始跑
*/
/*
$begin = floor(date(H) / 2) - 4; //是今天且 現在時間H為 10過後
$begin =0; // 其他考量
2019-8-17
2019-08-17
*/
if(strtotime($_POST['date']) == strtotime(date("Y-m-d")) && 10<=date("H")){
  $begin=floor(date(H)/2)-4;
}
else{
  $begin=0;
}

for ($i = $begin; $i < 7; $i++) {
  if($time[$i][1]!=20){ //還有票能賣的情況下做echo
    echo '<option value="'.($i+1).'">'.$time[$i][0].'剩餘座位'.(20-$time[$i][1]).'</option>';
  }
}
