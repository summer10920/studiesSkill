<?php
$rows=select("q1t7_total",1);
?>

<form method="post" action="api.php?do=totalmdy">
  <p class="t cent botli">進站總人數管理</p>
  <p class="cent">進站總人數 ： <input name="num[1]" type="text" value="<?=$rows[0]['num']?>"></p>
  <p class="cent"><input value="修改確定" type="submit"><input type="reset" value="重置"></p>
</form>