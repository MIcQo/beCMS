<?php

$core = scandir('core');

foreach($core as $file) {
  if($file != '.' || $file != '..') {
    include_once($core."/".$file);
  }
}

?>
