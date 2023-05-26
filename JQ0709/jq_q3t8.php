<?php
$seat=[1,3,5,8,10,18]; //已售座位
$movie=array(
  "title"=>"冰雪奇緣II",
  "date"=>"2019-12-19",
  "time"=>"14:00~16:00"
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script src="plugins/jquery-3.4.1.min.js"></script>
</head>
<body>
<form action="jq_q3t8_api.php">
<?php
for($i=1;$i<21;$i++){
  if(in_array($i,$seat)) echo '<img src="img/03D03.png" style="padding-right:23px">';
  else echo '
    <img src="img/03D02.png">
    <input type="checkbox" name="set_buy[]" value="'.$i.'">
  ';
  if($i%5==0) echo '<br>';
}
?>
<hr>
<input type="hidden" name="title" value="<?=$movie['title']?>">
<input type="hidden" name="date" value="<?=$movie['date']?>">
<input type="hidden" name="time" value="<?=$movie['time']?>">
您選擇的電影是：<?=$movie['title']?><br>
您選擇的時刻是：<?=$movie['date']?> <?=$movie['time']?><br>
您勾選了 <b id="nn" style="color:red">0</b> 張票，最多可購買4張票<br><br>
<input type="submit" value="確定">
</form>
<script>
  var num=0;
  $(document).ready(function(){ //檢查每次網頁載入完成後，對畫面重新算。
    $("input:checkbox").each(function(){
      if(this.checked) num++;
    });
    $("#nn").text(num);
  })
  $("input:checkbox").click(function(){//點擊事件，每次的checkbox行為
    // console.log(this.checked);
    if(this.checked){
      if(num<4) num++;
      else this.checked=false;
    }
    else{
      num--;
    }
    $("#nn").text(num);
  });



</script>
</body>
</html>