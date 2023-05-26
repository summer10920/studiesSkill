<?php
// $aa=rand(1,100);

// phpinfo();


$aa=array("加菲貓","凱蒂貓","湯姆貓");
$aa=array('us'=>"加菲貓",'jp'=>"凱蒂貓",'us2'=>"湯姆貓");
$aa=array(array("a","b","c"),'jp'=>"凱蒂貓",'us2'=>"湯姆貓");
//print_r($aa);

//unset()可以殺掉某一個變數，或是殺掉陣列內某一個位置或整個陣列
$var1="hello world";
unset($var1);
// $var1=null;
// $var1="";
// var_dump($var1);
// var_dump($var2);
unset($aa[0][2]);
$aa[0][]="d";
// print_r($aa);
// print "<hr>";
unset($aa);
// print_r($aa);

$brown=date("Y-m-d H:i:s");

$timelong=strtotime("+6 hours");
$taiwan=date("Y/m/d H:i:s",$timelong);
echo "現在的PHP時間為<br>".$taiwan;

echo "<br>";

$week=array('週日','週一','週二','週三','週四','週五','週六');

date_default_timezone_set('Asia/Taipei');
echo $taiwan2=date("Y-m-d H:i:s")." | ".$week[date("w")];

print "<hr>";
//無條件進位,捨去,四捨五入
$num=10/3;
echo "10÷3=".$num."<br>";
echo "無進 ceil:".ceil($num)."<br>";
echo "無捨 floor:".floor($num)."<br>";
echo "四捨 round:".round($num)."<br>";

print "<hr>";
//substr，擷取某一段字，可指定從何開始與長度
$txt1="abcdefghijkl";
$txt2="不要打架要打去練舞室打";
echo substr($txt1,-5,3);
echo "<br>";
echo mb_substr($txt2,-5,3);

print "<hr>";
//str_replace() 可指定某段文字替換掉
//addslashes()可以找到指定字元增加跳脫字元"\"

//md5()
echo $txt1."<br>";
echo md5($txt1)."<br>";


echo $txt3=md5("abcd");

if($txt3=="e2fc714c4727ee9395f324cd2e7f331f") echo "密碼正確";
else echo "密碼錯誤";
print "<hr>";

$num=rand(65,90);
echo chr($num);
print "<hr>";


//unserialize() and unserialize()
$ab=array("cat","dog","mouse","horse");
$bb=array("cat"=>"加菲貓","dog"=>"史努比","mouse"=>"米奇","horse"=>"彩虹小馬");
// print_r($ab);
// var_dump($ab);
echo $zip=serialize($ab);
echo "<br>";
echo serialize($bb);
// var_dump($zip);
$ac=unserialize($zip);
// var_dump($ac);


print "<hr>";

function taobo(){
  echo "亲，您好！";
}
function say($who,$num){
  echo 'hello <span style="color:red">'.$who.'</span>!';
  if($num>60) return "You are great!!!";
}
taobo();
print "<hr>";

$name="Loki";
$score=84;
$re=say($name,$score);

if($re!=null) echo "你這次考試很棒捏，".$re."!";


/*CH04回家作業
Q1. 隨機產生1~100顆星星填滿遊覽器畫面，每個星星的顏色大小隨機不同
php=>rand,for
html=>div,style(font-size,color,)

Q2. 大樂透電腦選號01~49號取六個號碼不重複，隨機畫面上產生5~10組
array(),array_values(),sort(),rand(),foreach()
*/

print "<hr>";

$ee=array("Name"=>"Bill","Age"=>"60","Country"=>"USA");

$ff=array_values($ee);

print_r($ee);
print_r($ff);

?>

