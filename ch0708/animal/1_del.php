<?php
if(!empty($_POST)){ //POST有東西才做{}，同等於表單提交之後的處理{}
  echo $sql="DELETE FROM ch8_animal WHERE id=".$_POST['id'];
  //DELETE FROM ch8_animal WHERE id=5
  $db->query($sql);
  header("location:?page=v1_show");
}
?>

<div style="width:50vw; margin:20px auto; background:#eee; text-align:center; padding:10px;">
  <h1>刪除動物資料 ver1</h1>
  <form method="post">
    <h3>指定編號</h3>
    <p><input type="number" name="id" style="width:50%"></p>
    <p>
      <input type="submit" value="刪除">
      <input type="reset" value="重置">
    </p>
  </form>
</div>