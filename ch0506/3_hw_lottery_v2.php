<style>
  div {
    width: 2em;
    display: inline-block;
    text-align: center;
    background-color: yellow;
    border-radius: 50%;
    height: 2em;
    line-height: 2em;
    margin: 10px;
    font-size: 2em;
  }

  hr {
    width: 500px;
    margin: 0;
    background-color: #ccc;
    height: 5px;
  }
</style>
<?php
$data = range(1, 49);
for ($run = 0; $run < rand(5, 10); $run++) { //產生5~10組的抽球過程
  $playBox = $data;
  $max=48;
  $getBall=array();//初始化為空陣列，也就是getBall一開始沒有塞入任何值(球)

  for ($i = 0; $i < 6; $i++) { //開始抽球共6顆
    $tmp = rand(0, $max); //$tmp是索引0~48,每跑完一次抽球會少一格
    $getBall[]=$playBox[$tmp]; //$getBall放入No.28 Ball
    unset($playBox[$tmp]); //殺掉之後，在第27號索引是沒有value
    $playBox=array_values($playBox); //過篩無效的value(null)
    $max--;//下一次的抽球箱會剩下$max
    // echo "A";
  }
  sort($getBall);
  foreach($getBall as $ball) {
    $show=($ball<10)?"0".$ball:$ball; //補零
    echo "<div>".$show."</div>";
  }
  print "<hr>";
}
?>