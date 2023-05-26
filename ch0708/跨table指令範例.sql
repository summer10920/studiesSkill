INSERT INTO ch7_customer
VALUES
(null,"mr.A","user1","pwd1"),
(null,"mr.B","user2","pwd2"),
(null,"mr.C","user3","pwd3"),
(null,"mr.D","user4","pwd4")

INSERT INTO ch7_product
VALUES
(null,"product1",100,"it's 100 dollors"),
(null,"product2",200,"it's 200 dollors"),
(null,"product3",300,"it's 300 dollors"),
(null,"product4",400,"it's 400 dollors")

mr.C 購買 product2 共 3個 訂單時間為現在
mr.D 購買 product1 共 10個 訂單時間為現在
INSERT INTO ch7_order VALUES (NULL,2,3,3,NOW()),(NULL,1,10,4,NOW())

# 把訂單資料完整顯示

1. 合併搜尋(跨table搜尋)
會得到所有的排列組合，也就是很多不存在的訂單 
SELECT * FROM ch7_customer as t1, ch7_product as t2, ch7_order as t3 WHERE 1

PS:AS可以不寫，如果你看得懂

2. 關聯搜尋 (站在ch7_order角度，把其他table的資訊捉回來)
SELECT * FROM ch7_customer as t1, ch7_product as t2, ch7_order as t3 
WHERE t1.id=t3.customer_sn AND t2.id=t3.product_sn

3. 關聯搜尋且精準的指定需求欄位
SELECT 
  t3.id as "訂單編號",
  t1.name as "購買人",
  t2.product_name as "商品名稱",
  t3.order_num as "購買數量",
  (t2.product_price*t3.order_num) as "消費金額",
  t3.order_time as "訂單時間"
FROM ch7_customer as t1, ch7_product as t2, ch7_order as t3 
WHERE t1.id=t3.customer_sn AND t2.id=t3.product_sn