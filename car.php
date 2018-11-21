<?php
class Car{

public $nr_of_passengers = 0;
public $is_auto = True;

function __construct($nr, $is_automatic){
  $this->nr_of_passengers = $nr;
  $this->is_auto = $is_automatic;

}

function set_gear_type($is_automatic){
  $this->is_auto = $is_automatic;
}

function get_nr_of_pax(){
  return $this->nr_of_passengers;
}

function get_is_auto(){
  return $this->is_auto;
}


}

?>
