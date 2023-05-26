## 自主練習 ##

ex1: 搜尋[mat] 60以上的[student]
```sql
SELECT student from ch6_crud WHERE mat>59
```

ex2: 搜尋[student]中名字有阿的[chi]及格分數
```sql
SELECT student,chi from ch6_crud WHERE student LIKE "阿%"
```

ex3: 使用語法新增三個學生資料
| 學生名稱 | 數學 | 國文 |
| -------- | ---- | ---- |
| 蘋果     | 100  | 100  |
| 鳳梨     | 99   | 50   |
| 檸檬     | 50   | 43   |

```sql
INSERT into ch6_crud (student,chi,mat) VALUES ("蘋果",100,100), ("鳳梨",99,50), ("檸檬",50,43) 
```

ex4: 呈上，數學成績不到60的人，數學自動+10分
```sql
UPDATE ch6_crud SET mat=mat+10 where mat<60
```

---

ex5: 呈上，如果國文成績+10分後會超過100分的同學資料刪除
<!-- ```sql
DELETE FROM ch6_crud WHERE chi+10>100
or
DELETE FROM ch6_crud WHERE chi>90 (精簡提高效能)
``` -->

ex6: 搜尋資料表並顯示國文成績最好的三個人[同學名稱]
<!-- ```sql
SELECT student FROM ch6_crud ORDER BY mat DESC LIMIT 3
``` -->

ex7: 搜尋資料表並顯示數學成績第6名的[同學名稱]
<!-- ```sql
SELECT student FROM ch6_crud ORDER BY mat DESC LIMIT 5,1
``` -->

ex8:呈上，顯示平均成績最差的三個人，並另名為名字,國文,數學,平均之欄位名稱
<!-- ```sql
SELECT student as "名字",chi as "國文",mat as "數學",(chi+mat)/2 as "平均" FROM ch6_crud ORDER BY 平均` LIMIT 3
``` -->