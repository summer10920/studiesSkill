<?php
$overmydeadbody = rand(1, 49);
echo "隨機1~49的整數=>" . $overmydeadbody;
/*
函式(數)依各功能而定且每次要指定相關的變數。交由函式進行額外處理。並return結果給設計者(主程式)，因此每次使用時，提供了什麼而回傳(return)了，再由設計者(主程式)接續處理。
*/
echo "<br>";
$myfloat = rand(0, 100) / 10;
echo "隨機1~10的浮點數，小數點1進位=>" . $myfloat;
print "<hr>";

/*
  if (條件) { //條件成立時，也就是描述條件為真實的(true)，會進入該{}的領域
    # 執行A code...
  }
  else {  //條件不成立時，也就是描述條件為虛假的(false)，會進入該{}的領域
    # 執行 B code...
  }
*/
/*
  if (條件A) { //A條件成立時，也就是描述條件為真實的(true)，會進入該{}的領域
    # 執行A code...
  }
  elseif(條件B){//當A條件不成成立時，進而描述B條件，而B條件成立時(也就是描述該條件為真實的(true))，會進入該{}的領域
    # 執行B code...
  }
  else {  //B條件不成立時，也就是描述條件為虛假的(false)，會進入該{}的領域
    # 執行C Bcode...
  }
*/
// $wish=true;//true or false is logic
$a = 2;
$b = 2;
$ans = ($a == $b); //A等於B嗎?結果為True還是False

if ($ans) { //a等於b?這句話的結果是錯的(false)
  echo "這世界真美好";
} else {
  echo "這世界太黑暗";
}
print "<hr>";
/*
  $a==$b;//$a等於$b嗎? 結果為何? (T/F)
  $a!=$b;//$a不等於$b嗎? 結果為何? (T/F)
  $a>$b;//$a大於$b嗎? 結果為何? (T/F)
  $a>=$b;//$a大於等於$b嗎? 結果為何? (T/F)
  $a<$b;//$a小於$b嗎? 結果為何? (T/F)
  $a<=$b;//$a小於等於$b嗎? 結果為何? (T/F)
*/

$myage = rand(1, 50);
echo "你的年齡為：" . $myage . "<br>";
/*
if($myage>=18){
  echo "你可以看限制級以下的電影";
}
else if($myage>=15){
  echo "你可以看輔導級以下的電影";
}
else if($myage>=12){
  echo "你可以看保護級以下的電影";
}
else{
  echo "你只能看普遍級的電影";
}
*/
if ($myage <= 6) echo "你只能看普遍級的電影"; //T
else if ($myage <= 12) echo "你可以看保護級以下的電影"; //T
else if ($myage <= 17) echo "你可以看輔導級以下的電影"; //T
else echo "你可以看所有等級的電影"; //T
// 當不用else時只用if做各判別，那麼你要考量在其他的獨立事件內被觸發不想要的結果。

print "<hr>";

echo "<h3>小練習</h3>";
/*
參考前例，使用rand()跟if else完成抽卡機率，顯示輸出文字"你抽到了SSR卡"、“你抽到了SR卡”、“你抽到了R卡”、“你抽到了N卡”，出現機率分別為4%,10%,35%,51%
*/
$rand = rand(1, 100);
if ($rand < 5) $card = "SSR";
elseif ($rand < 15) $card = "SR";
elseif ($rand < 50) $card = "R";
else $card = "N";
echo "你抽到了" . $card . "卡";

print "<hr>";

$a = 123; //數字,文字,邏輯
$b = "";
$c = null;

if (isset($a)) echo "<p>當\$a被指定了內容(isset)=>isset成立</p>";
if (empty($b)) echo "<p>當\$b是空字串(empty)=>empty成立</p>";
if (is_null($c)) echo "<p>當\$c為虛無=>is_null成立</p>";

print "<hr>";

!($a == $b); // $a!=$b
// $result=(!($a==$b));// $a!=$b
!($a != $b); // $a==$b
!($a > $b); // $a<=$b;
!($a >= $b);
!($a < $b);
!($a <= $b);
!empty($a);
!isset($a);

/*
if(條件A && 條件B && 條件C) { // &&=> and, 也就是且的意思
  執行處理
}
if(條件A || 條件B || 條件C) { // ||=> or, 也就是或的意思
  執行處理
}
if((高 && 帥) || 錢) { #code}

高，帥，富
(T and T) or T
(T and T) or F
(F and F) or T
(T and F) or T
(F and T) or T
*/

$height = 190;
$money = 1500;
$face = false;

if ($height >= 177 && $money > 1000 && $face) {
  //TTT
  echo "<p>100分的結果</p>";
} elseif (
  (($height >= 177) && ($money > 1000) && (!$face)) || (($height >= 177) && !($money > 1000) && ($face)) || (!($height >= 177) && ($money > 1000) && ($face))
) {
  //TTF||TFT||FTT
  echo "<p>85分</p>";
}

if ($height >= 177 || $money > 1000 || $face) {
  echo "<p>60~100分的可能</p>";
}

print "<hr>";

//此時使用者資料為高富醜
$height = 190;
$money = 1500;
$face = 0; // 0=false , 1=true;
/*
  if(0)=>false
  if(1)=>true;
  if("tw")=>ture;
*/
$flag = 0;
if ($height > 177) $flag += 1;
if ($money > 1000) $flag += 1;
if ($face) $flag += 1;
//if(條件=>真假?) {#code} 如果(條件)=>是真的，那麼執行#code

if ($flag == 3) echo "<p>100分男人</p>";
elseif ($flag == 2) echo "<p>85分男人</p>";
elseif ($flag == 1) echo "<p>70分男人</p>";
else  echo "<p>你是一個好人</p>";

//

print "<hr>";
/*
//三元運算子
$ans=(條件)?TRUE:FALSE;
$ans=(條件=>真假?)?"你是帥哥":"你不是";

if(){
  #codeA
}
else{
  #codeB
}
*/

print "<h3>骰子遊戲</h3>";
$game = rand(1, 6);

// $ans=($game>3)?"大":"小";
// echo "骰子點數為".$game."，判定結果為".$ans;

// echo "骰子點數為".$game."，判定結果為".(($game>3)?"大":"小");

// ($game>3)?print "骰子點數為".$game."，判定結果為大":print("骰子點數為".$game."，判定結果為小");

print "<hr>";

$myname=3;//數字

switch ($myname) {    //switch case 的條件 只有等於概念才會觸發
  case 1:
    echo "hello My Teacher, it's nice day";
    break;
  case 2:
    echo "Hey Bro. What's up?";
    break;
  case 3:
    echo "...";
    break;
  default:
    echo "Hey!...";
    break;
}

print "<hr/>";

print("<h3>愛的翻譯機</h3>");
$lang="en";
switch ($lang) {
  case 'tw':
    $ans="我好喜歡妳啊";
    break;
  case 'jp':
    $ans="愛洗爹魯唷";
    break;
  case 'kr':
    $ans="沙拉黑優";
    break;
  case 'en':
    $ans="愛老虎油!";
    break;
  default:
    $ans="痾恩...ㄟ....恩";
    break;
}
echo $ans;

print("<hr>");

$default="嗯嗯嗯嗯，嗯嗯";
if($lang=="tw") $default="我好喜歡你，小姊姊";
elseif($lang=="jp") $default="愛你爹嚕，歐捏醬";
elseif($lang=="kr") $default="沙拉黑唷，嚕那嚕那";
elseif($lang=="en") $default="愛老虎油，北鼻";
echo $default;


?>