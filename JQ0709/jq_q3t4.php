<?php
$php_ary = array(
  "03A01" => "img/03A01.jpg",
  "03A02" => "img/03A02.jpg",
  "03A03" => "img/03A03.jpg",
  "03A04" => "img/03A04.jpg",
  "03A05" => "img/03A05.jpg",
  "03A06" => "img/03A06.jpg"
);
$js_ary = json_encode($php_ary);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="plugins/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="plugins/slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="plugins/custom.css" />
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="plugins/slick/slick.min.js" type="text/javascript"></script>
</head>

<body>
  <div id="main">
    <h1>預告片介紹</h1>
    <div id="zone">
      <div class="lists">
        <img src="">
        <p></p>
      </div>
    </div>
    <div class="control">
    </div>
  </div>
  <script>
    /*資料初始化=control區放入縮圖，再利用JQ外掛協助導覽功能設計 */
    var jsn = <?= $js_ary ?>;
    var effect = 1; //1=淡入淡出, 2=slide, 3=縮放, 4=左移
    var findkey = new Array();

    for (key in jsn) {
      $('.control').append(`
          <div><img class="min-img" src="${jsn[key]}" alt="${key}"></div>
        `);
      findkey.push(key);
    }
    $('.control').slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 4,
      dots: true
    });
    /*初始化預覽區之圖片與文字*/
    var nowshow = findkey[0]; //nowshow等於jsn的key，代表圖片之文字
    $('.lists').children('img').attr("src", jsn[nowshow]);
    $('.lists').children('p').text(nowshow);

    /*滑鼠事件*/
    $('.min-img').click(function() {
      let key = $(this).attr('alt');
      clearInterval(pause);
      swap(key);
      autoplay(key);
    });
    // $('.min-img').click((th = this) => {
    //   let key = $(th.target).attr('alt');
    //   swap(key);
    // });


    /*替換事件，主圖從A到B自帶特效*/
    function swap(who) {
      // effect = Math.floor(Math.random()*4)+1;
      switch (effect) {
        case 1:
          $(".lists").fadeOut(function() {
            $(this).children('img').attr("src", jsn[who]);
            $(this).children('p').text(who);
            $(this).fadeIn();
          });
          break;
        case 2:
          $(".lists").slideUp(function() {
            $(this).children('img').attr("src", jsn[who]);
            $(this).children('p').text(who);
            $(this).slideDown();
          });
          break;
        case 3:
          $(".lists").animate({
            top: "200px",
            height: "0px"
          }, function() {
            $(this).children('img').attr("src", jsn[who]);
            $(this).children('p').text(who);
            $(this).animate({
              top: "0px",
              height: "400px"
            });
          });
          break;
        case 4:
          $(".lists").animate({
            left: "-400px"
          }, function() {
            $(this).children('img').attr("src", jsn[who]);
            $(this).children('p').text(who);
            $(this).css("left", "400px");
            $(this).animate({
              left: "0px"
            });
          })
          break;
      }
    }

    /*自動播放 */
    // var nowat = 0;
    function autoplay(key) {
      // console.log(key);
      nowat = findkey.findIndex((each) => {
        return each == key;
      });
      pause = setInterval(function() {
        nowat = (nowat + 1) % findkey.length;
        // console.log(findkey[nowat]);
        swap(findkey[nowat]);
      }, 3000);
    }
    autoplay(findkey[0]);
  </script>




</body>

</html>