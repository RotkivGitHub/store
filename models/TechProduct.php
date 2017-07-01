<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 15.06.2017
 * Time: 20:25
 */
class TechProduct extends Product
{
    private $categoryID;
    private $rating;

    public function __construct($ID, $name, $description, $icon, $price, $exists)
    {
        parent::__construct($ID, $name, $description, $icon, $price, $exists);
        $this->categoryID = $categoryID;
    }

    public function getCategoryID(){
        return $this->categoryID;
    }


    public function getRating()
    {
        return $this->rating;
    }

    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;
    }


    public function setRating($rating)
    {
        $this->rating = $rating;
    }


}