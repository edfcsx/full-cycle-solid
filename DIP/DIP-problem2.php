<?php

class DramaCategory
{

}

class movie
{
    private $name;
    private $category;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCategory()
    {
        return new DramaCategory();
    }
}