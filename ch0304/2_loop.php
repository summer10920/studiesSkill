<?php
/*while迴圈

for(初執行;條件;尾執行){
  for(初執行;條件;尾執行){
  執行指令
}
}

while(條件){
  執行指令
}
*/
$i = 1;
while ($i < 10) {
  echo $i;
  $i++;
}
//以上while等於 for($i=1;$i<10;$i++) echo $i;
print "<hr>";
$i = 1;
while ($i < 10) {
  $j = 1;
  while ($j < 10) { //3,1
    echo "i=" . $i . ",j=" . $j . "<br>";
    $j++;
  }
  $i++;
}
print "<hr>";
/*
do{
  執行指令;
}while(條件)
*/
$c = 10;
do {
  echo $c . ",";
  $c--;
} while ($c != 0);
print "<hr>";

$c = 10;
echo $c . ",";
$c--;
while ($c != 0) { //9次
  echo $c . ",";
  $c--;
}
print "<hr>";
///////////////////////////
echo "請輸入正確密碼";
$c = "1234";
while ($c != "1234") { //10次
  echo "請輸入正確密碼";
}
print "<hr>";
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



<h5>練習印出金字塔★</h5>
<p>利用雙迴圈印出，水平致中(text-align:center)</p>
<div style="width:200px;text-align:center">
  <?php
  for ($i = 2; $i < 13; $i += 2) {
    for ($j = 1; $j < $i; $j++) { //$i=2,4,6,8,10,12
      echo "★";
    }
    echo "<br>";
  }
  ?>
</div>
<h5>進階練習：</h5>
<p>完成上面練習的，改良一下星星的顏色機率rand()，分別10%(red),20%(yellow),30%(pink),40%(while),整個背景黑色</p>
<div style="width:200px;text-align:center;background-color:black;color:white">
  <?php
  for ($i = 2; $i < 13; $i += 2) {
    for ($j = 1; $j < $i; $j++) { //$i=2,4,6,8,10,12

      $num = rand(1, 10); //每次印一顆星星出來之前就要重新決定隨機色
      if ($num < 2) $clr = "red"; //10%=>1
      elseif ($num < 4) $clr = "yellow"; //20%=>2,3
      elseif ($num < 7) $clr = "pink"; //30%=>4,5,6
      else $clr = "white"; //40%=>7,8,9,10

      echo "<span style='color:" . $clr . "'>★</span>";
    }
    echo "<br>";
  }
  ?>