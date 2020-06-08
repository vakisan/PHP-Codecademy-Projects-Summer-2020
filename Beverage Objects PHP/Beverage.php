<?php
class Beverage {
  private $temperature, $color;
  protected $opacity;
  function getInfo() {
    return "This beverage is " . $this->temperature . " and " . $this->color;
  }

  function __construct($temperature,$color){
    $this->temperature = $temperature;
    $this->color = $color;
  }

  public function setColor($color){
    $this->color = strtolower($color);
  }

  public function getColor(){
    return $this->color;
  }
}
//these will not work as contructor is chnaged.
//$soda = new Beverage();
//$soda->color = "black";
//$soda->temperature = "cold";
//echo $soda->getInfo();

$tea = new Beverage("cold","black");
echo $tea->getInfo();

class Milk extends Beverage {
    function __construct() {
      $this->temperature = "cold";
    }
  
  function getInfo(){
    return  parent::getInfo() . " I like my milk this way.";
  }    
}

  $milk = new Milk();
  echo $milk->getInfo();
  
  class AdamsUtils {
    public static $the_answer = 42;
    public static function addTowel($string) {
      return $string . " and a towel.";
    }
  }
  
  $items = "I brought apples";
  echo AdamsUtils::$the_answer . "\n";
  echo AdamsUtils::addTowel($items). "\n";