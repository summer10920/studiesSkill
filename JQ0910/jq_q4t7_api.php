<?php
$db=new PDO("mysql:host=127.0.0.1;dbname=php_10804;charset=utf8","root","");
$rows=$db->query("SELECT * FROM jq9_member WHERE acc='".$_POST['acc']."'")->fetchAll();

if($rows!=null) echo "檢測到帳號重覆";
else echo "可使用此帳號";
?>