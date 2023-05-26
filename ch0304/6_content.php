<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<?php
require_once('lib.php'); //PHP開始工作之前就會載入，偏向靜態;
taobo();
echo date("Y-m-d H:i:s");
// $aa=123;
// $bb=456;
// $cc=789;
include_once('../ch0304/6_header.php'); //include 跟 include_once的差異在於是否多判斷曾經載入過，有就不再載入


?>
<hr>
  <p>窩矮蝦皮！</p>
  <p>窩矮蝦皮！</p>
  <p>窩矮蝦皮！</p>
  <p>窩矮蝦皮！</p>
  <p>窩矮蝦皮！</p>
  <p>窩矮蝦皮！</p>
  <p>窩矮蝦皮！</p>
  <hr>
<?php
include_once('6_footer.php');
?>

</body>
</html>