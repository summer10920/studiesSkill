<div style="text-align:center;display:inline-block">
	<?php //單色版：有兩種雙for之寫法，詳看頁尾
	for ($i = 1; $i <= 11; $i += 2) { //$i = 1,3,5,7,9,11
		for ($j = 1; $j <= $i; $j++) {
			echo "★";
		}
		echo "<br>";
	}
	?>
</div>
<div style="text-align:center;display:inline-block;background-color:black;">
	<?php //隨機色
	for ($i = 1; $i <= 11; $i += 2) { //$i = 1,3,5,7,9,11
		for ($j = 1; $j <= $i; $j++) {
			$colorSet=rand(1,100);		//10%red,20%yellow,30%pink,40%white
			if($colorSet<=10) $colorGet="red";
			else if($colorSet<=30) $colorGet="yellow";
			else if($colorSet<=60) $colorGet="pink";
			else $colorGet="white";
			echo "<span style='color:".$colorGet."'>★</span>";
		}
		echo "<br>";
	}
	?>
</div>
<div style="text-align:center;display:inline-block;background-color:black;">
	<?php //自訂函式版
		function getclr(){ //這是一個會自動隨機產生HTML+CSS的一顆★
			$colorSet=rand(1,100);		//10%red,20%yellow,30%pink,40%white
			if($colorSet<=10) return "<span style='color:red'>★</span>";
			else if($colorSet<=30) return "<span style='color:yellow'>★</span>";
			else if($colorSet<=60) return "<span style='color:pink'>★</span>";
			else return "<span style='color:white'>★</span>";
		}

		for ($i = 1; $i <= 11; $i += 2) { //$i = 1,3,5,7,9,11
			for ($j = 1; $j <= $i; $j++) {
				$reslut=getclr();
				echo $reslut;
			}
			echo "<br>";
		}
	?>
</div>

<?php
/***********
//方法A
$max=1;
for ($i=1;$i<=6;$i++) {
	//$max 這個變數他會變化，一開始是1，接著是3,5,7,9,11
	for ($j = 1; $j <= $max; $j++) {
		echo "★";
	}
	echo "<br>";
	$max+=2;
}
//方法B
for ($i = 1; $i <= 11; $i += 2) { //$i = 1,3,5,7,9,11
	for ($j = 1; $j <= $i; $j++) {
		echo "★";
	}
	echo "<br>";
}

 */
?>