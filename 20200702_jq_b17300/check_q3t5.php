<?php

print_r($_POST);
echo "<hr>";

foreach ($_POST['odr'] as $key => $value) {
  $sql="UPDATE mytable SET odr=".$value." WHERE text='".$key."'";
  echo $sql."<br>";
}

?>