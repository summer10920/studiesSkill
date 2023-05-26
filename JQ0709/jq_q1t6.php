<?php
$t5_ary = array(
  'img/01D01.jpg',
  'img/01D02.jpg',
  'img/01D03.jpg',
  'img/01D04.jpg',
  'img/01D05.jpg',
  'img/01D06.jpg',
);
$t5_js = json_encode($t5_ary);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <style>
    .im {
      width: 150px;
      height: 103px;
    }
    .ctrl{
      cursor: pointer;
    }
    #imglist{
      display: block;
      height:321px;
      overflow: hidden;
      border:1px solid #000;
    }
  </style>
  <script src="plugins/jquery-3.4.1.min.js"></script>
</head>
<body>
  <div style="width:200px;text-align:center">
    <span>校園映象區</span>
    <div style="padding:10px 20px">
      <img src="img/01E01.jpg" onclick="pp('up')" class="ctrl">
      <div id="imglist">
        <!-- 塞圖片到這裡 -->
      </div>
      <img src="img/01E02.jpg" onclick="pp('down')" class="ctrl">
    </div>
  </div>
  <script>
    ///塞入圖片至DOM
    var jsn=<?=$t5_js?>;
    for(let i=0;i<jsn.length;i++) $("#imglist").append(`<img src="${jsn[i]}" class="im" id="ssaa${i}">`);
    //初始化預設畫面，只顯示前三張
    $(".im").hide();
    for(let s=0;s<3;s++) $(`#ssaa${s}`).show();
    //按鈕事件
    nowpage=0;
    function pp(todo){
      if(todo=="up"&&nowpage>0){  //do up
        // $(`#ssaa${nowpage-1}`).toggle();
        // $(`#ssaa${nowpage+2}`).toggle();
        $(`#ssaa${nowpage-1}`).slideToggle("slow");
        $(`#ssaa${nowpage+2}`).slideToggle("slow");
        nowpage--;
      }
      else if(todo=="down"&&nowpage<jsn.length-3){ //do down
        // $(`#ssaa${nowpage}`).hide();
        // $(`#ssaa${nowpage+3}`).show();
        $(`#ssaa${nowpage}`).slideToggle("slow");
        $(`#ssaa${nowpage+3}`).slideToggle("slow");
        nowpage++;
      }
    }
  </script>



</body>

</html>