<?php

interface Category
{

}

class DramaCategory implements Category
{

}

class XCategory implements Category
{

}

class Movie
{
    public function __construct($name, Category $category)
    {
        $this->name = $name;
        $this->category = $category;
    }

    private $name;
    private $category;

    public function setCategory(Category $category) {
        $this->category = $category;
    }
}

$movie = new Movie("name", new DramaCategory());
$movie1 = new Movie("name", new XCategory());