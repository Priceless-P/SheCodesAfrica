<?php

require_once 'Category.php';
require_once '../features/GeneralFeatures.php';
class Gadgets implements Category
{
    use GeneralFeatures;

    public function model($model)
    {
        return $model;
    }

    public function weight($weight)
    {
        return $weight;
    }

    public function type($type)
    {
        return $type;
    }

    public function is_available($is_available)
    {
        return $is_available;
    }
}