<?php
/*
print_r($_REQUEST); //等於$_POST or $_GET，但可以通用
print "<br>";
print_r($_POST);
print "<br>";
print_r($_GET);
*/
switch ($_REQUEST['country']) { //超全域變數
  case "tw":
    $txt = "您好!" . $_REQUEST['acc'];
    break;
  case 'jp':
    $txt = "摳尼鳩挖!" . $_REQUEST['acc'];
    break;
  case 'hk':
    $txt = "雷猴阿雷!" . $_REQUEST['acc'];
    break;
}
$txt .= "\\n感謝您的註冊！";
//header("location:https://www.google.com/"); //php轉址
?>

<!--JS轉址-->
<script>
  alert("<?= $txt ?>");
  //document.location.href="https://www.google.com";
</script>