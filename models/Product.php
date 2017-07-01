<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 15.06.2017
 * Time: 20:12
 */
class Product
{
    protected $name;
    protected $ID;
    protected $description;
    protected $icon;
    protected $price;
    protected $exists;

    /**
     * Product constructor.
     * @param $ID
     * @param $name
     * @param $description
     * @param $icon
     * @param $price
     * @param $exists
     */
    public function __construct($ID, $name, $description, $icon, $price, $exists){
        $this->name = $name;
        $this->id = $ID;
        $this->description = $description;
        $this->icon = $icon;
        $this->price = $price;
        $this->exists = $exists;

    }

    public function getName(){
        return $this->name;
    }

    public function getID(){
        return $this->ID;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getIcon(){
        return $this->icon;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function setIcon($icon){
        $this->icon = $icon;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getExists()
    {
        return $this->exists;
    }

    public function setExists($exists)
    {
        $this->exists = $exists;
    }

}