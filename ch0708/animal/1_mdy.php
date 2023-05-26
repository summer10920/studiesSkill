<?php
if(!empty($_POST)){ //POST有東西才做{}，同等於表單提交之後的處理{}
  $sql="UPDATE ch8_animal SET name='".$_POST['name']."',weight=".$_POST['weight'].",info='".$_POST['info']."',date=NOW() WHERE id=".$_POST['id'];
  //UPDATE ch8_animal SET name='加菲貓',weight=35,info='黑黃色的肥貓，個性很差但討人喜歡。',date=NOW() WHERE id=6

  $db->query($sql);
  header("location:?page=v1_show");
}
?>

<div style="width:50vw; margin:20px auto; background:#eee; text-align:center; padding:10px;">
  <h1>修改動物資料 ver1</h1>
  <form method="post">
    <h3>指定編號</h3>
    <p><input type="number" name="id" style="width:50%"></p>
    <h3>動物名稱</h3>
    <p><input type="text" name="name" style="width:50%"></p>
    <h3>重量</h3>
    <p><input type="number" name="weight" style="width:50%"></p>
    <h3>介紹</h3>
    <p><textarea name="info" rows="10" style="width:50%"></textarea></p>
    <p>
      <input type="submit" value="修改">
      <input type="reset" value="重置">
    </p>
  </form>
</div>