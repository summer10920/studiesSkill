<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>我的第一堂PHP課程</title>
</head>

<body>
  <!-- HTML註解方式 -->
  <h3>HTML與PHP的關係</h3>
  <p>這是由HTML產生的文字</p>

  <?php
  /*
  PHP的註解方式要多行時
  會像這樣包起來
  echo 是屬於輸出的PHP語法
  */

  echo "<p>這段是由PHP所產生的，含有p標籤</p>";  //echo為輸出
  print("這段沒有'p'標籤");  //函式會長成這樣 xxx(yy)  將yy遞交給xxx函式執行處理
  print '<p>這段是由"PHP"所產生的，含有p標籤</p>'; //print也可以像echo這樣不用括弧()
  //print_r() 這是給陣列所用，之後會學到這裡不教
  //var_dump() 這是對某變數進行檢查所用，有興趣自己摸索
  ?>

  <!--
  在HTML範圍內，快速的使用PHP執行某簡單代碼並顯示出來
  因此，不需要加echo之類的指令
-->
  <?= "這是由另一種PHP方式做直接輸出，所以不用寫echo" ?>

  <hr />

  <h3>變數的文字串</h3>
  <?php
  $sayHello = "<b>hello world</b>"; //駝峰式命名法
  $myName = "<h3>loki</h3>";  //變數儲存文字串時，前後也要記得加雙引號
  print $sayHello;
  echo $myName;
  // print "<hr/>";
  $what="冷笑話";
  $title = $sayHello . $myName . $what;  //文字串聯變數時，會用.來串接
  
  // $title="<b>".$what."</b>";  //如果相同的變數名稱，順序上會被覆蓋掉
  // echo $title;

  echo "<b>".$what."</b>"; //這行等於50+51行，直接印了不用$title來轉達

  print "<br>";
  // echo "這是一個".$what."!!!";

  $who="小明";
  $where="超商";
  $why="為什麼";
  $when="繳費";
  $how="坐著輪椅";

  //請湊出這句話 "為什麼小明去超商繳費後小明出來卻要坐著輪椅"
  print $why.$who."去".$where.$when."後"."$who"."出來卻要".$how;

  print "
    <hr>
    <h3>變數的數學式</h3>
  ";

  $a=7+5; //12
  $a=7-5; //2
  $a=7*5; //35
  $a=7/5; //1.4
  $a=7%5; //餘數2
  echo "<p>".$a."</p>";

  $b=5;  //此時a=2,b=5

  $b=$b+$a; //此時a=2,b=7 也就是解讀成 $b=7; 的程式碼
  echo "a=".$a.",b=".$b; 

  print "<br>";

  /*變數的自我加減乘除*/

  $c=10;  //c=10
  $c=$c+5;  //c=15
  $c=$c-5;  //c=10
  $c=$c*5;  //c=50
  $c=$c/5;  //c=10
  echo "c=".$c;

  print "<br>";

  $d=5;
  // $e=$d+5;
  // echo $e;
  echo $d+5;  //做算式處理並輸出，此時的$d沒有變化(被指定新值)
  echo ",";

  echo $d+=5;  //速寫法，可解讀成 $d=$d+5。也就是算出5+5→指定給$d,此時的變成10
  echo ",";

  echo $d+=1; //11  另有$d-=1,$d*=5,$d/=2;
  echo ",";

  echo $d++; //可以解讀成$d+=1,但是這個結果會在程式碼結束後有效，也就是「;前是11」「;後」是12，常用

  echo ",";

  echo $d;  //12
  echo ",";

  echo ++$d; //13
  echo ",";

  echo $d;
  ?>


</body>

</html>