

完成的同學幫忙完成以下三個table建立

1. 建立table 客戶資料 ch7_customer
    欄位：客戶帳號 acc、密碼 pwd、姓名 name、id
```sql
CREATE TABLE ch7_customer (id int(10) AUTO_INCREMENT, acc text, pwd text, name text, PRIMARY KEY(id));
-- crate table 客戶資料表 (索引欄 整數(長度10), 客戶帳號 文字串, 密碼 文字串, 姓名 文字串, primary key(索引值));
```

2. 建立table 訂單資料 ch7_order
    欄位：產品編號 product_sn 、購買數量 order_num 、客戶編號 customer_sn、訂購時間 order_time,id
```sql
CREATE TABLE ch7_order (id int(10) AUTO_INCREMENT, product_sn text, order_num int(10), customer_sn text, order_time DATETIME, PRIMARY KEY(id));
-- crate table 訂單資料表 (索引攔 整數(長度10), 產品編號 文字串, 購買數量 整數(長度10), 客戶編號 文字串, 訂單時間 日時, primary key(索引值));
```
    
3. 建立資料 ch7_product
    欄位：產品名稱 product_name、產品金額 product_price、產品介紹 product_desc,id
```sql
CREATE TABLE ch7_product (id int(10) AUTO_INCREMENT, product_name text, product_price int(10), product_desc text, PRIMARY KEY(id));
-- crate table 訂單資料表 (索引攔 整數(長度10), 產品名 文字串, 產品價格 浮點數(長度10,小數點2), 產品介紹 文字串, primary key(索引值));
```


ch7_customer
| id  | name | acc   | pwd  |
| --- | ---- | ----- | ---- |
| 1   | mr.A | user1 | pwd1 |
| 2   | mr.B | user2 | pwd2 |
| 3   | mr.C | user3 | pwd3 |
| 4   | mr.D | user4 | pwd4 |

ch7_product
| id  | product_name | product_price | product_desc     |
| --- | ------------ | ------------- | ---------------- |
| 1   | product1     | 100           | it's 100 dollors |
| 2   | product2     | 200           | it's 200 dollors |
| 3   | product3     | 300           | it's 300 dollors |
| 4   | product4     | 400           | it's 400 dollors |
| 5   | product5     | 500           | it's 500 dollors |

ch7_order
| id  | product_sn | order_num | customer_sn | order_time          |
| --- | ---------- | --------- | ----------- | ------------------- |
| 1   | 2          | 3         | 3           | 2019-10-31 10:44:23 |
| 2   | 1          | 10        | 4           | 2019-10-31 10:44:23 |