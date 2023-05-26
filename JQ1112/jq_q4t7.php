<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<body>
  <h3>註冊帳號</h3>
  <form onsubmit="return checkflag()">
    姓名：<input type="text" name="name"><br />
    帳號：<input type="text" name="acc" onchange="flag=0"><input type="button" value="檢測帳號" onclick="check()"><br />
    密碼：<input type="password" name="pwd"><br />
    <input type="submit" value="確認">
  </form>

  <script>
    var flag=0;   //0 代表不允許  1 代表允許
    function check() {
      let acc = $("input[name=acc]").val();
      $.post("jq_q4t7_api.php", {acc}, function(re){
        alert(re);
        flag=(re=="可使用此帳號")?1:0;
      });
    }

    function checkflag() {
      if (!flag) {
        alert("請先驗證帳號");
        return false;
      }
      else{
        return true;
      }
    }
  </script>


</body>

</html>