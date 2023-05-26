<?php
for ($i=0; $i < 3; $i++) { //for迴圈的()裡面分別代表 (初始動作,每次條件,離開動作)
  echo $i;
  echo "<br>";
}
/* 離開動作等於執行碼，所以要注意變數有無回存
$i=1;
$i+=5; //$i=$i+5
$i+5; //這個$i沒有變化，放在for離開動作會導致無限循環
*/
print "<hr/>";
/*練習:使用for迴圈帶出以下效果，且有換行
1
4
7
10
*/
for($j=1;$j<11;$j+=3) echo $j."<br>";
print "<hr/>";

/*練習:
產生52顆★一行顯示，第一顆★的顏色為rgb(0,0,255)，最後一顆為rgb(255,0,0)。星星顏色慢慢變化
rgb(0,0,255)
rgb(5,0,250)
*/
for ($k=0;$k<256;$k+=5){
  echo "<span style='color:rgb(".$k.",0,".(255-$k).")'>★</span>";
}
/*
利用變數去控制RGB，理解變數每次的變化得到多5，剛好可以滿足RGB+5跟-5的效果。
*/
print "<hr/>";
for($m=1;$m<5;$m++){
  echo $m;
  for($n=1;$n<=3;$n++) echo "A";
  echo "<br>";
}
print "<hr/>";

/* 簡單的44乘法表
for($m=1;$m<10;$m++){     //左手抓的籌碼，思考何時變值
  for($n=1;$n<5;$n++){    //右手抓的籌碼，思考何時變值
    echo $m."x".$n."=".$m*$n;           //此時左手跟右手相乘
    echo "<br>";
  }
  echo "<hr>";
}
*/

// while(條件),先檢查是否要執行{}內的動作
//下列示範為模仿for的動作,額外給了起始跟結束前的動作行為($a++)
$a=0;
while ($a <= 10) {
  echo $a."<br>";
  $a++;
}

print "<hr>";
// do while(條件): 先do動作，然後檢查是否要回頭do動作
$b=5;
do {
  echo $b."<br>";
  $b--;
} while ($b!=0);

print "<hr>";

/*回家作業1
列印出對稱的堆★塔

　　　　　★
　　　　★★★
　　　★★★★★
　　★★★★★★★
　★★★★★★★★★
★★★★★★★★★★★
*/

/*
回家作業2
完成作業1的學員，試著使用rand()產生機率。10%(red),20%(yellow),30%(pink),40%(white)將這些星星換色。
然後整個背景色是黑色
*/
echo "<h5>做法1=用html.table去做，印出方向性為↑↓←→</h5>";
// PHP ZONE END
?>
<!--HTML ZONE START-->
<table border=1><tr>
<!--HTML ZONE END-->
<?php
// PHP ZONE START
for($i=1;$i<10;$i++){
  print "<td width='90' align='center'>";
  for($j=1;$j<10;$j++){
    echo $i."X".$j."=".$i*$j."<br>";
  }
  print "</td>";
}
?>
</tr></table>
<?php
echo "<h5>做法2=用span+br去做，印出方向性為←→↑↓</h5>";
for($i=1;$i<10;$i++){
  for($j=1;$j<10;$j++){
    echo "<span style='display:inline-block;width:100px'>".$j."X".$i."=".$i*$j."</span>";
  }
  echo "<br>";
}

echo "<h5>高手挑戰3=用span+br去做，文字色漸層變化(前面範例rgb藍→紅)</h5>";
$k=0;
for($i=1;$i<10;$i++){
  for($j=1;$j<10;$j++){
    echo "<span style='color:rgb(".$k.",0,".(255-$k).");display:inline-block;width:100px'>".$j."X".$i."=".$i*$j."</span>";
    $k+=3.16;
  }
  echo "<br>";
}
?>
