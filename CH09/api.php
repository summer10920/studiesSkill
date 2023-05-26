<?php
require_once('sql.php');

switch ($_GET['do']) {
  case 'check': //做帳號登入的驗證
      // print_r($_GET);
      /*
      //ver1 純手工讓造
      $sql="SELECT * FROM t10_admin WHERE acc='".$_POST['acc']."' and pwd='".$_POST['pwd']."'";
      $re=$db->query($sql)->fetchAll();
      */

      /*洗一下，把單跟雙引號的符號拿掉
      $_POST=preg_replace("/[\'\"]+/","",$_POST);
      echo $_POST['pwd'];
      */
      
      // //ver2 速食店
      // $re=select("t10_admin","acc='".$_POST['acc']."' and pwd='".$_POST['pwd']."'");

      // ver3 prepare方式
      $data=array($_POST['acc'],$_POST['pwd']); //我只是創造一個小變數陣列，只放兩樣東西而已同學不要想太多
      $re=selectv3("t10_admin","acc=? and pwd=?",$data);

      
      if($re){//有找到此帳號密碼
        $_SESSION['admin']=$_POST['acc'];
        plo("admin.php");
      }
      else echo "<script>alert('帳號或密碼錯誤');".jlo("login.php")."</script>";
    break;
    case 'logout':
      unset($_SESSION['admin']);
      plo("login.php");
    break;
    case 'titleadd':
      $_POST['img'] = addfile($_FILES['img']);
      insert($_POST,"t3_title");
      plo("admin.php?do=atitle");
    break;
    case 'titlemdy':
      $_POST['dpy'][$_POST['radio']]=1; //整合dpy的新狀態
      unset($_POST['radio']); //會導致update set radio=...失敗，PDO的錯誤(sql回應錯誤)訊息不會出現，因此可免unset
      update($_POST,"t3_title");  //即使...將$_POST[del]塞入update也不會故障，原理同上
      delete($_POST, "t3_title"); //即使...將非$_POST[del]塞入delete也不會故障，因為switch case不會碰到
      plo("admin.php?do=atitle");
    break;
    case 'titlechg':
      $_POST['img'][$_GET['id']] = addfile($_FILES['img']);
      update($_POST, "t3_title");
      plo("admin.php?do=atitle");
    break;
    case 'maqeadd':
      insert($_POST,"t4_maqe");
      plo("admin.php?do=aad");
    break;
    case 'maqemdy':
      update($_POST,"t4_maqe");
      delete($_POST,"t4_maqe");
      plo("admin.php?do=aad");
    break;
    case 'mvimadd':
      $_POST['img'] = addfile($_FILES['img']);
      insert($_POST,"t5_mvim");
      plo("admin.php?do=amvim");
    break;
    case 'mvimmdy':
      update($_POST,"t5_mvim");  //即使...將$_POST[del]塞入update也不會故障，原理同上
      delete($_POST,"t5_mvim"); //即使...將非$_POST[del]塞入delete也不會故障，因為switch case不會碰到
      plo("admin.php?do=amvim");
    break;
    case 'mvimchg':
      $ary['img'][$_GET['id']]=addfile($_FILES['img']);
      update($ary,"t5_mvim");
      plo("admin.php?do=amvim");
    break;
    case 'imageadd':
      $post['img']=addfile($_FILES['img']);
      insert($post,"t6_img");
      plo("admin.php?do=aimage");
    break;
    case 'imagemdy':
      update($_POST,"t6_img");
      delete($_POST,"t6_img");
      plo("admin.php?do=aimage");
    break;
    case 'imagechg':
      $ary['img'][$_GET['id']]=addfile($_FILES['img']);
      update($ary, "t6_img");
      plo("admin.php?do=aimage");
    break;
    case 'totalmdy':
      update($_POST, "t7_total");
      plo("admin.php?do=atotal");
    break;
    case 'footermdy':
      update($_POST, "t8_footer");
      plo("admin.php?do=abottom");
    break;
    case 'newsadd':
      insert($_POST,"t9_news");
      plo("admin.php?do=anews");
    break;
    case 'newsmdy':
      update($_POST,"t9_news");
      delete($_POST,"t9_news");
      plo("admin.php?do=anews");
    break;
    case 'adminadd':
      $re=select("t10_admin","acc='".$_POST['acc']."'");
      if(count($re)) echo "<script>alert('此帳號存在，新增失敗');" . jlo("admin.php?do=aadmin") . "</script>";
      
      else if($_POST['pwd']!=$_POST['pwdcheck']){ //檢查密碼一致
        echo "<script>alert('密碼不一致，新增失敗');" . jlo("admin.php?do=aadmin")."</script>";
      }
      else{
        unset($_POST['pwdcheck']);
        insert($_POST,"t10_admin");
        plo("admin.php?do=aadmin");
      }
    break;
    case 'adminmdy':
      update($_POST,"t10_admin");
      delete($_POST,"t10_admin");
      plo("admin.php?do=aadmin");
    break;
    case 'menuadd':
      insert($_POST, "t12_menu");
      plo("admin.php?do=amenu");
    break;
    case 'menumdy':
      update($_POST, "t12_menu");
      delete($_POST, "t12_menu");
      plo("admin.php?do=amenu");
    break;
    case 'menuchg':
      foreach ($_POST['new']['text'] as $key => $value) {
        $ary['text']=$_POST['new']['text'][$key];
        $ary['link']=$_POST['new']['link'][$key];
        $ary['parent']=$_GET['id'];
        insert($ary,"t12_menu");
      }
      unset($_POST['new']);
      update($_POST, "t12_menu");
      delete($_POST, "t12_menu");
      plo("admin.php?do=amenu");
    break;

    // case 'checktest'://測試用的驗證器
    //   print_r($_GET);
    //   print_r($_POST);
    //   print_r($_FILES);
    // break;
}

?>