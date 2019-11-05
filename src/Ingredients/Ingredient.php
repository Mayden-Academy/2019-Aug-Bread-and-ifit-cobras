<?php


namespace BreadAndIfit\Ingredients;


class Ingredient
{
    private $id;
    private $name;
    private $category;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getCategory() {
        return $this->category;
    }
}