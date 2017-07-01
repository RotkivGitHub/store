<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 15.06.2017
 * Time: 20:41
 */
class FeedBack
{
    private $id;
    private $productID;
    private $text;
    private $username;
    private $dataCreate;
    private $rating;
    private $status;

    public function __construct($id, $productID, $text, $username, $dataCreate, $rating, $status )
    {
        $this-> id = $id;
        $this-> productID = $productID;
        $this-> text = $text;
        $this-> username = $username;
        $this-> dataCreate = $dataCreate;
        $this-> rating = $rating;
        $this-> status = $status;

    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getProductID()
    {
        return $this->productID;
    }

    public function setProductID($productID)
    {
        $this->productID = $productID;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getDataCreate()
    {
        return $this->dataCreate;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }


}