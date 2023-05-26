<?php
/*
SWITCH CASE
跟多重IF ELSE很像，一樣會由上到下去判斷條件，但僅用於==(等於條件)

$variable="val1";

switch ($variable) {
  case 'val1':  //如果你的$variables內容為value1的文字串，會進入這一區
    # code1...
    # code1...
    # code1...
    # code1...
    break;
  case "val2":  //如果你的$variables內容為value2的文字串，會進入這一區
    # code2...
    # code2...
    # code2...
    # code2...
    break;
  default:    // 類似else，當全部case不成立，那麼最後會跑到default這一區
    # codedefault...
    # codedefault...
    # codedefault...
    # codedefault...
    break;
}
*/
$lang="kr";
switch ($lang) {
  case 'jp':
    echo "愛洗爹嚕唷!";
  break;
  case 'kr':
    echo "沙拉黑唷!";
  break;
  case 'tw':
    echo "我好喜歡你唷，小姐姐！";
  break;
  default:
    echo "OS:尷尬...怎辦語言不會...算了比愛心";
  break;
}
print "<hr/>";
/*練習，請上面的switch case版本 變成 if else的版本*/

$mylang=rand(1,4);
if($mylang==1) echo "愛してる";
elseif($mylang==2) echo "사랑해";
elseif($mylang==3) echo "我喜歡你"; //如果不小心少打一個=，那麼$mylang=3這句話就變指定命令，此時數字會變3，然後if(3)
else echo "啾咪";

?>