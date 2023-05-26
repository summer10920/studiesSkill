<?php
require_once("sql.php");

switch ($_GET['do']) {
  case 'check':
  //sql Injection  => SELECT * FROM q1t10_admin WHERE acc='sss' AND pwd='9487945' OR 1=1;/*'

  // ver1 沒有預防
  /*
    $result = select("q1t10_admin", "acc='" . $_POST['acc'] . "' AND pwd='" . $_POST['pwd'] . "'");
  */

  // ver2 替換單雙引號使語法不容易被扭曲
  /*
    $_POST = preg_replace("/[\'\"]+/",'',$_POST);
    $result = select("q1t10_admin", "acc='" . $_POST['acc'] . "' AND pwd='" . $_POST['pwd'] . "'");
  */

  // ver3 使用PDO的prepare + execute
  //prepare => "SELECT * FROM q1t10_admin WHERE acc=? AND pwd=?;"
  $data=array($_POST['acc'],$_POST['pwd']);
  $result=select_prepare("q1t10_admin","acc=? AND pwd=?",$data);
    if ($result) { //驗證帳密成功
      $_SESSION['admin'] = $_POST['acc'];
      plo("admin.php");
    } else echo "<script>alert('帳號密碼錯誤!!');" . jlo('login.php') . "</script>";
    break;
  case 'logout':
    unset($_SESSION['admin']);
    plo("login.php");
    break;
  case 'titleadd':
    $_POST['img'] = addfile($_FILES['img']);
    insert($_POST, "q1t3_title");
    plo("admin.php");
    break;
  case 'titlemdy':
    $_POST['dpy'][$_POST['radio']] = 1; //設定dpy['表單所radio的對象id']為1
    unset($_POST['radio']); //可不打，雖有錯誤提示(foreach)，但因php轉址根本看不到api.php的任何畫面
    update($_POST, "q1t3_title"); //將資料(打包方式已配合好)送給update函式，快速完成'批次修改'作業
    delete($_POST, "q1t3_title"); //將資料(打包方式已配合好)送給delete函式，快速完成'批次刪除'作業
    plo("admin.php");
    break;
  case 'titlechg':
    $post['img'][$_GET['id']] = addfile($_FILES['img']);
    update($post, "q1t3_title");
    plo("admin.php");
    break;
  case 'maqeadd':
    insert($_POST, "q1t4_maqe");
    plo("admin.php?do=aad");
    break;
  case 'maqemdy':
    update($_POST, "q1t4_maqe");
    delete($_POST, "q1t4_maqe");
    plo("admin.php?do=aad");
    break;
  case 'totalmdy':
    update($_POST, "q1t7_total");
    plo("admin.php?do=atotal");
    break;
  case 'mvimadd':
    $mypost['text'] = addfile($_FILES['img']);
    insert($mypost, "q1t5_mvim");
    plo("admin.php?do=amvim");
    break;
  case 'mvimmdy':
    // print_r($_POST);
    update($_POST, "q1t5_mvim");
    delete($_POST, "q1t5_mvim");
    /*
    UPDATE q1t5_mvim SET dpy='0' WHERE id=1
    UPDATE q1t5_mvim SET dpy='1' WHERE id=2
    UPDATE q1t5_mvim SET dpy='1' WHERE id=3
    UPDATE q1t5_mvim SET dpy='1' WHERE id=4
    UPDATE q1t5_mvim SET dpy='0' WHERE id=6
    UPDATE q1t5_mvim SET del='6' WHERE id=0   (MySQL 回應：Unknown column 'del' in 'field list')
    DELETE FROM q1t5_mvim WHERE id=6
    */
    plo("admin.php?do=amvim");
    break;
  case 'mvimchg':
    $mypost['text'][$_GET['id']] = addfile($_FILES['img']); //$mypost['text'][7]=1556748912_01C04.swf (SWF檔案已放入/upload)
    update($mypost, "q1t5_mvim");
    plo("admin.php?do=amvim");
    break;
  case 'imageadd':
    $mypost['text'] = addfile($_FILES['img']);
    insert($mypost, "q1t6_img");
    plo("admin.php?do=aimage");
    break;
  case 'imagemdy':
    update($_POST, "q1t6_img");
    delete($_POST, "q1t6_img");
    plo("admin.php?do=aimage");
    break;
  case 'imagechg':
    $mypost['text'][$_GET['id']] = addfile($_FILES['img']); //$mypost['text'][7]=1556748912_01C04.swf (SWF檔案已放入/upload)
    update($mypost, "q1t6_img");
    plo("admin.php?do=aimage");
    break;
  case 'bottommdy':
    update($_POST, "q1t8_footer");
    plo("admin.php?do=abottom");
    break;
  case 'newsadd':
    insert($_POST, "q1t9_news");
    plo("admin.php?do=anews");
    break;
  case 'newsmdy':
    update($_POST, "q1t9_news");
    delete($_POST, "q1t9_news");
    plo("admin.php?do=anews");
    break;
  case 'adminadd':
    /*
    確認新用戶是否存在於table內
    確認2組密碼是否一致
    都沒問題{
      unset($_POST['check']);
      寫入insert into
    }
    */
    $result=select("q1t10_admin","acc='".$_POST['acc']."'");
    if($result) {
      echo "<script>alert('帳號已存在，請重新註冊');".jlo('admin.php?do=aadmin')."</script>";
    }
    elseif($_POST['pwd']!=$_POST['check']){
      echo "<script>alert('密碼不一致，請重新註冊');".jlo('admin.php?do=aadmin')."</script>";
    }
    else{
      unset($_POST['check']);
      print_r($_POST);
      insert($_POST,"q1t10_admin");
      plo("admin.php?do=aadmin");
    }
    break;
  case 'adminmdy':
    update($_POST,"q1t10_admin");
    delete($_POST,"q1t10_admin");
    plo("admin.php?do=aadmin");
    break;
  case 'menuadd':
    insert($_POST,"q1t12_menu");
    plo("admin.php?do=amenu");
    break;
  case 'menumdy':
    update($_POST,"q1t12_menu");
    delete($_POST,"q1t12_menu");
    plo("admin.php?do=amenu");
    break;
  case 'menuchg':
    foreach($_POST['new']['text'] as $key=>$value){
      $newadd['text']=$value;
      $newadd['link']=$_POST['new']['link'][$key];
      $newadd['parent']=$_GET['id'];
      insert($newadd,"q1t12_menu");
    }
    unset($_POST['new']); 
    update($_POST,"q1t12_menu");
    delete($_POST,"q1t12_menu");
    plo("admin.php?do=amenu");
    break;
}
