<?php
// print_r($_POST); //$_POST['me']
// print_r($_FILES); //$_FILES['photo'][]

// echo $_FILES['photo']['name']."<br>"; //原檔案名稱
// echo $_FILES['photo']['tmp_name']."<br>"; //暫存路徑
// echo $_FILES['photo']['size']."<br>";//檔案大小
// echo $_FILES['photo']['type']."<br>";//檔案類型

// copy(來源路徑對象含檔名,目標路徑對象含檔名);
// unlink("6_upload/".time()."_".$_FILES['photo']['name']);//刪除指定位置的檔案

if(!empty($_FILES)){ //如果$_FILES有東西?
  //copy($_FILES['photo']['tmp_name'],"6_upload/1556687846_coffee.png");
  copy($_FILES['photo']['tmp_name'],"6_upload/".time()."_".$_FILES['photo']['name']);
  echo '<img src="6_upload/'.time().'_'.$_FILES['photo']['name'].'" width="300">';
  echo '<hr>';
}
?>

<form method="post" enctype="multipart/form-data">
  姓名｜<input type="text" name="me" id=""><br><br>
  頭像｜<input type="file" name="photo" id=""><br><br>
  <input type="submit" value="上傳">
</form>