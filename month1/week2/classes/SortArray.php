<?php
/**
 * This class sorts an ordered integer array with the help of sort() function.
 */

 class SortArray {
    public $array;
      public function __construct($array)
      {
        $this->array = $array;
      }
      public function sortAll()
      {
        $value =  $this->array;
      $result = sort($value);
      return $value ;
          
      }
   }