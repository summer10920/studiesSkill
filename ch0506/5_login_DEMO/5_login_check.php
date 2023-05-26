<?php
print_r($_POST);
if(!empty($_POST)){ //陣列不是空陣列 = 陣列內有東西時 => true則if成立

	if($_POST['acc']!="admin"||$_POST['pwd']!="1234"){ //假設acc=admin,1234
		echo "<script>alert('帳密錯誤')</script>";
		echo "<script>window.history.back()</script>";
	}
	else{ //會到這裡的一定是admin&1234
		session_start();

		$_SESSION['user']='卍煞氣a三源卍';

		echo "<script>alert('歡迎登入');document.location.href='member.php';</script>";
	}
}
else header('location:index.php');
?>