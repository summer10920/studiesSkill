<?php
date_default_timezone_set('Asia/Taipei');
function taobo(){
  echo "亲，您好！";
}
function say($who,$num){
  echo 'hello <span style="color:red">'.$who.'</span>!';
  if($num>60) return "You are great!!!";
}
?>