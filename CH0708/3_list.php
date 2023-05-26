<?php
//insert start
if(!empty($_GET['do'])&&$_GET['do']=="add"){
  $sql="INSERT INTO ch7_animal (date) VALUES(NOW())";
  $db->query($sql);
  $max=getmax();
  header("location:?page=crud_page&p=".$max);
}
//insert end
//update start
if(!empty($_POST)&&is_array($_POST['name'])){ //當
  foreach ($_POST['name'] as $key => $value) {  //$key=id
    /* 全部強迫更新，不優
    $nameValue=$_POST['name'][$key];
    $weightValue=$_POST['weight'][$key];
    $infoValue=$_POST['info'][$key];
    $idValue=$key;
    $timeValue="NOW()";
    echo $sql="UPDATE ch7_animal SET name='".$nameValue."', weight='".$weightValue."', info='".$infoValue."', date='.$timeValue.' WHERE id=".$idValue;
    print "<br>";
    */
    $chg="";
    if($_POST['name'][$key]!=$_POST['oldname'][$key]) $chg.="name='".$_POST['name'][$key]."', ";
    if($_POST['weight'][$key]!=$_POST['oldweight'][$key]) $chg.="weight='".$_POST['weight'][$key]."', ";
    if($_POST['info'][$key]!=$_POST['oldinfo'][$key]) $chg.="info='".$_POST['info'][$key]."', ";
    if($chg){ //必須要是非空字串
      $sql="UPDATE ch7_animal SET ".$chg."date=NOW() WHERE id=".$key;
      $db->query($sql);
    }
    /*
    0. 先創造空的$變數
    1. 先判斷 name有沒有要改，要改就把SQL CODE之SET部分設計好為+=$變數
    2. 先判斷 weight有沒有要改，要改就把SQL CODE之SET部分設計好為+=$變數
    3. 先判斷 info有沒有要改，要改就把SQL CODE之SET部分設計好為+=$變數
    4. 如果$變數不是空的，代表有要改的任務。此時多一個date=NOW()。整個sql code創出來
    
    原本$sql="UPDATE ch7_animal SET name='".$nameValue."', weight='".$weightValue."', info='".$infoValue."', date='.$timeValue.' WHERE id=".$idValue;
    變成$sql="update ch7_animal SET "."<?=如果name要更新?>"."<?=如果weight要更新?>"."<?=如果info要更新?>"."<?=如果date要更新?>"."WHERE id=??";
    */
  }
  header("location:?page=crud_page&p=".$_GET['p']);
}
//update end
//delete start
if(!empty($_GET['del'])){ //如果$_GET['del']有東西
  //殺了$_GET['del']所指定的id
  $sql="DELETE FROM ch7_animal WHERE id=".$_GET['del'];
  $db->query($sql);
  $max=getmax();
  //get[p]=5 ,  $max=5  =>5
  //get[p]=5 ,  $max=4  =>4
  //get[p]=5 ,  $max=9  =>5
  $realp=($_GET['p']-$max==1)?$max:$_GET['p'];
  header("location:?page=crud_page&p=".$realp);
}
//delete end
//select start 一次5筆
if(!empty($_GET['p'])){
  $nowpage=($_GET['p']>0&&(is_numeric($_GET['p'])))?$_GET['p']:1;
}
else {
  $nowpage=1;
}
/*
若get[p]大於0且是個數字，那麼get['p']就是頁號，否則都當page 1
$nowpage才是真正代表頁數，而GET變數只是粗糙的值
/*
$np vs $bg
1 => 0 = 0*5
2 => 5 = 1*5
3 => 10 = 2*5
4 => 15 = 3*5
*/
$begin=($nowpage-1)*5;  // used +-*/ get a value
$sql="SELECT * FROM ch7_animal WHERE 1 LIMIT ".$begin.",5";
$rows=$db->query($sql)->fetchAll();
//select end

?>
<table width=100%>
<tr>
  <td>編號</td>
  <td>動物名稱</td>
  <td>重量</td>
  <td>簡介</td>
  <td>更新日期</td>
  <td>操作</td>
</tr>
<tr><td colspan="6"><hr/></td></tr>
<form method="post" action="?page=crud_page&p=<?=$_GET['p']?>"><!-- 修改表單 start-->
<?php
foreach($rows as $row){
?>
<tr>
  <td><?=$row['id']?></td>
  <td>
    <input type="hidden" name="oldname[<?=$row['id']?>]" value="<?=$row['name']?>">
    <input type="text" name="name[<?=$row['id']?>]" value="<?=$row['name']?>">
  </td>
  <td>
    <input type="hidden" name="oldweight[<?=$row['id']?>]" value="<?=$row['weight']?>" min=1>
    <input type="number" name="weight[<?=$row['id']?>]" value="<?=$row['weight']?>" min=1>
  </td>
  <td>
    <input type="hidden" name="oldinfo[<?=$row['id']?>]" value="<?=$row['info']?>" style="width:95%">
    <input type="text" name="info[<?=$row['id']?>]" value="<?=$row['info']?>" style="width:95%">
  </td>
  <td><?=$row['date']?></td>
  <td>
    <input type="button" value="x" onclick="document.location.href='?page=crud_page&del=<?=$row['id']?>&p=<?=$nowpage?>'">
  </td>
</tr>
<?php
}
?>
<tr>
  <td colspan=6 align=center>
    <hr/>
<?php
//   14/5=2.多=>3個page
/*
$sql="select * from ch7_animal where 1";
$rows=$db->query($sql)->fetchAll();
$total=count($rows);
*/
/*
用函式getmax()取代掉工作
$sql="select COUNT(*) from ch7_animal where 1";
$row=$db->query($sql)->fetch();
$total=$row[0];
$max=ceil($total/5); //ceil無條件進位
*/
$max=getmax();

// $prepg=($nowpage==1)?1:$nowpage-1; //上一頁
if($nowpage!=1) echo ' <a href="?page=crud_page&p='.($nowpage-1).'"><<</a> ';

for($i=1;$i<=$max;$i++) {
  if($nowpage==$i) echo ' <span style="font-size:2em">'.$i.'</span> ';
  else echo ' <a href="?page=crud_page&p='.$i.'">'.$i.'</a> ';
}

//$nextpg=($nowpage==$max)?$nowpage:$nowpage+1; //下一頁
if($nowpage!=$max) echo ' <a href="?page=crud_page&p='.($nowpage+1).'">>></a> ';
?>
    <p>
      <input type="button" value="新增一筆" onclick="location.href='?page=crud_page&do=add'">
      <input type="submit" value="全部更新">
    </p>
  </td>
</tr>
</form><!-- 修改表單 end-->
</table>