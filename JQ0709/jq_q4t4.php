<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <style>
    a {
      display: block;
      padding: 20px 5px 20px 5px;
      text-decoration: none;
      background: #F4C591;
      margin: 10px auto 10px auto;
      color: #65350A;
      width: 200px;
      text-align: center;
    }

    .son {
      background: #f3dfca;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<body>
  <a href="">全部商品</a>
  <a href="" id="fa1" class="fa">流行皮件</a>
  <a href="" class="son fa1">男用皮件</a>
  <a href="" class="son fa1">女用皮件</a>
  <a href="" id="fa2" class="fa">流行鞋區</a>
  <a href="" class="son fa2">少女鞋區</a>
  <a href="" class="son fa2">紳士流行鞋區</a>
  <a href="" id="fa3" class="fa">流行飾品</a>
  <a href="" class="son fa3">時尚手錶</a>
  <a href="" class="son fa3">時尚珠寶</a>
  <a href="" id="fa4" class="fa">背包</a>
  <a href="" class="son fa4">背包</a>

  <script>
    $('.son').hide();
    $('.fa').mouseover(function() {
      let aa = $(this).attr('id'); //if now aa='fa1';
      $('.son').not('.'+aa).slideUp('fast'); //same 沒有'.fa1'的做hide;
      $('.'+aa).slideDown('fast'); //same $('.fa1').show();
    });
  </script>
</body>

</html>