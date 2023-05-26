<?php
// print_r($_POST);
if(!empty($_POST)){ //如果$_POST陣列不是空陣列

	if($_POST['acc']!="admin"||$_POST['pwd']!="1234"){ //假設acc=admin,1234
		echo "<script>alert('帳密錯誤')</script>";
		// echo "<script>document.location.href='2_hw_login.html'</script>";
		echo "<script>window.history.back()</script>";
	}
	else{ //會到這裡的一定是admin&1234
		echo "<script>alert('歡迎登入');document.location.href='https://www.google.com/';</script>";
	}
	
}
else header('location:2_hw_login.html');