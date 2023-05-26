<?php
// $a=5;
$aa[5]=1;
$aa[]=2;
$aa[]=3;
$aa[]=4;
$aa[]=9;
$aa[7]="lucky 7";
// $aa[]=15;
// print $a; //對變數印出
print_r($aa);   //對陣列印出
//echo $aa[8];

print "<hr>";

$ab[5]="黃色"; //此時索引為0
$ab['cat']="加菲貓";
$ab['dog']="史努比";
$ab[]="白色"; //此時索引為1
print_r($ab);

echo "<span style='color:red'>".$ab['cat']."</span>"."<br>";
echo $ab[6]."的".$ab['dog']."<br>";

$animal="cat";
echo $ab[5]."的".$ab[$animal]."<br>"; // 同等 echo $ab[5]."的".$ab['cat']."<br>";

print "<hr>";

$ac['cat']['黃色']="加菲貓";
$ac['cat']['白色']="凱蒂貓";
$ac['dog']['白色']="史努比";
$ac['mouse']['黃色']="傑利";
$ac['mouse']['花色']="奇奇";
$ac['dog']['米色']="OPEN醬";
print_r($ac);
echo "<h4>".$ac['mouse']['tw']."</h4>";

print "<hr/>";

//foreach = 把陣列一節節拆開成$key與$value，帶到{}內讓你自由使用
foreach ($ab as $key => $value) {
  echo $key." MIX ".$value."<br>";

}
print "<hr/>";

foreach($aa as $data){
  echo $data."...";
}

print "<hr/>";

/*
$ac['cat']['黃色']="加菲貓";
$ac['cat']['白色']="凱蒂貓";
$ac['dog']['白色']="史努比";
$ac['mouse']['黃色']="傑利";
$ac['mouse']['花色']="奇奇";
$ac['dog']['米色']="OPEN醬";
*/

foreach ($ac as $key => $ary) {//跑三次，第一次帶[cat]裡面的整組陣列
  foreach($ary as $clr=>$name){
    echo $key.":".$clr."的".$name."<br>";
  }
  // print_r($ary);
  // echo "<hr>";
}


?>