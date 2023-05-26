<?php
$db=new PDO("mysql:host=127.0.0.1;dbname=php_10804;charset=utf8","root","");
$rows=$db->query("SELECT * FROM jq9_movie WHERE 1")->fetchAll(); //帶出所有電影名稱與代號
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
  <form>
    電影：
    <select name="mm" id="sm" onchange="gt()">
      <?php foreach ($rows as $row) echo '<option value="'.$row['id'].'">'.$row['title'].'</option>';?>
    </select>
    日期：
    <select name="dd" id="sd" onchange="gt()">
    </select>
    場次：<select name="tt" id="st"></select>
    <input type="submit" value="確定">
  </form>

  <script>
    //計算日期差距range的小函式
    function gdate(range){  //gdate(0)=>今天日期, gdate(1)=>明天....
      let mystr="";
      let theday=new Date();
      theday.setDate(theday.getDate()-1);
      for($i=0;$i<range;$i++){
        theday.setDate(theday.getDate()+1);
        let yy=theday.getFullYear();
        let mm=theday.getMonth()+1;
        let dd=theday.getDate();
        mystr+=`<option value="${yy}-${mm}-${dd}">${yy}-${mm}-${dd}</option>`;
      }
      return mystr;
    }
    //寫入7日的option
    $("#sd").html(gdate(7));

    function gt(){ //負責將電影val跟日期val送交給後端，請後端提供HTML CODE給我
      let movie=$("#sm").val();
      let date=$("#sd").val();
      $.post("jq_q3t8_api.php",{movie,date},function(result){
        $("#st").html(result);
      });
    }

    gt();
  </script>
  
</body>
</html>