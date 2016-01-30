<?php

  namespace beCMS;

  class beCMS {

    public $HTML;

    public function init() {
      $init = 0;
    }

    public function buildHTML() {
      $this->HTML = Builder::make();
    }

    public function render() {

    }
  }
?>
