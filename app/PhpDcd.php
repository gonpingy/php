<?php
class PhpDcd {
  public function __construct()
  {
    $sample = new Sample('id', 'name');
    $id = $sample->getId();

    if ($id = 'id') {
      echo 'if';
    } else {
      echo 'else';
    }
  }
}
