<?php

class Shoes implements Category
{
    use GeneralFeatures;

    public function size($size)
    {
        return $size;
    }

    public function color($color)
    {
        return $color;
    }

    public function gender($gender)
    {
        return $gender;
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
