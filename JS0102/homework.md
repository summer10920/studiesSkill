# JS回家作業1

- 建立空白網頁，使用ifelse,alert,confirm,prompt，設計一個是非題之闖5關遊戲。
- 每題都有提示要不要做，猜對繼續闖關，猜錯直接結束遊戲。
- 主題結構如下

```javascript
function gameplay() {
  1. prompt:遊戲說明並取得NAME=xxx，回饋訊息顯示;
  2. confirm:詢問用戶XXX是否要進行遊戲，回饋訊息顯示;
    - TRUE:
      if(qus(問題內容,好訊息,壞訊息,T/F)) return;
      if(qus(問題內容,好訊息,壞訊息,T/F)) return;
      if(qus(問題內容,好訊息,壞訊息,T/F)) return;
      if(qus(問題內容,好訊息,壞訊息,T/F)) return;
      if(qus(問題內容,好訊息,壞訊息,T/F)) return;
      恭喜成功;
    - FALSE:
      不想玩就881;
}
function qus(問題,好,壞,布林){
  1. confirm:顯示題目取得TorF==布林
    - TRUE:顯示好訊息
    - FALSE:顯示壞訊息 return TRUE;
}
gameplay();
```
