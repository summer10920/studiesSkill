<?php
  //array(),array_values(),sort(),rand(),foreach(),shuffle()
?>
<style>
div{
  width:2em;
  display: inline-block;
  text-align: center;
  background-color: yellow;
  border-radius: 50%;
  height: 2em;
  line-height: 2em;
  margin: 10px;
  font-size: 2em;
}
hr{
  width:500px;
  margin:0;
  background-color:#ccc;
  height:5px;
}
</style>
<?php
// $data=range(1,49); //產生1~49星球放置到一個叫做$data的陣列

// for($run=0;$run<rand(5,10);$run++){ //產生5~10組的抽球過程
//   $getBall=array(); //將已抽的球歸零，也就是重新指定此變數為陣列且沒有指定任何內容

//   for($i=0;$i<6;$i++){ //開始抽球共6趟
//   $tmp=rand(0,48); //$tmp是索引0~48
//   //如果偵測到某個數字球($data[$tmp])不在$getBall陣列內，成立
//   if(!in_array($data[$tmp],$getBall))
//   $getBall[]=$data[$tmp];
//   else
//   $i--;
//   // echo "A";
//   }
//   sort($getBall);
//   foreach($getBall as $ball) {
//   $show=($ball<10)?"0".$ball:$ball; //補零
//   echo "<div>".$show."</div>";
//   }
//   print "<hr>";
// }


// // $max=rand(5,10);
// for($run=0;$run<rand(5,10);$run++){
//   $OutSideBalls=array();
//   for($i=0;$i<6;$i++){
//     // $AllBalls=range(1,49); //會把value 1~49 放入陣列，所以舉例 $AllBalls[0]=1......$AllBalls[48]=49
//     // $selectWho=rand(0,48);//抽球(隨機決定到你選擇了什麼球),會拿來當作陣列之索引(key)
//     $selectNumber=rand(1,49);
    
//     //偷瞄(如果重複的球馬上丟掉，立刻重新回到上一步驟)
//     // in_array(($selectWho+1),$OutSideBalls); //if 前者有在後者之陣列會回傳TRUE
//     if(in_array($selectNumber,$OutSideBalls)){//真的發現[OutSideBalls]內有重複(O) 真的發現[空陣列]內有重複(X)
//       // var_dump(in_array($selectNumber,$OutSideBalls));
//       // echo $selectNumber;
//       // print_r($OutSideBalls);
//       $i--;
//     }
//     else{//沒找到重複的
//       $OutSideBalls[]=$selectNumber;//取出(把球球拿出來)
//     }
//   }
//   sort($OutSideBalls);
//   foreach($OutSideBalls as $OneBall){
//     echo "<div>".$OneBall."</div>";
//   }
//   echo "<hr>";
// }

for($run=0;$run<rand(5,10);$run++){ //run times
  $OutSideBalls=array();
  for($i=0;$i<6;$i++){ //make OutBalls
    $selectNumber=rand(1,49);
    if(in_array($selectNumber,$OutSideBalls)) $i--;
    else $OutSideBalls[]=$selectNumber;
  }
  sort($OutSideBalls);
  foreach($OutSideBalls as $OneBall) echo "<div>".$OneBall."</div>"; //print OutBalls
  echo "<hr>";
}
?>