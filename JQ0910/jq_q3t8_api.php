<?php
$db=new PDO("mysql:host=127.0.0.1;dbname=php_10804;charset=utf8","root","");
date_default_timezone_set("Asia/Taipei");

$sql="SELECT * FROM jq9_sell WHERE movie=".$_POST['movie']." AND date='".$_POST['date']."'";
$rows=$db->query($sql)->fetchAll();


$time=array(
  array("10:00~12:00",0),  //$time[0][0] => "10:00~12:00"
  array("12:00~14:00",0),
  array("14:00~16:00",0),
  array("16:00~18:00",0),  //$time[3][0] => "16:00~18:00"
  array("18:00~20:00",0),
  array("20:00~22:00",0),
  array("22:00~24:00",0)
);
foreach ($rows as $row) {   //假設 $row['time']=3,$row['many']=5
  $time[$row['time']][1]+=$row['many'];   //$time[3][1]+=5;
}

// $_POST['date'] 是不是 等於 date("Y-m-d")
// 2019-02-07's strtotime = 2019-2-7's strtotime
if(strtotime($_POST['date'])==strtotime(date("Y-m-d"))&&10<=date("H")){ //今天且日期且有發生過期現象
  $begin=floor(date("H")/2)-4;
  /*
  date("H")=10.多 => $b=1
  date("H")=11.多 => $b=1
  date("H")=12.多 => $b=2
  date("H")=13.多 => $b=2
  date("H")=14.多 => $b=3
  */
}
else{
  $begin=0;
}
for($i=$begin;$i<7;$i++)
  if($time[$i][1]!=20) echo "<option value=".$i.">".$time[$i][0]." 剩餘座位".(20-$time[$i][1])."</option>";
?>