<?php
class Nature{

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


class plants extends Nature {
  function __construct($plant_type){
    $this->setType($plant_type);
  }

  function grow(){
    echo $this->plant_name . " is growing";
  }

}


class animals extends Nature {
  function __construct($animal_type){
    $this->setType($animal_type);
  }

  function feed(){
    echo $this->animal_name . " is feeding";
  }

}



 ?>
