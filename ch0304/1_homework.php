<?php
//1. 透過span+br產生99乘法表
for($m=1;$m<10;$m++){
  for($n=1;$n<10;$n++){
    echo "<span style='width:70px;display:inline-block'>".$n."X".$m."=".$m*$n."</span>";
  }
  echo "<br>";
}
print "<hr>";
// 2. 透過table產生99乘法表
?>
<table border=1>
  <tr>
<?php
  for($m=1;$m<10;$m++){
    echo "<td>";
    for($n=1;$n<10;$n++){
      echo $m."X".$n."=".$m*$n."<br>";

    }
    echo "</td>";
  }
  ?>
  </tr>
</table>

<?php
print "<hr>";
// 3. span+br+顏色漸變
$clr=0;
for($m=1;$m<10;$m++){
  for($n=1;$n<10;$n++){
    echo "<span style='width:70px;display:inline-block;color:rgb(".$clr.",0,".(255-$clr).")'>".$n."X".$m."=".$m*$n."</span>";
    $clr+=3;
  }
  echo "<br>";
}
print "<hr>";
?>