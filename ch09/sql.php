<?php
session_start();
$db=new PDO("mysql:host=127.0.0.1;dbname=php_10804;charset=utf8","root","");
date_default_timezone_set("Asia/Taipei");

//select SQL
function select($tableName,$where){
  global $db;
  $sql="SELECT * FROM ".$tableName." WHERE ".$where;
  return $db->query($sql)->fetchAll();
}

function select_prepare($tableName,$prepareCode,$userData){
  global $db;
  // SELECT * FROM q1t10_admin WHERE acc=? AND pwd=?
  $sql="SELECT * FROM ".$tableName." WHERE ".$prepareCode;
  $beload=$db->prepare($sql);  //query是純語意，prepare是參雜?之特殊語意
  $beload->execute($userData);
  return $beload->fetchAll();
}

//insert SQL
function insert($ary,$tableName){
  global $db;
  $feild="id";
  $data="null";
  foreach ($ary as $key => $value) {
    $feild.=",".$key;
    $data.=",'".$value."'";
  }
  $sql="INSERT INTO ".$tableName." (".$feild.") VALUES (".$data.")";
  $db->query($sql);
  return $db->lastInsertId();
}

//update SQL
function update($ary,$tableName){
  global $db;
  foreach ($ary as $do => $data) {
    switch($do){
      case 'num+1':
        $sql="UPDATE ".$tableName." SET num=num+1 WHERE id=".$data; //$data=對象id
        //UPDATE q1t7_total SET num=num+1 WHERE id=1
        $db->query($sql);
      break;
      case 'num-1':
        $sql="UPDATE ".$tableName." SET num=num-1 WHERE id=".$data; //$data=對象id
        $db->query($sql);
      break;
      default:
        foreach ($data as $key => $value) { //$data=陣列內容多筆，單結構為['id']=修改新值
          $sql="UPDATE ".$tableName." SET ".$do."='".$value."' WHERE id=".$key;
          //UPDATE q1t7_total SET num=998 WHERE id=1
          $db->query($sql);
        }
      break;
    }
  }
}

//delete SQL
function delete($ary,$tableName){
  global $db;
  foreach($ary as $do=>$data){
    switch($do){
      case 'del':
        foreach ($data as $value) {
          $sql="DELETE FROM ".$tableName." WHERE id=".$value;
          $db->query($sql);
        }
      break;
      case 'delat':
        $sql="DELETE FROM ".$tableName." WHERE ".$data;
        $db->query($sql);
      break;
    }
  }
}

//php轉址
function plo($link){
  return header("location:".$link);
}

//JS轉址
function jlo($link){
  return "location.href='".$link."'";
}

//file upload
function addfile($file){
  $newname=time()."_".$file['name'];
  copy($file['tmp_name'],"upload/".$newname);
  return $newname;
}

//分頁導覽 pageNav  提供資料表名稱,條件,一頁要幾個,目前在哪頁
function navpage($tableName,$where,$range,$nowpage){
  
  $result=select($tableName,$where);
  $total=count($result);
  $many=ceil($total/$range);

  $pg['<']=($nowpage==1)?1:$nowpage-1;
  for($i=1;$i<=$many;$i++) $pg[$i]=$i;
  $pg['>']=($nowpage==$many)?$many:$nowpage+1;
  
  return $pg;
}



/*******custom for q1 start*********/
$rows=select("q1t3_title","dpy=1");
$t3_img=$rows[0]['img'];
$t3_txt=$rows[0]['text'];

$rows=select("q1t4_maqe","dpy=1");
$t4_txt="";
foreach ($rows as $row) $t4_txt.=$row['text']."　　";

if(empty($_SESSION['visit'])){ //如果不認識的人，先把DB內人數做++
  $_SESSION['visit']="checked";
  $post['num+1']=1;//這裡的1是id唷
  update($post,"q1t7_total");
}
$rows=select("q1t7_total",1);
$t7_txt=$rows[0]['num'];

$rows=select("q1t5_mvim","dpy=1");
foreach ($rows as $row) $t5_ary[]="upload/".$row['text'];

$rows=select("q1t6_img","dpy=1");
$t6_num=count($rows);
$t6_txt="";
foreach ($rows as $key=>$row)
  $t6_txt.='<img src="upload/'.$row['text'].'" id="ssaa'.$key.'" class="im" width="150" height="103">';

$rows=select("q1t8_footer",1);
$t8_txt=$rows[0]['num'];

$rows=select("q1t9_news","dpy=1");
$t9_more=(count($rows)>5)?'<a href="news.php" style="float:right">More...</a>':'';

$rows=select("q1t9_news","dpy=1 limit 5");
$t9_txt="";
foreach ($rows as $row) {
  $t9_txt.='<li>'.mb_substr($row['text'],0,10).'...<span class="all" style="display:none">'.$row['text'].'</span></li>';
}

$nowpage=(empty($_GET['page']))?1:$_GET['page'];
$t9_begin=($nowpage-1)*5; //0,5,10
$rows=select("q1t9_news","dpy=1 limit ".$t9_begin.",5");
$t9_all="";
foreach ($rows as $row) {
  $t9_all.='<li>'.mb_substr($row['text'],0,10).'...<span class="all" style="display:none">'.$row['text'].'</span></li>';
}
$result=navpage("q1t9_news","dpy=1",5,$nowpage);
$t9_navpage="";
foreach ($result as $key => $value) {
  $t9_navpage.='<a class="bl" style="font-size:'.(($nowpage==$key)?60:30).'px;" href="?page='.$value.'">'.$key.'</a>';
  //echo '<a class="bl" style="font-size:'.(($key==$nowpage)?60:30).'px;" href="?do=aimage&page='.$value.'"> '.$key.' </a>';
}

$t12_txt='';
$rowsFather=select("q1t12_menu","parent=0 and dpy=1");
foreach ($rowsFather as $rowFahter) {
  $t12_txt.='
    <a style="color:#000; font-size:13px; text-decoration:none;" href="'.$rowFahter['link'].'">
      <div class="mainmu">'.$rowFahter['text'];

      $rowsSon=select("q1t12_menu","parent=".$rowFahter['id']);
      foreach ($rowsSon as $rowSon) {
        $t12_txt.='
          <a class="mw" href="'.$rowSon['link'].'" style="display:none">
            <div class="mainmu2">'.$rowSon['text'].'</div>
          </a>
        ';
      }
  $t12_txt.='
      </div>
    </a>';
}
/*
<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=atitle">
  <div class="mainmu">fatherA
            <a class="mw" href="http://" style="display:none">
              <div class="mainmu2">son2</div>
            </a>
            <a class="mw" href="http://" style="display:none">
              <div class="mainmu2">son2</div>
            </a>
  </div>
</a>
<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=atitle">
  <div class="mainmu">
  
  fatherB

  </div>
</a>
*/
