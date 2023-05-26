<style>
body{
  background-color: black;
  overflow: hidden;
}
div{
  position: absolute;
  line-height: 0;
  /* animation:rollstar infinite linear; */
  animation-name:rollstar;
  animation-iteration-count:infinite;
  animation-timing-function:linear;
}

@keyframes rollstar{
  from{
    transform: rotate(0deg);
  }
  to{
    transform: rotate(360deg);
  }
}
</style>
<?php
/*
Q1. 隨機產生1~100顆星星隨機填滿遊覽器畫面，每個星星的顏色大小隨機不同。php=>rand,for & html=>div,style(font-size,color)
隨機? 位置,尺寸,顏色
*/
$r_many=rand(1,100);
for($i=0;$i<$r_many;$i++){
  $r_x=rand(1,1000)/10; //post x use vw
  $r_y=rand(1,1000)/10; //post x use vh
  $r_clrR=rand(150,255);
  $r_clrG=rand(150,255);
  $r_clrB=rand(150,255);
  $r_size=rand(1,5);
  // $r_speed=rand(1,5);
  echo '
    <div style="
      font-size: '.$r_size.'em;
      left: '.$r_x.'vw;
      top: '.$r_y.'vh;
      color: rgba('.$r_clrR.', '.$r_clrG.', '.$r_clrB.');
      animation-duration:'.($r_size/2).'s;
      
    ">★</div>
  ';
}
?>
