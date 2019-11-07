<?php


namespace BreadAndIfit\Ingredients;


class Ingredient
{
    protected $id;
    protected $name;
    protected $category;


    /**
     * Gets the ID of each ingredient.
     * @return int the ID from the DB.
     */

    public function getId(): int
    {
        return $this->id;
    }

    /** Gets the name of each ingredient.
     * @return string the name from the DB.
     */

    public function getName(): string
    {
        return $this->name;
    }

    /** Gets the category of each ingredient.
     * @return string the category from the DB.
     */
    public function getCategory(): string
    {
        return $this->category;
    }
}