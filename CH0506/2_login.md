## 自主練習:根據以下步驟做個簡單的帳戶登入，指定帳密為admin/1234並試著做帳密驗證，如果不正常則跳出警示。

1. 首先建立2_login.php
2. 規劃兩個input做帳號與密碼，使用action到2_check.php，做post驗證
3. 在2_check.php那裏做帳號密碼驗證，如果不符合admin/1234，跳出相對應的用戶提示。
4. 用戶提示可以使用JS alert，例如 `echo "<script>alert(‘text’)</script>"`;
5. 如果帳密都成功，轉址導向到google。