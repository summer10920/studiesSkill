<?php
$php_ary = array(
  'img/01D01.jpg',
  'img/01D02.jpg',
  'img/01D03.jpg',
  'img/01D04.jpg',
  'img/01D05.jpg',
  'img/01D06.jpg'
);
$js_ary = json_encode($php_ary);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <style>
    #imglist {
      position: relative;
      display: inline-grid;
      margin:5px;
    }
  </style>
</head>

<body>
  <div style="width:200px;text-align:center">
    <span>校園映象區</span>
    <div style="padding:10px 20px">
      <img src="img/01E01.jpg" onclick=pp(1)>
      <div style="height:309px;overflow:hidden">
        <div id="imglist"></div>
      </div>
      <img src="img/01E02.jpg" onclick=pp(2)>
    </div>
  </div>
  <script>
    /*將資料處理畫面出來 */
    var jsn = <?= $js_ary ?>;
    for (let i = 0; i < jsn.length; i++) {
      $('#imglist').append(`<img class="im" id="ssaa${i}" src="${jsn[i]}" width="150" height="103">`);
    }
    /*按鈕事件*/
    var nowpage = 0; //初始狀態下，一開始的目前頁數定義為0
    var mytop = 0;

    function pp(x) { //假設此時NW=1
      if (x == 1 && nowpage > 0) { //允許往上按
        nowpage--; //NW=0
        mytop += 109;
        $('#imglist').animate({
          "top": mytop + "px"
        }, 1000);
      }
      if (x == 2 && nowpage < jsn.length - 3) { //允許往下按
        nowpage++; //NW=2
        mytop -= 109;
        $('#imglist').animate({
          "top": mytop + "px"
        }, 1000);

      }
    }
  </script>







  <script>
    // var nowpage = 0, num = 0;
    // function pp(x) {
    //   var s, t;
    //   if (x == 1 && nowpage - 1 >= 0) { nowpage--; }
    //   if (x == 2 && (nowpage + 1) * 3 <= num * 1 + 3) { nowpage++; }
    //   $(".im").hide()
    //   for (s = 0; s <= 2; s++) {
    //     t = s * 1 + nowpage * 1;
    //     $("#ssaa" + t).show()
    //   }
    // }
    // pp(1)
  </script>

</body>

</html>