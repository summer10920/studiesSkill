<?php
//print_r($_POST);
/*
if($_POST['acc']=="admin" && $_POST['pwd']=="1234"){
  #ok
}
else{
  #error
}

if(!($_POST['acc']=="admin" && $_POST['pwd']=="1234")){
  #error
}
else{
  #ok
}
*/
if(!($_POST['acc']=="admin" && $_POST['pwd']=="1234")){
  echo '<script>alert("對不起，您輸入的帳號或密碼錯誤")</script>';
  // echo '<script>document.location.href="2_login.php"</script>';
  echo '<script>window.history.back()</script>';
} 
else{
  echo '<script>alert("歡迎 '.$_POST['acc'].' 登入")</script>';
  echo '<script>document.location.href="https://www.google.com/"</script>';
}
?>




