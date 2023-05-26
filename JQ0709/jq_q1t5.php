<?php
$t5_ary = array(
  'img/01C01.gif',
  'img/01C02.gif',
  'img/01C03.gif',
  'img/01C04.gif',
  'img/01C05.gif',
  'img/01C06.gif'
);
$t5_js = json_encode($t5_ary);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script src="plugins/jquery-3.4.1.min.js"></script>
</head>
<body>
  <div id="mwww" style="width:500px; padding:2px; height:290px;">
    沒有資料
  </div>
  <!--正中央-->
  <script>
    var imglist=<?=$t5_js?>;
    if(imglist[0]!=null){ //如果有資料時，我們先放第一張
      $("#mwww").html(`<embed loop=true src='${imglist[0]}' style='width:100%; height:100%;'>`);
      if(imglist.length>1){  //如果資料有兩筆以上，我們規劃一個interval進行多張輪播
        var now=1;
        setInterval(function(){
          // $("#mwww").html(`<embed loop=true src='${imglist[now]}' style='width:100%; height:100%;'>`);
          // now=(now<imglist.length-1)?now+1:0;
          $("#mwww>embed").attr("src",imglist[now]);
          now=(now+1)%imglist.length;
        },1000);
      }
    }
  </script>
</body>

</html>