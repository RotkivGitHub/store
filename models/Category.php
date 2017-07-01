<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 15.06.2017
 * Time: 18:49
 */
class Category
{

    private $name;
    private $ID;
    private $slug;

    public function __construct($name, $ID, $slug){
        $this->name = $name;
        $this->ID = $ID;

        if($slug) {
            $this->slug = $slug;
        } else {
            $this->slug = Utils::rusToLat($name);
        }
    }


    public function getName(){
        return $this->name;
    }

    public function getID(){
        return $this->ID;
    }

    public function getSlug(){
        return $this->slug;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->slug = Utils::rusToLat($name);
    }
}