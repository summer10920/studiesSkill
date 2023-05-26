<?php
session_start();
$db = new PDO("mysql:host=127.0.0.1;dbname=db01;charset=utf8", "root", "", null);
date_default_timezone_set("Asia/Taipei");

//select SQL
function select($tb, $wh){ //只要告知我資料表名稱與條件，我就能回傳select的結果(二維陣列)
  global $db;
  return $db->query("select * from " . $tb . " where " . $wh)->fetchAll();
}

//select SQL by prepare version

function selectv3($tb,$wh,$toswap){
  global $db;
  // select * from t10_admin where acc=? and pwd=?
  $beload=$db->prepare("select * from " . $tb . " where " . $wh);
  $beload->execute($toswap);
  return $beload->fetchall();
}


//insert SQL
function insert($ary, $tb){ //給我資料跟資料表名，我能分解情報後新增一筆資料
  global $db;
  $field = "id";
  $data = "null";
  foreach ($ary as $key => $value) {
    $field .= "," . $key;
    $data .= ",'" . $value."'";
  }
  $db->query("INSERT INTO " . $tb . " (" . $field . ") VALUES (" . $data . ")");
  return $db->lastInsertId(); //取得上一筆新增資料的該ID
}

//update SQL
function update($ary, $tb){
  global $db;
  foreach ($ary as $do => $data) {
    switch($do){
    case 'num+1': 
      $db->query("UPDATE ".$tb." SET num=num+1 WHERE id=".$data);
    break;
    case 'num-1':
      $db->query("UPDATE ".$tb." SET num=num-1 WHERE id=".$data);
    break;
    default:
      foreach($data as $key=>$value){ //$do為欄位名稱,$key為索引id,$value為新值
          $db->query("UPDATE ".$tb." SET ".$do."='".$value."' WHERE id=".$key);
          /* ary demo like this can be update query!
          echo "UPDATE " . $tb . " SET " . $do . "='" . $value . "' WHERE id=" . $key;
          print "<br>";
          Array
          (
              [text]=>Array
                  (
                      [1]=>卓越科技大學校園資訊系統
                      [2]=>卓越科技大學校園資訊系統
                      [3]=>卓越科技大學校園資訊系統
                      [4]=>卓越科技大學校園資訊系統
                      [5]=>AA
                      [6]=>BB
                      [7]=>CC
                  )

              [dpy]=>Array
                  (
                      [1]=>0
                      [2]=>0
                      [3]=>0
                      [4]=>0
                      [5]=>0
                      [6]=>0
                      [7]=>1
                  )
          )
          */
      }
    break;
    }
  }
}
//delete sql
function delete($ary,$tb){
  global $db;
  foreach ($ary as $do=>$data){
    switch ($do) {
      case 'del':
          foreach($data as $value){ //$value為刪除對象
            $db->query("DELETE FROM ".$tb." WHERE id=".$value);
          }
        break;
      case 'delat':
          $db->query("DELETE FROM ".$tb." WHERE ".$data);
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

//add file單筆，$_FILES的單筆資料
function addfile($file){
  $newname=time()."_".$file['name'];
  copy($file['tmp_name'],"upload/".$newname);
  return $newname;
}

//分頁導覽
function navpage($tb,$wh,$range,$nowpage){
  $total=count(select($tb,$wh));  //總筆數
  $many=ceil($total/$range);   //多少頁
  $pg['<']=($nowpage==1)?$nowpage:$nowpage-1;
  for($i=1;$i<=$many;$i++) $pg[$i]=$i;
  $pg['>']=($nowpage==$many)?$nowpage:$nowpage+1;
  return $pg;
}


/*******************for web01 use******************* */

//t3
$rows=select("t3_title","dpy=1");
$t3_img="upload/".$rows[0]['img'];
$t3_txt=$rows[0]['text'];

//t4
$rows = select("t4_maqe", "dpy=1");
$t4_txt="";
foreach ($rows as $row) $t4_txt.=$row['text']."　　　　　";

//t5
$rows=select("t5_mvim","dpy=1");
foreach ($rows as $row) {
  $t5_ary[]="upload/".$row['img'];
}

//t6
$rows=select("t6_img","dpy=1");
$t6_num=count($rows);
/* plan A
$t6_txt="";
$i=0;
foreach ($rows as $row) {
  $t6_text.='<img id="ssaa'.$i.'" class="im" src="upload/'.$row['img'].'">';
  $i++;
}
*/
$t6_txt = "";
foreach($rows as $key=>$value){
  $t6_txt.='<img id="ssaa'.$key.'" class="im" src="upload/'.$value['img'].'" width=150 height="103">';
}

//t7
if(empty($_SESSION['visit'])){
  $_SESSION['visit']="flag";
  $ary['num+1']=1; //$ary['do']=id
  update($ary,"t7_total");
}
$rows=select("t7_total",1);
$t7_num=$rows[0]['num'];

//t8
$rows=select("t8_footer",1);
$t8_txt=$rows[0]['text'];

//t9
$many=count(select("t9_news","dpy=1"));
$t9_more=($many>5)?'<a href="news.php" style="float:right">More...</a>':'';
$rows=select("t9_news","dpy=1 limit 5");
$t9_txt="";
foreach ($rows as $row) {
  $t9_txt.='<li>'.mb_substr($row['text'],0,10).'<span class="all" style="display:none">'.$row['text'].'</span></li>';
}

//t9 for news.php
$nowpage=(empty($_GET['p']))?1:$_GET['p'];
$begin=($nowpage-1)*5;
$rows=select("t9_news","dpy=1 limit ".$begin.",5");
$t9m_txt="";

foreach($rows as $row){
  $t9m_txt.='<li class="sswww">'.mb_substr($row['text'],0,10).'<span class="all" style="display:none">'.$row['text'].'</span></li>';
}

$re=navpage("t9_news","dpy=1",5,$nowpage);
$t9_btn="";
foreach ($re as $key => $value) {
  $size=($nowpage==$key)?60:30;
  $t9_btn.= '<a class="bl" style="font-size:'.$size.'px;" href="?p='.$value.'">'.$key.'</a>';
}


//t12
$t12txt="";
$rows=select("t12_menu","parent=0 and dpy=1");
foreach ($rows as $row) {
  $t12txt.= '<a style="color:#000; font-size:13px; text-decoration:none;" href="'.$row['link'].'"><div class="mainmu">'.$row['text'];

  $sons=select("t12_menu","parent=".$row['id']);
  foreach ($sons as $son) {
    $t12txt.='<div class="mainmu2 mw" style="display:none"><a style="color:#000; font-size:13px; text-decoration:none;" href="'.$son['link'].'">'.$son['text'].'</a></div>';
  }


  $t12txt.= '</div></a>';
}
/*
<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=atitle">
  <div class="mainmu">父親
                      <div class="mainmu2 mw" style="display:none">
                        <a style="color:#000; font-size:13px; text-decoration:none;" href="http://">兒子A</a>
                      </div>
                      <div class="mainmu2 mw" style="display:none">
                        <a style="color:#000; font-size:13px; text-decoration:none;" href="http://">兒子B</a>
                      </div>
  </div>
</a>
*/