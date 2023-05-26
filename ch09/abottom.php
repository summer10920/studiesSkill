<?php
$rows=select("q1t8_footer",1);
?>

<form method="post" action="api.php?do=bottommdy">
  <p class="t cent botli">頁尾版權資料管理</p>
  <p class="cent">頁尾版權資料 ： <input name="num[1]" type="text" value="<?=$rows[0]['num']?>"></p>
  <p class="cent"><input value="修改確定" type="submit"><input type="reset" value="重置"></p>
</form>