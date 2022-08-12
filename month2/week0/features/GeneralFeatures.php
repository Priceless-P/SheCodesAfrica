<?php

trait GeneralFeatures
{
    private $name_of_product;
    private $price;
    private $excerpt;
    private $description;
    private $category;

    public function setName($name)
    {
        $value = $this->name_of_product = $name;

        return $value;
    }

    public function setPrice($price)
    {
        $value = $this->price = $price;

        return $value;
    }

    public function setExcerpt($excerpt)
    {
        $value = $this->excerpt = $excerpt;

        return $value;
    }

    public function setDescription($description)
    {
        $value = $this->description = $description;

        return $value;
    }

    public function setCategory($category)
    {
        $value = $this->category = $category;

        return $value;
    }
}
