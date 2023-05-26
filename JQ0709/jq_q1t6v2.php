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
    .imgbox{
      display: block;
      height:309px;
      overflow: hidden;
      margin:5px;
    }
    #imglist{
      position: relative;
      top:0;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
  </style>
  <script src="plugins/jquery-3.4.1.min.js"></script>
</head>
<body>
  <div style="width:200px;text-align:center">
    <span>校園映象區</span>
    <div style="padding:10px 20px">
      <img src="img/01E01.jpg" onclick="pp('up')" class="ctrl" style="margin-bottom: -5px;">
      <div class="imgbox">
        <div id="imglist">
          <!-- 塞圖片到這裡 -->
        </div>
      </div>
      <img src="img/01E02.jpg" onclick="pp('down')" class="ctrl">
    </div>
  </div>
  <script>
    ///塞入圖片至DOM
    var jsn=<?=$t5_js?>;
    for(let i=0;i<jsn.length;i++) $("#imglist").append(`<img src="${jsn[i]}" class="im" id="ssaa${i}">`);

    //按鈕事件
    var nowpage=0,mytop=0;
    function pp(todo){
      if(todo=="up"&&nowpage>0){  //do up
        mytop+=103;
        $("#imglist").animate({
          "top":mytop+"px"
        },1000);
        nowpage--;
      }
      else if(todo=="down"&&nowpage<jsn.length-3){ //do down
        mytop-=103;
        $("#imglist").animate({
          "top":mytop+"px"
        },1000);
        nowpage++;
      }
    }
  </script>



</body>

</html>