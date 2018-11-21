<?php
 class Wheel{
   $diameter;
   $width;

   function __construct($new_diameter, $new_width){
     this->$diameter = $new_diameter;
     this->$width = $new_width;
   }

   function set_width($new_width){
     $this->$width = $new_width;
   }

   function get_width(){
     return $this->$width;
   }

   function set_diameter($new_diameter){
     $this->$diameter = $new_diameter;
   }

   function get_diameter(){
     return $this->$diameter;
   }


 }


 ?>
