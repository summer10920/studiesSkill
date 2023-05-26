<h3>練習:</h3>
<p>隨機產生一組密碼，由0-9,a-z,A-Z所組成，密碼長度8~12</p>
<p>使用到的函式有rand(),chr(),for(),if()else</p>

<?php
$max = rand(8, 12);
for ($i = 0; $i < $max; $i++) {
	$who = rand(0, 61);
	/*
	who代碼 => 0~9=0~9,A~Z=10~35,a~z=36~61
	ascII代碼 0~9=48~57,A~Z=65~90,a~z=97~122
	*/
	if($who<10) echo $who; //by 0~9
	elseif($who<36) echo chr($who+55); //by A~Z
	else echo chr($who+61); //by a~z
}
?>