<?php
//session_start();
// print_r($_SESSION);
// session_destroy(); //會殺掉檔案

print_r($_COOKIE);


/*
超全域變數的'全域之意義'
function abc(){
  $a=123;
  $_SESSION['test1']=456;
  $_GET['test2']=789;
}
echo 123; //不行
echo $_SESSION['test1']; //可以
echo $_GET['test2']; //可以
?>