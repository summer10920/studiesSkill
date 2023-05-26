<?php
$php_ary = array(
  '03A01' => 'img/03A01.jpg',
  '03A02' => 'img/03A02.jpg',
  '03A03' => 'img/03A03.jpg',
  '03A04' => 'img/03A04.jpg',
  '03A05' => 'img/03A05.jpg',
  '03A06' => 'img/03A06.jpg'
);
$php_jsn = json_encode($php_ary);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="plugins/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="plugins/slick/slick-theme.css" />
  <link rel="stylesheet" href="plugins/q3t4_css.css">

  <script src="plugins/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="plugins/slick/slick.min.js"></script>
</head>

<body>
  <div id="main">
    <h1>預告片介紹</h1>
    <div id="zone">
      <div class="lists">
        <img src="img/03A01.jpg">
        <p>123</p>
      </div>
    </div>
    <div class="control">
      <!-- <img src="img/03A01.jpg">
      <img src="img/03A01.jpg">
      <img src="img/03A01.jpg">
      <img src="img/03A01.jpg">
      <img src="img/03A01.jpg">
      <img src="img/03A01.jpg"> -->
    </div>
  </div>
  <script>
    //初始化縮圖區域
    var jsn = <?= $php_jsn ?>; // json 內含 名稱與圖片
    var effect = 1; // 1=淡入淡出,2=縮放,3=左移
    var findkey = new Array(); // 這裡會依序的放入jsn的key

    var run; //做為全域變數提供interval使用
    var nowat=0;  //控制autoplay 從數字幾開始

    for (let key in jsn) {
      $(".control").append(`
        <img class="min-img" src="${jsn[key]}" alt="${key}">
      `);
      findkey.push(key);
    }
    $(document).ready(function() {
      $('.control').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        dots: true
      });
    });

    //初始化展示區 也就是從數字0變出圖片
    var nowshow = findkey[0]; //拿到電影名稱，也就是key
    $(".lists>img").attr("src", jsn[nowshow]);
    $(".lists>p").text(nowshow);
    
    
    //滑鼠觸發事件
    $(".min-img").click(function() {
      let key = $(this).attr("alt");
      clearInterval(run);
      swap(key);
      nowat=findkey.findIndex(function(e) {
        return (e==key);
      });
      autoplay();
    });

    //替換與特效事件
    function swap(who) {
      switch (effect) {
        case 1:
          $(".lists").fadeOut(function() {
            $(this).children("img").attr("src", jsn[who]);
            $(this).children("p").text(who);
            $(this).fadeIn();
          });
          break;
        case 2:
          $(".lists").slideToggle(function() {
            $(this).children("img").attr("src", jsn[who]);
            $(this).children("p").text(who);
            $(this).slideToggle();
          });
          break;
        case 3:
          $(".lists").animate({
            "left": "-100%"
          }, function() {
            $(this).children("img").attr("src", jsn[who]);
            $(this).children("p").text(who);
            $(this).css("left", "100%");
            $(this).animate({
              "left": "0%"
            });
          });
          break;
        case 4:
          $(".lists").animate({
            "height": "0%",
            "top":"50%"
          }, function() {
            $(this).children("img").attr("src", jsn[who]);
            $(this).children("p").text(who);
            $(this).animate({
              "height":"100%",
              "top": "0%"
            });
          });
          break;
      }
    }
    
    function autoplay(){
      run=setInterval(function() {
        nowat=(nowat+1)%(findkey.length);
        swap(findkey[nowat]);
      },2000);
    }
    autoplay();
  </script>
</body>

</html>