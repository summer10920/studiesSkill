<?php
  //PHP MODE
	switch ($_POST['country']) {
		case 'tw':
			$txt="您好，" . $_POST['acc'] . "！";
			break;
		case 'jp':
      $txt="空膩啾哇，" . $_POST['acc'] . "！";
			break;
		case 'hk':
      $txt="雷侯，" . $_POST['acc'] . "！";
			break;
	}
  $txt.="\\n感謝您的註冊！我們即將返回主頁";

  echo '<script>alert("'.$txt.'");</script>';
  header('location:https://www.google.com/');
?>



<!--html mode-->

<script>
  // JS MODE
  // alert("<?=$txt?>");
  // document.location.href='https://www.google.com/';
</script>