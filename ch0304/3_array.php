<?php
$a=123;
$b="你好嗎";
$a=7788;
// echo $a;

//value 值 key 索引
$aa[3]=100;
$aa[2]=50;
$aa[1]=10; 
$aa[4]=500;
$aa[]=1000;
$aa[0]=5;
$aa[5]=2000;

echo $aa[2];
print_r($aa); //檢查用

print "<hr>";

$ab[]="黑色"; // 如果你沒指定索引(key)，程式會幫你瞎掰一個，以數字來命名。數字會從最小開始掰
$ab['cat']="加菲貓";
$ab["dog"]="史奴比";
$ab[0]="白色";
$ab[5]="黃色";
$ab[]="花色";
print_r($ab);
// echo $ab['cat']."<br>";
// echo $ab[1];
// $key='cat';
// echo $ab[$key];
print "<hr>";
$ac[0][]="Over";
$ac[0][]="My";
$ac[0][]="Dead";
$ac[0][]="Body";
$ac[2][]="高";
$ac[2][]="雄";
$ac[2][]="發";
$ac[2][]="大";
$ac[2][]="財";
$ac[][]="就";
$ac[][]="可";
$ac[][]="已";
$ac[][]="死";
print_r($ac);
echo $ac[0][2];

print "<hr>";
/*
foreach(){
  #code
}
用在於將陣列循序的讀取出來，可以讀出key跟value
迴圈概念執行，根據你陣列有多長就跑幾次，每次拿一節出來可以分析出key,val，你可以用變數來承接這兩個對象
*/
foreach ($ab as $key => $value) {
  echo "我的陣列裡面當key為".$key."時，可以呼叫出這個單字=>".$value."<br>";
}
print "<hr>";
foreach ($aa as $overmydeadbody) { //如果你沒有需要使用key，其實是可以省略不寫
  echo "我的陣列裡面可以找到這個單字=>".$overmydeadbody."<br>";
}
print "<hr>";
// print_r($ac);
foreach($ac as $one_key=>$one_val){
  echo "<p>陣列\$ac[".$one_key."]裡面寫了些東西，可以拼湊出：</p>"; 
  //反斜線可以使某符號變成跳脫字元
  // echo $one_val;
  foreach($one_val as $two_val){
    echo "<span style='color:red'>".$two_val."</span> ";
  }
}
?>