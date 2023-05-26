<?php
if(!empty($_GET['sn'])){
  if($_GET['sn']=="A") include_once("3_movie1.php");
  if($_GET['sn']=="B") include_once("3_movie2.php");
  include_once("3_layout.php");
}
else{
  echo '
    <a href="?sn=A">復仇者聯盟 - 電影介紹</a>
    <br>
    <a href="?sn=B">復仇者聯盟 - 電影介紹</a>
  ';
}
?>