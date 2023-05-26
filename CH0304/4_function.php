<?php
/* 取得PHP環境詳細資料
phpinfo();
*/

// 隨機函數
echo rand(1,100);
print "<hr>";

// 陣列函數
$ary1=array("cat"=>"加菲貓",7=>"凱蒂貓","湯姆貓");
print_r($ary1);
/*
陣列相關的延伸函數很多，不逐一介紹。未來會用某函數才特別解釋
http://www.w3school.com.cn/php/php_ref_array.asp
*/
print "<hr>";

$abc="ABC";
$efg=$abc;
echo $abc;

//殺掉變數,也可以殺掉陣列裡面的某一格
unset($abc);
echo $efg;

unset($ary1[7]);
print_r($ary1);

print "<hr>";
/*
date(format,time) 時間函數
format 請參考 https://www.php.net/manual/en/function.date.php
time 非必填，可修正時間(但需以UNIX時間為值)
*/
echo $now=date("Y/m/d H:i:s");
print "<br>";
$timefix=strtotime("+1 week +6 hours");
echo $now=date("Y/m/d H:i:s",$timefix);
print "<br>";
$timefix=strtotime("+6 hours");
echo $now=date("Y/m/d H:i:s",$timefix);
print "<hr>";

date_default_timezone_set('Asia/Taipei');
echo $now=date("Y/m/d H:i:s");
print "<hr>";

//ceil,floor,round
echo "10/3=??<br>";
$myceil=ceil(10/3);
echo "ceil:".$myceil."<br>"; //無條件進位
echo "floor:".floor(11/3)."<br>"; //無條件捨去
echo "round:".round(10/3)."<br>"; //四捨五入
print "<hr>";

// substr( $string , $start , $length ) 擷取字串,mb_substr in 非英語系語言
$str="abcdefgh";
echo substr($str,2,3);
print("<br>");
echo mb_substr("不要打架要打去練舞室打",4,6);
print "<hr>";

//str_replace() //能抽換指定的字串為其他字串
//addslashes() // 能自動將特別字串符號增加\為前綴

//md5()加密訊息，只能單向無法反推原資料為何
$password="123456789";
echo md5($password);
print("<br>");

$checkpwd="123456789";
echo md5($checkpwd);
print("<br>");

if(md5($checkpwd)==md5($password)) echo "密碼正確";
print "<hr>";

//chr() 可以ASCII碼的查詢  0-9=>48~57,A-Z=>65~90,a-z=>97~122

for($i=1;$i<9;$i++){
  //code 抓一個ASCII字元出來
  $word=rand(1,62);
  if($word<11) echo chr($word+47);   // word:1~10(編號) => chr(48~57) (數字母 轉 ASCII)
  elseif($word<37) echo chr($word+54); //word:11~36 =>chr(65~90)
  elseif($word<63) echo chr($word+60); //word:37~62 =>chr(97~122)
}

print "<hr>";
/*
自我練習:
隨機密碼的改良版，產生5組密碼，每次密碼的長度8~12。密碼由大小寫英文與數字組成
*/
$num=5;
while($num!=0){ //產生5組
  $max=rand(8,12);
  for($i=1;$i<=$max;$i++){
    $word=rand(0,61);
    if($word<10) echo $word; //word=0~9, 輸出0~9
    elseif($word<36) echo chr($word+55);   //word=10~35,輸出A~Z => chr(65~90)  word=35:chr(90)
    else echo chr($word+61); //word=36~61,輸出a~z => chr(97~122)  word=36:chr(97)
  }
  echo "<br>";
  $num--;
}
print "<hr>";


for($num=5;$num!=0;$num--){ //產生5組
  $max=rand(8,12);
  for($i=1;$i<=$max;$i++){
    $word=rand(0,61);
    if($word<10) echo $word; //word=0~9, 輸出0~9
    elseif($word<36) echo chr($word+55);   //word=10~35,輸出A~Z => chr(65~90)  word=35:chr(90)
    else echo chr($word+61); //word=36~61,輸出a~z => chr(97~122)  word=36:chr(97)
  }
  echo "<br>";
}
print "<hr>";

//自訂函式function
function sayhello($who,$num){ //先宣告函式的SOP是什麼
  echo "Hello ".$who. ", Your age is ".$num; // 執行A
  if(($num-18)>=0) $beto="成年人";
  else $beto="未成年";
  return $beto; //回傳C
}

  $name="Bill";
  $age=25;
  $result=sayhello($name,$age);  // 執行sayhello這個函式，同時函式返回給我東西用變數$result接住。結果來說$result會得到"成年人"三個字
  echo "，你是".$result;  //畫面產生B跟C
  print "<hr>";

  /*
  自我練習:設計一個pwd($many)
  $many=要多少個密碼組，由pwd()產生多組密碼且密碼長度8~12，並用陣列回傳給你。
  你得到這個回傳後用foreach進行echo出來。

  $str="";
  $str=$str."A";  //$str="A"
  $str=$str."g";  //$str="Ag"
  $str=$str."c";  //$str="Agc"

  */
  function pwd($many){
    if($many==0) echo "主人你在耍我嗎?0組密碼要怎麼玩";
    else{
      for($i=1;$i<=$many;$i++){ //跑$many次
        $max=rand(8,12);
        $pwdstr="";
        for($j=1;$j<=$max;$j++){ //跑$max次的符號單字(大小寫英文數字)一個
          $word=rand(0,61);
          if($word<10) $pwdstr=$pwdstr.$word;
          elseif($word<36) $pwdstr=$pwdstr.(chr($word+55));   //word=10~35,輸出A~Z => chr(65~90)  word=35:chr(90)
          else $pwdstr=$pwdstr.(chr($word+61)); //word=36~61,輸出a~z => chr(97~122)  word=36:chr(97)
        }//此時的$pwdstr="fwko2ha";
        $ary[]=$pwdstr; 
      }//ary[0]="asdhueffsdf"; ary[1]="fwko2ha";
      return $ary;
    }
  }

  $ans=pwd(20);  //$ans會得到一個陣列,陣列裡面塞好了我要的?組密碼，每組密碼長度8~12可能
  foreach ($ans as $key => $value) {
    echo "第".($key+1)."組密碼: ".$value." <br>";
  }

/*
回家作業1:發揮CSS與for迴圈的效果
產生隨機1~100顆星星填滿你的遊覽器畫面，每個星星的顏色大小位置都隨機。
提示:php:rand+for,html:div+style(postion,top,left,color,font-size,line-hight)

給高手挑戰:練習rand+array的函式
大樂透電腦選號1~49(每次產生6組號碼不重複)，每次產生5~10組樂透號碼組。
提示:用到函式array(),rand(),for(),sort(),array_values(),foreach()

下周目標:
html.form表單 + php資料處理
sesssion vs cookie
html.form表單 file上傳與處理

下下周:
MySQL CRUD
php+mysql (PDO資料庫串接，帶幾個例子)

下下下周
乙級第一題的練習


*/
?>