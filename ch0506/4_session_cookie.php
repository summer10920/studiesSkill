<?php
session_start(); //產生session空間 && 產生$_COOKIE['PHPSESSID']放入用戶端電腦內
$_SESSION['name']="Loki_Jiang";
$_SESSION['height']="190";
// unset($_SESSION['name']);
// session_unset();
// session_destroy();
// print_r($_SESSION);

print("<hr/>");
/////////////////////////////////////////

echo time();//時間戳記 timestamp
// setcookie("mypossword","1234",time()+600); //cookie壽命以timestamp為值，單位為秒
// setcookie("mypossword","5566"); //COOKIE一直活著，直到瀏覽器關閉
setcookie("mypossword","5566",time()+3600*24); //COOKIE活1天





/*
SESSION跟COOKIE都是屬於紀錄用的，舉例來說會員登入登出?

1. 我希望會員登入之後，不要讓他再登入一次
2. 我希望特定的網頁只有特定的身分可以登入
3. 登入登出的功能

總結：可以控制那些畫面有權限允許請求





*/
?>