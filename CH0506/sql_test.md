
ex1: 搜尋[mat] 60以上的[student]
```sql
SELECT * FROM ch6_crud WHERE mat>=60
```

ex2: 搜尋[student]中名字有之的[chi]分數
```sql
SELECT student,chi FROM ch6_crud WHERE student LIKE "%之%";
```

ex3: 使用語法新增三個學生資料
| 學生名稱 | 數學 | 國文 |
| -------- | ---- | ---- |
| 蘋果     | 100  | 100  |
| 鳳梨     | 99   | 50   |
| 檸檬     | 50   | 43   |
```sql
INSERT INTO ch6_crud (student,chi,mat) VALUES ("蘋果",100,100),("鳳梨",99,50),("檸檬",50,43)
```

ex4: 呈上，數學成績不到60的人，數學自動+10分
```sql
UPDATE ch6_crud SET mat=mat+10 WHERE mat<=60
```

ex5: 呈上，如果國文成績+10分後會超過100分的同學資料刪除(請殺掉chi 91分以上的同學)
```sql
DELETE FROM ch6_crud WHERE chi>90
DELETE FROM ch6_crud WHERE chi+10>100
```

ex6: 搜尋資料表並顯示國文成績最好的三個人[同學名稱]
```sql
SELECT student FROM ch6_crud WHERE 1 ORDER BY chi DESC LIMIT 3
```

ex7: 搜尋資料表並顯示數學成績第6名的[同學名稱]
```sql
SELECT student FROM ch6_crud WHERE 1 ORDER BY mat DESC LIMIT 5,1
```

ex8:呈上，顯示平均成績最差的三個人，並另名為名字,國文,數學,平均之欄位名稱
```sql
SELECT student as "名字",chi as "國文",mat as "數學", (chi+mat)/2 as "平均" FROM ch6_crud WHERE 1 ORDER BY 平均 LIMIT 3
```

練習:
1. 建立table 客戶資料 ch6_customer
  - 欄位：id(主鍵+AUTO I)，客戶帳號 acc、密碼 pwd、姓名 name

```sql
CREATE TABLE `php_study`.`ch6_customer` ( `id` INT NOT NULL AUTO_INCREMENT ,  `acc` VARCHAR(300) NOT NULL ,  `pwd` TEXT NOT NULL ,  `name` TEXT NOT NULL ,    PRIMARY KEY  (`id`)) ENGINE = InnoDB;
```

2. 建立table 訂單資料 ch6_order
  - 欄位：id(主鍵+AUTO I)，產品編號 product_sn 、購買數量 order_num 、客戶編號 customer_sn、訂購時間 order_time

```sql
CREATE TABLE `php_study`.`ch6_order` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,  `product_sn` INT NOT NULL ,  `order_num` INT NOT NULL ,  `customer_sn` INT NOT NULL ,  `order_time` DATETIME NOT NULL ,    PRIMARY KEY  (`id`)) ENGINE = InnoDB;
```

3. 建立資料 ch6_product
  - 欄位：id(主鍵+AUTO I)，產品名稱 product_name、產品金額 product_price、產品介紹 product_desc

```sql
CREATE TABLE `php_study`.`ch6_product` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,  `product_name` TEXT NOT NULL ,  `product_price` INT NOT NULL ,    PRIMARY KEY  (`id`)) ENGINE = InnoDB;
ALTER TABLE `ch6_product`  ADD `product_desc` TEXT NOT NULL  AFTER `product_price`;
```

4. 新增ch6_customer與ch6_product的內容資料多筆(內容參考下列)，請練習使用語法建立
```sql
INSERT INTO ch6_customer VALUES
(null,"user1","pwd1","mr.A"),
(null,"user2","pwd2","mr.B"),
(null,"user3","pwd3","mr.C"),
(null,"user4","pwd4","mr.D");

INSERT INTO ch6_product VALUES
(null,"product1",100,"it's 100 dollors"),
(null,"product2",200,"it's 200 dollors"),
(null,"product3",300,"it's 300 dollors"),
(null,"product4",400,"it's 400 dollors"),
(null,"product5",500,"it's 500 dollors");
```
---

ch6_customer (副)
| id  | acc   | pwd  | name |
| --- | ----- | ---- | ---- |
| 1   | user1 | pwd1 | mr.A |
| `2`   | user2 | pwd2 | mr.B |
| `3`   | user3 | pwd3 | mr.C |
| 4   | user4 | pwd4 | mr.D |

ch6_order (主)
| id  | product_sn( | buy_num | customer_sn | order_time          |
| --- | ---------- | ------- | ----------- | ------------------- |
| 1   | `3`          | 2       | `2`           | 2019-06-24 20:26:00 |
| 2   | `5`          | 10      | `3`           | 2019-06-25 11:26:00 |

ch6_product (副)
| id  | product_name | product_price | product_desc     |
| --- | ------------ | ------------- | ---------------- |
| 1   | product1     | 100           | it's 100 dollors |
| 2   | product2     | 200           | it's 200 dollors |
| `3`   | product3     | 300           | it's 300 dollors |
| 4   | product4     | 400           | it's 400 dollors |
| `5`   | product5     | 500           | it's 500 dollors |


5. 帶出三個關聯資料的所有組合
```sql
# 列出所有的排列組合
SELECT * FROM ch6_customer,ch6_order,ch6_product WHERE 1

# 帶出訂單的完整資訊，寫法1
SELECT * 
FROM ch6_customer t1, ch6_order t2, ch6_product t3 
WHERE 
t1.id=t2.customer_sn and t2.product_sn=t3.id

# 帶出訂單的完整資訊，寫法2
SELECT * 
FROM 
ch6_order master, ch6_customer slave1, ch6_product slave2 
WHERE 
master.customer_sn=slave1.id 
and 
master.product_sn=slave2.id
```