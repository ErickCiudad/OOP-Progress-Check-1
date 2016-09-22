<?php
abstract class Nature{

  var $type;
  var $plant_type;
  var $animal_type;


  function setType($newType){
    $this->type = $newType;
  }

  function getType(){
    return $this->type;
  }

}

class people extends Nature{}

class plants extends Nature {
  function __construct($plant_type){
    $this->setType($plant_type);
  }

  private function grow(){
    echo $this->plant_name . " is growing";
  }

}


class animals extends Nature {
  function __construct($animal_type){
    $this->setType($animal_type);
  }

  protected function feed(){
    echo $this->animal_name . " is feeding";
  }

}

static $earth = "world";

class fish extends animals {

}


 ?>
