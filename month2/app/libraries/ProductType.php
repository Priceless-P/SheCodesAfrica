<?php

abstract class ProductType {
    private $id;
    public function __construct($id){
        $this->id = $id;
        
    }
}