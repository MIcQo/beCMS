<?php
  include_once('libs/loader.php');
  // Load application
  beCMS\beCMS::init();
  // Build base HTML from default theme
  beCMS\beCMS::buildHTML();
  // Render a final HTML
  beCMS\beCMS::render();
?>
