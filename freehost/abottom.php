<?php
$rows=select("t8_footer",1);
?>
<form method="post" action="api.php?do=footermdy">
  <p class="t botli">頁尾版權資料管理</p>
  <p class="cent">頁尾版權資料 ： <input name="text[1]" type="text" value="<?=$rows[0]['text']?>"></p>
  <p class="cent"><input value="送出" type="submit"><input type="reset" value="清除"></p>
</form>