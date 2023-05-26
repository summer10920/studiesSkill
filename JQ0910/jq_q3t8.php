<?php
$db = new PDO("mysql:host=127.0.0.1;dbname=php_study;charset=utf8", "root", "");
$sql = "SELECT * FROM jq9_movie WHERE 1";
$rows = $db->query($sql)->fetchAll();
// print_r($rows);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<body>
  <form>
    電影：<select name="mm" id="sm" onchange="gt()">
      <?php
      foreach ($rows as $row) echo '<option value="' . $row['id'] . '">' . $row['title'] . '</option>';
      ?>
    </select>
    日期：<select name="dd" id="sd" onchange="gt()"></select>
    場次：<select name="tt" id="st"></select>
    <input type="submit" value="確定">
  </form>



  <script>
    /*日期計算小函式*/
    function gdate(add) {
      let theday = new Date();
      let gg = theday.getDate(); //先算今天gg號
      theday.setDate(gg + add); //指定theday的時間格式之Date為gg + 1天
      let yy = theday.getFullYear();
      let mm = theday.getMonth() + 1;
      let dd = theday.getDate();
      return `${yy}-${mm}-${dd}`;
    }

    function gt() { //負責將電影與日期送交ajax取得對應的資料並塞回#st.html(<option>...</option>)
      let movie = $('#sm').val();
      let date = $('#sd').val();
      $.post("jq_q3t8_api.php",{movie,date},function(re){
        $('#st').html(re);
      });
    }

    /*算出7天的日期*/
    $('#sd').html(`
      <option value="${gdate(0)}">${gdate(0)}</option>
      <option value="${gdate(1)}">${gdate(1)}</option>
      <option value="${gdate(2)}">${gdate(2)}</option>
      <option value="${gdate(3)}">${gdate(3)}</option>
      <option value="${gdate(4)}">${gdate(4)}</option>
      <option value="${gdate(5)}">${gdate(5)}</option>
      <option value="${gdate(6)}">${gdate(6)}</option>
    `);

    gt();
  </script>

</body>

</html>