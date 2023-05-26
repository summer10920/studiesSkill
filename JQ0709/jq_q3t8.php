<?php
$seat = [1, 2, 3, 5, 6, 18]; //已售座位
$movie = array(
  "title" => "獅子王",
  "date" => "2018-08-19",
  "time" => "14:00~16:00"
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<body>
  <form action="jq_q3t8_form.php">

    <?php
    for ($i = 1; $i < 21; $i++) {
      if (in_array($i, $seat)) {
        echo '
        <img src="img/03D03.png" style="padding-right:23px">
      ';
      } else {
        echo '
        <img src="img/03D02.png">
        <input type="checkbox" name="set_select[]" value="' . $i . '">
      ';
      }
      if ($i % 5 == 0) echo '<br>';
    }
    ?>
    <hr>
    <input type="hidden" name="title" value="<?= $movie['title'] ?>">
    <input type="hidden" name="date" value="<?= $movie['date'] ?>">
    <input type="hidden" name="time" value="<?= $movie['time'] ?>">
    你選擇的電影: <?= $movie['title'] ?><br>
    你選擇的時刻: <?= $movie['date'] . " " . $movie['time'] ?><br>
    你已勾選 <b id="nn" style="color:red">0</b> 張票，最多可購買4張票<br><br>
    <input type="submit" value="確定">
  </form>

  <script>
    var num = 0;

    //增加檢查每次載入畫面之打勾數
    $("input:checkbox").each(function() { //多選對象後，each對每個項目進行某事
      if (this.checked) num++;
      $('#nn').text(num);
    });

    //觸發點擊事件
    $("input:checkbox").click(function() {
      // console.log(this.checked);
      if (this.checked) { //當下被勾選
        if (num < 4) num++;
        else {
          this.checked = false;
        }
      } else {
        num--;
      }
      $('#nn').text(num);
    });
  </script>
</body>

</html>