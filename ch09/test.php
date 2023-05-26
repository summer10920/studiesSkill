<?php
require_once("sql.php");


// plo("http://www.kimo.com/");

echo "<script>".jlo("http://www.kimo.com")."</script>";
?>

<script>
  <?=jlo("http://www.kimo.com")?>
</script>


<?php
/*
$myary=array(
  'delat'=>'text="我是泰山下智久"',
);
// print_r($myary);

delete($myary,"q1t3_title");

/*
DELETE FROM q1t3_title WHERE text="我是泰山下智久"
*/

/*
DELETE FROM q1t3_title WHERE id=1
DELETE FROM q1t3_title WHERE id=3
DELETE FROM q1t3_title WHERE id=5
*/



/*
UPDATE q1t3_title SET img='myimg.jpg' WHERE id=3
UPDATE q1t3_title SET text='泰山下' WHERE id=3
*/


// update($myary,"q1t3_title");

//UPDATE q1t3_title SET num=num+1 WHERE id=3
//UPDATE q1t3_title SET num=num-1 WHERE id=3
?>