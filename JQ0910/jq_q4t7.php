<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
  <h3>註冊帳號</h3>
  <form onsubmit="return chkflag()">
    姓名 <input type="text" name="name"><br><br>
    帳號 <input type="text" name="acc"> <input type="button" value="檢測帳號" onclick="check()"><br><br>
    密碼 <input type="text" name="pwd"><br><br>
    <input type="submit" value="確認">
  </form>

  <script>
    var flag = 0; //0=>檢查未過,1=>OK
    function check() {
      let acc = $("input[name=acc]").val();
      if (!acc.length) {
        alert("帳號不可空白");
        return;
      }
      $.post("jq_q4t7_api.php", {
        acc
      }, function(re) {
        alert(re);
        flag = (re == "可使用此帳號") ? 1 : 0;
      });
    }

    function chkflag() {
      if (!flag){
        alert("請先檢測帳號");
        return false;
      }
    }
  </script>
</body>

</html>