<?php
  $myint=rand(0,100);  //rand(min,max)  代表產生radom 為 min~max之隨機整數
  echo "隨機的0~100之整數為 => ".$myint;
  print "<br>";
  $myfloat=rand(0,100)/10; //將此值變成浮點數，舉例42變成4.2
  
  $myfloat=rand(0,10000)/1000; //將此值變成浮點數且小數點3位，舉例10.000
  echo "隨機的0~10的符點數為 => ".$myfloat;

  print "<hr>";

  /*if else 如果...否則...

  if(條件){要做的事情}
  else{否則要做的事情}

  ↓↓↓↓還有個叫多重條件↓↓↓↓↓

  if(條件A){去做A的動作}
  else if(條件B){去做B的動作}
  ...
  else{去做不滿足以上的動作}

  條件為布林值 true & false
  
  true:
  3=3,5>3,true,1

  false:
  true的相反都算false
  */

  $which="hihi"; //試著將值換成0,1,true,false,有數值,沒數值(0),null,"有字串","";

  var_dump($which); //var_dump可以對變數做檢查該變數型態為何

  if($which){
    echo "這世界是美好的";
  }
  else{
    echo "這世界挺黑暗的";
  }

  print "<hr>";

  $rand=rand(0,100);
  if($rand>90){
    echo "出現大於90的值";
    echo "，為".$rand;
  }
  else if($rand>70)
    echo "出現介於71~90的值，為".$rand;
  
  else if($rand>50){
    echo "出現介於51~70的值，為".$rand;
  }
  else{
    echo "小於51的值，為".$rand;
  }
  print "<hr>";

  /*
  回家作業，程式練習
  1. 利用rand跟if else完成抽卡機率
  2. 畫面能顯示出文字"你抽到了機率為○○%的××卡，○○為某數字,××為SSR,SR,R,N 共4種不同可能
  3. SSR,SR,R,N 的出線機率分別為4%,10%,35%,51%
  */
  // print "抽到了機率為4%的SSR卡";
  $rand=rand(1,100);
  if($rand<5) {
    $card="SSR";
    $ran=4;
  }
  elseif($rand<15){
    $card="SR";
    $ran=10;
  }
  elseif($rand<50){
    $card="R";
    $ran=35;
  }
  else{
    $card="N";
    $ran=51;
  }
  echo "抽到了機率為".$ran."%的".$card."卡";
  
  //  ★★★★●●●●●●●●●●㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣㊣...

  /*
  比較型的布林值(true/false)
  $a==$b  等於
  $a!=$b  不等於

  $a>$b   大於
  $a>=$b  大於等於

  $a<$b   小於
  $a<=$b  小於等於
  */
  print "<hr>";

  $txt1="hello";
  $txt2="hello";
  if($txt1!=$txt2) echo "我們不一樣";
  else echo "我們都一樣";

  print "<hr>";

  $txt="hello";
  if($txt=="hello") echo "我們都一樣";
  else echo "我們不一樣";

  print "<hr>";
  /*
  存在型的T/F
  透過特定的函式取得T/F，通常為以下三種
  isset() -> 判斷"變數對象"，是否有被指定
  empty() -> 判斷"變數對象"，是否為空值(是指有被指定但該值是空的，通常稱呼為空值)
  is_null() -> 判斷"變數對象"，是否不存在，也就是null
  */

  $num=123; //數字
  $txt="456"; //文字
  $untxt=""; //空字串
  $thenull=null; //為null

  $check=$untxt; //請將要檢查的變數放在這裡的右邊

  if(isset($check)) {
    echo "<p>這個變數在isset裡面是成立的，型態為 => ";
    var_dump($check);
    echo "</p>";
  }
  if(empty($check)) {
    echo "<p>這個變數在empty裡面是成立的，型態為 => ";
    var_dump($check);
    echo "</p>";
  }
  if(is_null($check)) {
    echo "這個變數在is_null裡面是成立的，型態為 => ";
    var_dump($check);
    echo "</p>";
  }

  /*
  相反型的T/F
  就是將真變成假，將假變成真，也就是將你目前所得到的任何布林做顛倒

  // $a=5  $b=10  $c=null
  !($a==$b)  // !(FALSE) => TRUE
  !($a<$b)  // !(TRUE) => FALSE
  !(empty($c)) // !(TRUE) => FALSE
  !(isset($c)) // !(FALSE) => TRUE
  */

  /*多條件型
  就是多個條件取得T/F，透過"AND"跟"OR"來滿足整個邏輯上的成立

  (條件A)&&(條件B)  //A成立且B成立，必須要A=T 且 B=T 這個結果才是T
  (條件A)||(條件B)  //只要A或B其中一個為T，這個結果就會T

  (條件A)&&(條件B)&&(條件C)  // A=B=C=T  
  (條件A)||(條件B)||(條件C)  // 只要某一個T，那就是T
  */
  print "<hr>";

  /*資料數據建立*/
  $height=190; //身高?cm
  $money=500000; //身上現金?新台幣
  $face=0;  //0=醜，1=帥，0跟1可以當成 TRUE/FALSE

  if(($height>=170)&&($money>=10000)&&$face){ //必須要高富帥都成立
    echo "<p>100分的高富帥歐巴</p>";
  }
  else{
    echo "<p>稱不上為男神</p>";
  }
  
  if(($height>=170)||($money>=10000)||$face){ //只要中一個都好
    echo "<p>70分的好對象</p>";
  }
  else{
    echo "<p>發動好人卡，我們適合當朋友！</p>";
  }

  if((($height>=170)&&$face)||($money>=10000)){ //只要高帥或有錢都可
    echo "<p>這個我可以</p>";
  }
  else{
    echo "<p>發動好人卡，我們適合當朋友！</p>";
  }

  print "<hr>";
  /*
  三元運算子，本身帶有return的效果
  條件?成立則回傳此執行碼:否定則回傳此執行碼
  */

  $game=rand(1,10);
  // if($game>5) $ans="大";
  // else $ans="小";

  // ($game>5)?$ans="大":$ans="小";
  $ans=($game>5)?"大":"小";

  echo "骰子為".$game."點，因此判定為".$ans;


?>