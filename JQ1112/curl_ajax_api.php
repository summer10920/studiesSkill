<?php
//curl 是php來取得別處的資料

//初始化CURL
$curl=curl_init();

//告知對方關於我的情報，作為識別我方的軟體或版本型號或作業系統
curl_setopt($curl,CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36');

//對方伺服器的憑證如果有SSL且強迫配合，那你要設定為true
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);

//指定對方的位置
curl_setopt($curl,CURLOPT_URL, 'http://opendataap2.e-land.gov.tw/resource/files/2019-08-27/3e356b04ebf12be2922f70c30ab07452.json');

//資料回來後是否要顯現
//當為false時，curl_exec()這個function會自動打印資料出來
//當為true時，curl_exec()不會自己打印，你需要自己額外處理
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

//執行curl
$result=curl_exec($curl);

//中斷結束curl
curl_close($curl);

echo $str=str_replace("\\ufeff","",$result);









// $php_ary=json_decode($result);
// print_r($php_ary);
?>