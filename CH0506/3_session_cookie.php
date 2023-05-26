<?php
/* 可以被網頁共用的變數
$_SESSION[]
$_COOKIE[]
*/
/*
session_start();
$_SESSION['name']="admin";
$_SESSION['pwd']="1234";
$_SESSION['phone']="0988-588-088";
// unset($_SESSION['pwd']);
// session_unset();
// if(empty($_SESSION['buy'])) echo "購物車是空的";
print_r($_SESSION);

// $_SESSION['buy']="庫子";

// session_destroy(); //會殺掉檔案
// session_unset(); //會殺掉變數
// session_destroy(); //會殺掉檔案
*/

//setcookie(名稱,值,生命週期(UNIX),指定有效的網域,資料加密)
print_r($_COOKIE['name']);

setcookie("name","admin",time()+100);
// unset($_COOKIE['name']); 沒有意義的寫法






?>