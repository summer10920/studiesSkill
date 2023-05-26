<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <style>
  a{
    display: block;
    padding:20px 5px;
    margin:5px auto;
    background: #EB8;
    color:#630;
    width:200px;
    text-decoration: none;
    text-align: center;
  }
  .son{
    background: #FEB;
  }
  </style>
  <script src="plugins/jquery-3.4.1.min.js"></script>
</head>
<body>
  <a href="#">全部商品</a>
  <a href="#" id="fa1" class="fa">流行皮件</a>
    <a href="#" class="son fa1">男用皮件</a>
    <a href="#" class="son fa1">女用皮件</a>
  <a href="#" id="fa2" class="fa">流行鞋區</a>
    <a href="#" class="son fa2">紳士鞋區</a>
    <a href="#" class="son fa2">淑女鞋區</a>
  <a href="#" id="fa3" class="fa">流行飾品</a>
    <a href="#" class="son fa3">時尚珠寶</a>
    <a href="#" class="son fa3">時尚手錶</a>
  <a href="#" id="fa4" class="fa">背包</a>
    <a href="#" class="son fa4">隨身包</a>
  <script>
    $(".son").hide();
    $(".fa").hover(function(){
      let who=$(this).attr("id");
      $(".son").not("."+who).slideUp("fast");
      $("."+who).slideDown("fast");
    });
  </script>
</body>
</html>