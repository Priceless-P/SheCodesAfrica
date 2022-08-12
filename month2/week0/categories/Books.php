<?php

class Books implements Category
{
    use GeneralFeatures;

    public function author($author)
    {
        return $author;
    }

    public function pages($pages)
    {
        return $pages;
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