<?php


namespace BreadAndIfit\Ingredients;


class Ingredient
{
    protected $id;
    protected $name;
    protected $category;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCategory(): string
    {
        return $this->category;
    }
}