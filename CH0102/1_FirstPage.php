<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>這裡是H1標題</h1>
  <p>這一行是由HTML產生</p>
  <!--
    HTML註解
    HTML註解2
    HTML註解3
  -->
  <?php
    echo "<h3>hello world</h3>";  //這行是echo
  ?>
  <hr/>
  <p>--------------------------------</p>
  <?php
    /*
      這是Loki的第一次學PHP註解
      我很酷
    */
    echo "這行沒有HTMLA標籤這行沒有HTMLA標籤"."這行沒有HTMLA標籤"."這行沒有HTMLA標籤";
    // 文字串的合併可以透過這個.做串接
    echo "
      <p>這行是由PHP產生，包含P1標籤</p>
      <p>這行是由PHP產生，包含P2標籤</p>
      <p>這行是由PHP產生，包含P3標籤</p>
      <p>這行是由PHP產生，包含P4標籤</p>
    ";
  ?>
  <?="<p>AAAA</p><p>BBBB</p>"?>
<?php
  print("<hr/>");
?>
<?php
  //echo $bbb;  //這是很基本的顯示列印，列印$bbb這個變數。也可以顯示文字數字不一定要對變數
  //print $ccc; //跟echo是一樣的效果
  //print_r(); //這是針對陣列所做的顯示語法，語法長相為print_r($array);
  //var_dump(); //對某個變數做詳細資訊顯示，語法為var_dump($aaa);
?>
<h3>變數的文字串</h3>
<?php
/*
$name="Loki"."Jiang"; //等於LokiJiang
$aa=$name;  //等於LokiJiang
$bb=$aa."Cool"; //等於LokiJiangCool
*/
$what="冷笑話";
$title="<h3>我的".$what."</h3>";
print $title;
$who="小明";
$where="超商";
$why="為什麼";
$when="繳費";
$how="坐著輪椅";
print $who."去".$where.$when."後，".$who."出來卻要".$how."?";
?>
<hr/>
<h3>變數的數字計算與顯示</h3>
<?php
$a=7+5;
$a=7-5;
$a=7*5;
$a=7/5;
$a=13%5;
//(7+5)-2=10 =$b
// $b=7+5;
// $b=$b-2;
//echo $a;
$b=5;
echo $b;
print "<br>";
$b=$b+$a;
echo $b;
print "<br>";
$c=10;
$c=$c+5;
$c=$c-5;
$c=$c*5;
echo $c; 
print "<br>";

echo ($d=5)."<br>";//5
$d+=5; // 等於$d=$d+5;10
$d+=1;//11
$d-=7;//4
$d++;//5
++$d;//6

echo $d."<br>";
?>
<hr>
<h3>字串型變數的累加</h3>
<?php
$mystring="小明";
$mystring.="去超商繳費後";
$mystring.="，出來卻坐著輪椅";

echo $mystring;
?>
</body>
</html>