### JSON串接的OPEN API

#### 前端要跟後端拿資料AJAX 是不允許不同網域內 => 跨網域 CROS

1. 後端去跟後端串API => PHP的crul()去拿 or Node.js去拿
2. 取得JSONP的方式，偷偷的放一個代碼給你先script，使得你的前端等於自己人的前端。通過瀏覽器的阻擋 (如果對方有提JSONP通常會有文件引導你如何設定變成自己人)
3. 對方的伺服器有特別設定CROS允許，使得瀏覽器再前往URL時可被通過。  (中央氣象局有全開放，屬於這類)


### SOP
1. 先試試看API有沒有效，利用軟體POSTMAN，如果失敗當然對方掛了
2. 採用前面第3點是否拿到，如果失敗確認一下訊息
3. 如果JSON真的被擋下來，看對方有沒有JSONP版本的API可用
4. 採用後端的方式去取得


```javascript
$.ajax({
  url:"https://opendata.cwb.gov.tw/fileapi/v1/opendataapi/F-C0032-001?Authorization=CWB-77F7EF76-6578-458C-ACDF-72ABF4BE7727&downloadType=WEB&format=JSON",
  method:"GET",
  dataType:"json",
  success:function(re){
    data=re;
  }
});
```
```javascript
/* 如果需要等待兩筆上API的寫法 */
$.when(
  $.getJSON("urlA").done(function(re){data1=re}),
  $.getJSON("urlB").done(function(re){data2=re}),
).then(
  console.log(data1,data2);
);
```