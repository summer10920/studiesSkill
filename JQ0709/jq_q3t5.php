<?php
$php_ary = array(
  array("img" => "img/03A01.jpg", "text" => "03A01", "odr" => 1),
  array("img" => "img/03A02.jpg", "text" => "03A02", "odr" => 2),
  array("img" => "img/03A03.jpg", "text" => "03A03", "odr" => 3),
  array("img" => "img/03A04.jpg", "text" => "03A04", "odr" => 4),
  array("img" => "img/03A05.jpg", "text" => "03A05", "odr" => 5),
  array("img" => "img/03A06.jpg", "text" => "03A06", "odr" => 6)
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="plugins/jquery-3.4.1.min.js"></script>
</head>

<body>
  <h3>預告片清單</h3>
  <form action="jq_q3t5_api.php" method="post">
    <table>
      <tr>
        <td>預告片海報</td>
        <td>預告片片名</td>
        <td>播放順序</td>
        <td>操作</td>
      </tr>
      <?php
      foreach ($php_ary as $row) {
        ?>
        <tr>
          <td><img src="<?= $row['img'] ?>" width="100"></td>
          <td><?= $row['text'] ?></td>
          <td>
            <input type="hidden" name="odr[<?= $row['text'] ?>]" value="<?= $row['odr'] ?>">
            <input type="button" value="上移" class="up">
            <input type="button" value="下移" class="down">
          </td>
          <td>
            <input type="checkbox">顯示
            <input type="checkbox">刪除
          </td>
        </tr>
      <?php
      }
      ?>
    </table>
    <input type="submit" value="編輯送出">
  </form>
  <script>
    $("input:button").click(function() {
      // console.log($(this).attr("class"));
      // console.log(this.className);
      let nodeA=$(this).parents("tr");
      let nodeB;
      switch (this.className) {
        case "up":
          nodeB=$(this).parents("tr").prev();//selector寫法1
          if(nodeB.find("img").length){
            // numA=nodeA.find("input:hidden").val();
            // nodeA.find("input:hidden").val(numA-1);
            nodeA.find("input:hidden").val((i,d)=>{return Number(d)-1});
            nodeB.find("input:hidden").val((i,d)=>{return (d-0)+1});
            nodeA.insertBefore(nodeB); //選擇A之後，插入於某個對象之前(某對象是指B)
          }
          break;

        case "down":
          nodeB=nodeA.next();//selector寫法2
          console.log(nodeB);
          if(nodeB.length){
            nodeA.find("input:hidden").val((i,d)=>{return Number(d)+1});
            nodeB.find("input:hidden").val((i,d)=>{return Number(d)-1});
            nodeA.insertAfter(nodeB); //選擇A之後，插入於某個對象之後(某對象是指B)
          }
          break;
      }
    });
  </script>
</body>

</html>