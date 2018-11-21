<?php

  class Door{

    public $width;
    public $height;
    public $unit;

    function __construct($new_width, $new_height){
      $this->width = $new_width;
      $this->height = $new_height;
      $this->unit = "centimeters";
    }

    public function set_width ($new_width) {
  		$this->width = $new_width;
  	}

  	public function get_width () {
  		return $this->width;
  	}

    public function get_width_and_unit () {
  		return $this->width . " " . $this->unit;
  	}

    public function set_height ($new_height) {
  		$this->height = $height;
  	}

  	public function get_height () {
  		return $this->$height;
    }

    public function get_height_and_unit () {
      return $this->height . " " . $this->unit;
    }
}

$door1 = new Door(50,100);
echo "My first door has a width of " . $door1->get_width_and_unit() . " and a height of " . $door1->get_height_and_unit();

?>
