<?php
$db=new PDO("mysql:host=127.0.0.1;dbname=php_study;charset=utf8","root","");
$sql= "SELECT * FROM jq11_member WHERE acc='".$_POST['acc']."'";
$rows=$db->query($sql)->fetchAll();

// print_r($rows);
if($rows!=null){
  echo "檢測帳號重複";
}
else{
  echo "可使用此帳號";
}
?>
