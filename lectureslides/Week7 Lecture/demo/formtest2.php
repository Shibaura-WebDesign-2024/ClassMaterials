<?php // formtest.php
if (isset($_GET['startrek'])){
  $name = $_GET['startrek'];
  echo $name;
}
else{
  $name = "(Not entered)";
}
?>