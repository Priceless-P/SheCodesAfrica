<?php

interface Category
{
    public function type($size);

    public function is_available($is_available);
}
