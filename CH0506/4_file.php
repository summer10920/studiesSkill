<?php
//print_r($_POST);
date_default_timezone_set("Asia/Taipei");
print_r($_FILES);
echo date("YmdHis");
/*
echo $_FILES['mypic1']['name']."<br>";
echo $_FILES['mypic1']['type']."<br>";
echo $_FILES['mypic1']['tmp_name']."<br>";
echo $_FILES['mypic1']['size']."<br>";
*/
if(!empty($_FILES)){  // same as if($_FILES){
// copy($_FILES['mypic1']['tmp_name'],"upload/".$_FILES['mypic1']['name']); //copy(from,to)
// same as => copy("F:\xampp\tmp\php4FAF.tmp","upload/Koala.jpg");
$newname=date("YmdHis")."_".$_FILES['mypic1']['name'];
copy($_FILES['mypic1']['tmp_name'],"upload/".$newname); //copy(from,to)
}


?>
<hr>
<form method="post" enctype="multipart/form-data"> <!--有FILES一定要用POST-->
  <p><input type="file" name="mypic1" id=""></p>
  <!-- <p><input type="file" name="mypic2" id=""></p> -->
  <input type="submit" value="圖片上傳">
</form>