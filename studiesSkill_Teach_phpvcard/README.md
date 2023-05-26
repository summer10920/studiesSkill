# 練習與作業:(需繳交)
 homework vCard產生器
1. 建立資料夾為PHP_vCard,內含 `index.php`(表單),`api.php`(驗證處理),`preview.php`(預覽資訊),以及多個版型檔案`layout.css×N`

2. 設計`index.php`畫面為表單網頁，表單欄位可輸入
   - 姓名
   - 職稱
   - 聯絡電話
   - 電子信箱
   - 技能簡介
   - 人像照片
   - 下拉選單選擇版型
   - 按鈕有[預覽]，能提交form資料到api.php

3. 設計`api.php`，能將form表單的資料包含圖片路徑(記得存入空間)一起轉成SESSION或COOKIE，接著導向到preview.php。導向連結用`header('location:preview.php');`

4. 設計`preview.php`，主要是能自動依版型(link到layout.css)跟session資訊(或cookie) 整合到HTML，成為完整的vCard畫面。另外提供返回按鈕，設計為`<button onclick="window.history.go(-1)">回頁面</button>`

5. 發揮所學去規劃HTML+CSS，或者去偷老師的[示範網站](http://phpdemo.lokiui.com/ch6_hw/)。

:link: [View Homework Code](https://gist.github.com/summer10920/d271a5797f3091a75f933f0d88ec6424)