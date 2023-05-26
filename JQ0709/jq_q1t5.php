<?php
$php_ary = array(
  'img/01C01.swf',
  'img/01C02.swf',
  'img/01C03.swf',
  'img/01C04.swf',
  'img/01C05.gif',
  'img/01C06.gif'
);
// print_r($php_ary);
$js_ary = json_encode($php_ary);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<body>
  <div style="width:100%; padding:2px; height:290px;">
    <div id="mwww" loop="true" style="width:100%; height:100%;">沒有資料</div>
  </div>


  <script>
    var lin=<?=$js_ary?>;
    if(lin[0]!=null){ //後端有提供資料給我才替換DOM，否則就仍保留原本的"沒有資料"四個字不要去異動它
      $('#mwww').html(`<embed src="${lin[0]}" style="width:100%;height:100%">`);
      if(lin.length>1){
        let now=1;
        setInterval(()=>{
          $('#mwww').html(`<embed src="${lin[now]}" style="width:100%;height:100%">`);
          now=(now+1)%lin.length;  //新值=(舊值+1)%總數，新值範圍會等於0~N，且N+1=總數
        }, 3000);
      }
    }
  </script>
</body>

</html>