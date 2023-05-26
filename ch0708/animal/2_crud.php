<?php



//layout switch
// if(!empty($_GET['mdy'])) $layout="mdy"; //如果GET的mdy有東西，代表被觸發了修改按鈕，那我的畫面應該是mdy模式
// else $layout="list";  //否則為list模式
$layout=(!empty($_GET['mdy']))?'mdy':'list';
switch ($layout) {
  case 'mdy':
    include_once('2_mdy.php');
    break;
  case 'list':
    include_once('2_list.php');
    break;
}

