# 練習與作業:(需繳交)
jsStoryGame：學習對BOM控制(alert,confirm,prompt)以及多維層級之判斷事件處理。選擇以下作業(擇其一即可)要求

## 基本作業
- 建立空白網頁不需要HTML標籤，僅使用JS腳本透過ifelse,alert,confirm,prompt等設計一個是非題之闖5關遊戲。
- 每人故事題材自行發揮。每題都有提示選擇"是"或"否"，猜對繼續闖關，猜錯直接結束遊戲。
- 主體參考結構如下：

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

參考設計 
:link: [Teacher DEMO](http://page002.lokiui.com/ver1/)


## 挑戰作業
使用JS套件 [sweetalert2](https://sweetalert2.github.io/) 完成本次作業，相同五關連續答題之故事設計。

- 發揮所學控制DOM變化，使畫面設計更豐富。

參考設計 
:link: [Teacher DEMO](http://page002.lokiui.com/)
